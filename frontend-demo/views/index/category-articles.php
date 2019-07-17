<?php

use frontend\models\FunctionPub;

use common\models\Category;
use common\models\Article;
use common\models\Photo;

use yii\data\Pagination;
use yii\widgets\LinkPager;

/**
 * css description:
 * Page index: prefix kt-index-???
 * Noprefix -index- is use public website
 */


$idcate = Yii::$app->request->get('category');
$cateCon = [$idcate];

$cate = Category::find()
    ->asArray()
    ->where(['id_category' => $idcate])
    ->select([
        'id_category',
        'name',
        'image',
        'link',
        'id_parent',
        'SEO_title',
        'SEO_description',
        'SEO_keyword'
    ])->one();

/* @var $this yii\web\View */
$arrTag['title'] = $cate['SEO_title'];
$arrTag['description'] = $cate['SEO_description'];
$arrTag['keyword'] = $cate['SEO_keyword'];
$arrTag['category'] = $cate['name'];
$arrTag['image'] = Yii::$app->params['linkWeb'] . FunctionPub::returnSrcImage('category', $cate['image'], '');
FunctionPub::createMeta($arrTag);

$all_menu = FunctionPub::arr_menu(Category::find()->asArray()->where(['id_type_category' => 5])->all());
FunctionPub::dq_menu_childrent($all_menu, $idcate, 'id_category', $cateCon, '');

$query = Article::find()
    ->distinct()
    ->asArray()
    ->joinWith('category')
    /*->joinWith('photo')
    ->join('LEFT JOIN', '(
        SELECT
            liked.id_post,
            Count(liked.id_liked) AS total_liked
        FROM liked
        GROUP BY liked.id_post
    ) as lik', 'lik.id_post = article.id_post')*/
    ->where(['article.id_category' => $cateCon, 'article.status' => 1])
    ->select([
        'article.*',
        //'lik.total_liked',
    ]);

$countQuery = clone $query;
$pages = new Pagination(['totalCount' => $countQuery->count()]);
$pages->setPageSize(10, false);
$pages->validatePage = false;
/** @var array $posts */
$data = $query->offset($pages->offset)
    ->orderBy(["article.created_at" => SORT_DESC])
    ->limit($pages->limit)
    ->all();

?>
    <div class="kt-wrap">
        <?= \frontend\widgets\headerWidget::widget(['id' => 2]) ?>

        <?php
        /**
         * tim menu cac cap
         */
        $index_link[1]['name'] = $cate['name'];
        $index_link[1]['link'] = $cate['link'];
        $index_link[1]['id'] = $cate['id_category'];

        if ($cate['id_parent'] > 0) {
            $cate2 = Category::find()->asArray()->where(['id_category' => $cate['id_parent']])->select([
                'id_category',
                'name',
                'id_parent',
                'link',
            ])->one();
            $index_link[2]['name'] = $cate2['name'];
            $index_link[2]['link'] = $cate2['link'];
            $index_link[2]['id'] = $cate2['id_category'];

            if ($cate2 != null && $cate2['id_parent'] > 0) {
                $cate3 = Category::find()->asArray()->where(['id_category' => $cate2['id_parent']])->select([
                    'id_category',
                    'name',
                    'id_parent',
                    'link',
                ])->one();
                $index_link[3]['name'] = $cate3['name'];
                $index_link[3]['link'] = $cate3['link'];
                $index_link[3]['id'] = $cate3['id_category'];

                if ($cate3 != null && $cate3['id_parent'] > 0) {
                    $cate4 = Category::find()->asArray()->where(['id_category' => $cate3['id_parent']])->select([
                        'id_category',
                        'name',
                        'id_parent',
                        'link',
                    ])->one();
                    $index_link[4]['name'] = $cate4['name'];
                    $index_link[4]['link'] = $cate4['link'];
                    $index_link[4]['id'] = $cate4['id_category'];
                }
            }
        }
        //sap sep lai vi tri menu
        krsort($index_link);
        $index_link_new = array_values($index_link); // sorted by original key order

        ?>
        <div class="container">
            <div class="kt-row">
                <div style="min-height: 20px"></div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/news">Tạp chí</a></li>
                        <?php
                        $linkBD = '/';
                        foreach ($index_link_new as $k => $v) {
                            ?>
                            <li class="breadcrumb-item active" aria-current="page">
                                <i class="kt-icon grey size-6x10">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                              fill-rule="evenodd"/>
                                    </svg>
                                </i>
                                <a href="<?=$linkBD.$v['link'].'-C'.$v['id']?>">
                                    <?=FunctionPub::inHoaChuCai($v['name'])?>
                                </a>
                            </li>
                            <?php
                            $linkBD = $linkBD.$v['link'].'/';
                        }
                        ?>
                    </ol>
                </nav>
                <div class="kt-line grey"></div>
                <div style="min-height: 15px"></div>
            </div>
        </div>

        <div class="container">
            <div class="kt-row">
                <div class="kt-row">
                    <div class="grid-container-3-fix">
                        <div class="left">
                            <div class="transition sticky" style="padding: 15px;top: 60px;">
                                <ul class="list-unstyled menu-left">
                                    <?php
                                    if (isset($all_menu[0])) {
                                        foreach ($all_menu[0] as $k => $v) {
                                            $linkcate = '/' . $v['link'] . '-C' . $v['id_category'];
                                            ?>
                                            <li class="menu-left-item" id="cate<?= $v['id_category'] ?>">
                                                <a href="<?= $linkcate ?>"
                                                   title="<?= FunctionPub::inHoaChuCai($v['name']) ?>"><?= $v['name'] ?></a>
                                                <button type="button" class="btn transition"
                                                        onclick="javascript:openMenu(this)">
                                                    <i class="kt-icon grey size-6x10">
                                                        <svg xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                                  fill-rule="evenodd"></path>
                                                        </svg>
                                                    </i>
                                                </button>

                                                <ul class="list-unstyled menu-left-sub"
                                                    id="cateshow<?= $v['id_category'] ?>">
                                                    <?php
                                                    if (isset($all_menu[$v['id_category']])) {
                                                        foreach ($all_menu[$v['id_category']] as $key => $value) {
                                                            $linkcate1 = '/' . $v['link'] . '/' . $value['link'] . '-C' . $value['id_category'];
                                                            ?>
                                                            <li class="menu-left-item"
                                                                id="cate<?= $value['id_category'] ?>">
                                                                <a href="<?= $linkcate1 ?>"
                                                                   title="<?= FunctionPub::inHoaChuCai($value['name']) ?> ">
                                                                    <?= FunctionPub::inHoaChuCai($value['name']) ?></a>
                                                            </li>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="grid-container-2">
                                <?php
                                foreach ($data as $k => $value) {
                                    $pt = Photo::find()->asArray()
                                        ->where(['id_post' => $value['id_post'], 'del' => 0])
                                        ->orderBy([
                                            'tick' => SORT_DESC,
                                            'position' => SORT_ASC
                                        ])
                                        ->one();
                                    $img = $pt ? $pt['name'] : '';
                                    $tt = $pt ? $pt['title'] : $value['name'];
                                    $linkPost = Yii::$app->params['ssl'] .
                                        '://' . $_SERVER['HTTP_HOST'] . '/' . $value['category']['link'] . '/' . $value['link'] . '-&' . $value['id_article'] . '.html';
                                    $linkCate = '/' . $value['category']['link'] . '-C' . $value['category']['id_category'];
                                    if (isset($all_menu_not_sort[$value['id_category']])) {
                                        $linkCate = '/' . $all_menu_not_sort[$value['id_category']] . $linkCate;
                                    }
                                    ?>
                                    <div class="item item-news">
                                        <div class="col-one">
                                            <div class="image">
                                                <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                                    <img src="<?= FunctionPub::returnSrcImage('article', $img, '400x300') ?>"
                                                         alt="<?= $tt ?>"
                                                         class="img-fluid">
                                                </a>
                                            </div>
                                            <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                                <h3 class="title"><?= $value['name'] ?></h3>
                                            </a>
                                            <ul class="list-unstyled date">
                                                <!--<li>
                                                    <i class="kt-icon black size-14x12">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
                                                            <g fill-rule="evenodd">
                                                                <path d="M7.6 0a7 7 0 1 0 0 13.9A7 7 0 0 0 7.6 0zm0 12a5.1 5.1 0 1 1 0-10.2 5.1 5.1 0 0 1 0 10.3z"
                                                                      fill-rule="nonzero"/>
                                                                <path d="M10.1 6H8.6V3.3a.9.9 0 1 0-1.8 0V7c0 .5.4 1 .9 1H10a1 1 0 0 0 0-1.9z"/>
                                                            </g>
                                                        </svg>
                                                    </i>
                                                    <span>21/1/2019</span>
                                                </li>-->
                                                <li>
                                                    <i class="kt-icon black size-15x13">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14">
                                                            <path d="M15.9 5v6c0 .7-.3 1.4-.8 2-.6.5-1.2.7-2 .7H3c-.8 0-1.4-.2-2-.8-.5-.5-.8-1.2-.8-2V3c0-.8.3-1.4.8-2C1.5.4 2.1.1 3 .1h2.7c.7 0 1.4.3 2 .8.3.4.6.9.7 1.4H13c.8 0 1.4.2 2 .8.5.5.8 1.2.8 2zm-2-.7a1 1 0 0 0-.8-.2H7.5a.9.9 0 0 1-1-1V3c0-.3 0-.5-.2-.7a1 1 0 0 0-.7-.3H2.9a1 1 0 0 0-.7.3 1 1 0 0 0-.3.7v8c0 .3 0 .6.3.8.2.2.4.2.7.2H13c.3 0 .5 0 .7-.2.2-.2.3-.5.3-.7V5c0-.2 0-.5-.3-.7z"
                                                                  fill-rule="nonzero"/>
                                                        </svg>
                                                    </i>
                                                    <span><?= FunctionPub::inHoaChuCai($value['category']['name']) ?></span>
                                                </li>
                                            </ul>
                                            <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                                <h4 class="info">
                                                    <?= \common\models\FunctionPub::_substr($value['info'], 180) ?></h4>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>

                            <div class="clearfix"></div>
                            <div class="text-center">
                                <?= LinkPager::widget([
                                    'pagination' => $pages,
                                ]) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div style="min-height: 30px"></div>
        <?= \frontend\widgets\footerWidget::widget() ?>

    </div>

    <script type="text/javascript">
        function openMenu(el) {
            $('body').find('.menu-left-sub').each(function (e) {
                $(this).slideUp();
                $(this).prev('button').removeClass('rotate');
            });
            $(el).addClass('rotate');
            $(el).next().slideDown();
        }
    </script>

    <style type="text/css">
        ul#cateshow<?=$idcate?> {
            display: block;
        }
        <?php
         if($cate){
             echo "
              ul#cateshow".$cate['id_parent']."{
            display: block;
            }
             ";
         }
        ?>

        .pagination {
            list-style: none;
            display: inline-block;
            padding: 0;
            margin-top: 10px;
        }

        .pagination li {
            display: inline;
            text-align: center;
        }

        .pagination a {
            float: left;
            display: block;
            font-size: 18px;
            text-decoration: none;
            margin-left: 8px;
            padding: 0;
            padding-top: 7px;
            width: 45px;
            height: 45px;
            line-height: 30px;
            -moz-border-radius: 100%;
            -webkit-border-radius: 100%;
            border-radius: 100%;
            border: 1px solid #cccccc;
            color: #909090;
        }

        .pagination li.active a {
            cursor: default;
        }

        .pagination li.active a {
            color: #fff;
            outline: none;
            background-color: #238646;
        }

        .pagination li.disabled {
            display: none;
        }

        .pagination a:hover {
            color: #238646;
            border-color: #238646;
        }

        .pagination a.active, .pagination a:active {
            background-color: #238646;
        }
    </style>

<?php
$this->registerCssFile("@web/css/category-news.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);


