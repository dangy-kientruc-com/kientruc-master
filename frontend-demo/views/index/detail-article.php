<?php

use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;

use common\models\Article;
use common\models\Photo;
use common\models\Liked;
use common\models\Comment;
use common\models\Category;
use common\models\TagVsPost;

use frontend\models\FunctionPub;

/**
 * css description:
 * Page index: prefix kt-index-???
 * Noprefix -index- is use public website
 */

$tagOfme = TagVsPost::find()->asArray()
    ->joinWith('tag')
    ->where(['tag_vs_post.id_post' => $data['id_post']])
    ->select([
        'tag_vs_post.id_post',
        'tag.name',
        'tag.link',
        'tag.id_tag',
    ])->all();

$img = '';
$tt = $data['name'];
$data['photo'] = Photo::find()->asArray()->where(['id_post' => $data['id_post'], 'del' => 0])->orderBy(['tick' => SORT_DESC])->all();
if ($data['photo']) {
    foreach ($data['photo'] as $v) {
        if ($v['del'] == 0) {
            $img = $v['name'];
            $tt = $v['title'];
            break;
        }
    }
}

/* @var $this yii\web\View */
$arrTag['title'] = $data['SEO_title'];
$arrTag['description'] = $data['SEO_description'];
$arrTag['keyword'] = $data['SEO_keyword'];
$arrTag['category'] = '';
$arrTag['image'] = FunctionPub::returnSrcImageHttp('article', $img, '');
FunctionPub::createMeta($arrTag);

// UPDATE `post` SET `view_count` = `view_count` + 1 WHERE `id` = 100
Article::findOne($data['id_article'])->updateCounters(['view' => 1]);

$data['total_liked'] = Liked::find()->where(['id_post' => $data['id_post']])->count();
$data['total_comment'] = Comment::find()->where(['id_post' => $data['id_post']])->count();

/**
 * tim menu cac cap
 */
$chuoiCate = '';
$cate = $data['category'];
$index_link[1]['name'] = $cate['name'];
$index_link[1]['link'] = $cate['link'];
$index_link[1]['id'] = $cate['id_category'];

$chuoiCate = $cate['id_category'];

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

    $chuoiCate = $chuoiCate . ',' . $cate2['id_category'];

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

        $chuoiCate = $chuoiCate . ',' . $cate3['id_category'];

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
            $chuoiCate = $chuoiCate . ',' . $cate4['id_category'];
        }
    }
}
//sap sep lai vi tri menu
krsort($index_link);
$index_link_new = array_values($index_link); // sorted by original key order


//bài viết cùng chủ đề
$article_same = Article::find()
    ->joinWith('category')
    ->distinct()
    ->asArray()
    ->select([
        'article.id_article',
        'article.name',
        'article.id_category',
        'article.link',
        'article.id_post'
    ])
    ->where(['article.status' => 1])
    ->andWhere("article.id_category in ($chuoiCate) ")
    ->orderBy(['id_article' => SORT_DESC])
    ->limit(5)
    ->all();
//bài viết cùng chủ đề

//lay bai viet truoc
$article_pre = Article::find()
    ->asArray()
    ->joinWith('category')
    ->select([
        'article.id_article',
        'article.name',
        'article.id_category',
        'article.link',
        'article.id_post'
    ])
    ->where(['article.status' => 1])
    ->andWhere(['<','id_article',$data['id_article']])
    ->andWhere("article.id_category in ($chuoiCate) ")
    ->orderBy(['article.id_article' => SORT_DESC])
    ->limit(2)
    ->all();
//lay bai viet truoc
//lay bai viet sau
$article_next = Article::find()
    ->joinWith('category')
    ->asArray()
    ->select([
        'article.id_article',
        'article.name',
        'article.id_category',
        'article.link',
        'article.id_post'
    ])
    ->where(['article.status' => 1])
    ->andWhere(['>','id_article',$data['id_article']])
    ->andWhere("article.id_category in ($chuoiCate) ")
    ->orderBy(['article.id_article' => SORT_ASC])
    ->limit(2)
    ->all();
//lay bai viet sau

if (!$article_next) {
    if (count($article_pre) == 2) {
        $article_next[0] = $article_pre[1];
    }
}
if (!$article_pre) {
    if (count($article_next) == 2) {
        $article_pre[0] = $article_next[1];
    }
}

?>
    <div class="kt-wrap">
        <?= \frontend\widgets\headerWidget::widget(['id' => 2]) ?>

        <!--phần menu breacrumb-->
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
                                <a href="<?= $linkBD . $v['link'] . '-C' . $v['id'] ?>">
                                    <?= FunctionPub::inHoaChuCai($v['name']) ?>
                                </a>
                            </li>
                            <?php
                            $linkBD = $linkBD . $v['link'] . '/';
                        }
                        ?>
                    </ol>
                </nav>
                <div class="kt-line grey"></div>
                <div style="min-height: 15px"></div>
            </div>
        </div>
        <!--phần menu breacrumb-->

        <!-- phần header bài viết -->
        <div class="container">
            <div class="kt-row">
                <div class="kt-row">
                    <div class="grid-head-10">
                        <div class="item1">
                            <div class="head-left">
                                <h1><?= FunctionPub::inHoaChuCai($data['name']) ?></h1>
                                <h2><?= $data['info'] ?></h2>
                                <div class="clearfix">
                                    <ul class="list-unstyled float-left share">
                                        <li>
                                            <i class="kt-icon black size-15x13">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14">
                                                    <path d="M15.9 5v6c0 .7-.3 1.4-.8 2-.6.5-1.2.7-2 .7H3c-.8 0-1.4-.2-2-.8-.5-.5-.8-1.2-.8-2V3c0-.8.3-1.4.8-2C1.5.4 2.1.1 3 .1h2.7c.7 0 1.4.3 2 .8.3.4.6.9.7 1.4H13c.8 0 1.4.2 2 .8.5.5.8 1.2.8 2zm-2-.7a1 1 0 0 0-.8-.2H7.5a.9.9 0 0 1-1-1V3c0-.3 0-.5-.2-.7a1 1 0 0 0-.7-.3H2.9a1 1 0 0 0-.7.3 1 1 0 0 0-.3.7v8c0 .3 0 .6.3.8.2.2.4.2.7.2H13c.3 0 .5 0 .7-.2.2-.2.3-.5.3-.7V5c0-.2 0-.5-.3-.7z"
                                                          fill-rule="nonzero"/>
                                                </svg>
                                            </i>
                                            <span><?= FunctionPub::inHoaChuCai(isset($data['category']) ? $data['category']['name'] : '') ?></span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled float-right share">
                                        <li>
                                            <i class="kt-icon black size-15x12">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14">
                                                    <path d="M13.4 0H2.1C1 0 0 1 0 2v7.3c0 1 1 2 2 2h.6V14l4.6-2.5h6.2c1 0 2-1 2-2V2c0-1-1-2-2-2z"
                                                          fill-rule="evenodd"/>
                                                </svg>
                                            </i>
                                            <span><?= $data['total_comment'] ?></span>
                                        </li>
                                        <li>
                                            <i class="kt-icon black size-17x12">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                                                    <path d="M12.3.3c-1.4 0-2.7.7-3.4 1.8 0 0-.3.4-.7.4-.4 0-.6-.4-.6-.4A4.1 4.1 0 0 0 .3 6c1.2 3.6 6.3 7.8 8 8 1.5-.2 6.7-4.4 7.8-8A4.1 4.1 0 0 0 12.3.3z"
                                                          fill-rule="evenodd"/>
                                                </svg>
                                            </i>
                                            <span><?= $data['total_liked'] ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item2">
                            <div class="head-right">
                                <img src="<?= FunctionPub::returnSrcImage('article', $img, '400x300') ?>"
                                     alt="<?= $tt ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- phần header bài viết -->

        <div class="container">
            <div class="kt-row">
                <div class="kt-row">
                    <div class="grid-2-360">
                        <!-- phần footer bài viết gồm bài viết liên quan và like share facebook...-->
                        <div class="item1">
                            <div class="detail-info">
                                <div class="detai-text-full">
                                    <?= $data['full'] ?>
                                </div>

                                <div class="clearfix"></div>

                                <div class="hag-tag">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-tag"></i> Từ khóa:</li>
                                        <?php
                                        foreach ($tagOfme as $k02 => $v02) {
                                            ?>
                                            <li>
                                                <a href="/tag/<?= $v02['link'] ?>-<?= $v02['id_tag'] ?>" title="<?= $v02['name'] ?>">
                                                    <button type="button"
                                                            class="btn btn-default btn-xs"><?= FunctionPub::inHoaChuCai($v02['name']) ?></button>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>

                                <div class="clearfix"></div>

                                <div class="kt-line grey"></div>

                                <div class="footer-top">
                                    <div class="float-left" style="padding-top: 6px;">
                                        <div id="fb-root"></div>
                                        <script async defer crossorigin="anonymous"
                                                src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2"></script>
                                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/"
                                             data-layout="button_count" data-action="like" data-size="small"
                                             data-show-faces="true" data-share="false"></div>
                                    </div>
                                    <div class="float-right">
                                        <div class="social">
                                            <a href="" title="">
                                                <button type="button" class="btn sface">
                                                    <i class="fab fa-facebook-f"></i>
                                                </button>
                                            </a>
                                            <a href="" title="">
                                                <button type="button" class="btn sgoogle">
                                                    <i class="fab fa-google"></i>
                                                </button>
                                            </a>
                                            <a href="" title="">
                                                <button type="button" class="btn stwitter">
                                                    <i class="fab fa-twitter"></i>
                                                </button>
                                            </a>
                                            <a href="" title="">
                                                <button type="button" class="btn srss">
                                                    <i class="fas fa-rss"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="kt-line grey"></div>

                                <!-- phần bài viết truóc và sau-->
                                <div class="footer-bottom">
                                    <div class="row justify-content-between">
                                        <?php
                                        if ($article_pre) {
                                            $value = $article_pre[0];
                                            $tt = $data['name'];
                                            $linkPost = Yii::$app->params['ssl'] .
                                                '://' . $_SERVER['HTTP_HOST'] . '/' . $value['category']['link'] . '/' . $value['link'] . '-&' . $value['id_article'] . '.html';
                                            ?>
                                            <div class="col-5">
                                                <label for="">Bài trước</label>
                                                <h4>
                                                    <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                                        <?= $value['name'] ?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($article_next) {
                                            $value = $article_next[0];
                                            $tt = $data['name'];
                                            $linkPost = Yii::$app->params['ssl'] .
                                                '://' . $_SERVER['HTTP_HOST'] . '/' . $value['category']['link'] . '/' . $value['link'] . '-&' . $value['id_article'] . '.html';
                                            ?>
                                            <div class="col-5 text-right">
                                                <label for="">Bài sau</label>
                                                <h4>
                                                    <a href="<?=$linkPost?>" title="<?=$tt?>">
                                                        <?=$value['name']?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- phần bài viết truóc và sau-->

                            </div>
                            <?= \frontend\widgets\commentWidget::widget(['idpost' => $data['id_post']]) ?>
                        </div>
                        <!-- phần footer bài viết gồm bài viết liên quan và like share facebook...-->
                        <div class="item2">
                            <div class="detail-right transition sticky" style="top: 60px;">
                                <?php

                                ?>
                                <div class="title-lg">
                                    Bài viết cùng chủ đề
                                </div>
                                <div class="kt-line grey"></div>
                                <div style="min-height: 10px"></div>
                                <?php
                                if ($article_same) {
                                    foreach ($article_same as $k02 => $v02) {
                                        $pt = Photo::find()->asArray()->where(['id_post' => $v02['id_post'], 'del' => 0])->orderBy(['tick' => SORT_DESC])->one();
                                        $img = $pt ? $pt['name'] : '';
                                        $tt = $pt ? $pt['title'] : $data['name'];
                                        $linkPost = Yii::$app->params['ssl'] .
                                            '://' . $_SERVER['HTTP_HOST'] . '/' . $v02['category']['link'] . '/' . $v02['link'] . '-&' . $v02['id_article'] . '.html';
                                        ?>
                                        <div class="clearfix"></div>
                                        <div style="min-height: 20px"></div>
                                        <div class="col-two">
                                            <div class="image">
                                                <a href="" title="">
                                                    <img src="<?= FunctionPub::returnSrcImage('article', $img, '400x300') ?>"
                                                         alt="<?= $tt ?>"
                                                         class="img-fluid">
                                                </a>
                                            </div>
                                            <a href="<?= $linkPost ?>" title="">
                                                <h3 class="title"><?= FunctionPub::inHoaChuCai($v02['name']) ?></h3>
                                            </a>
                                            <ul class="list-unstyled date">
                                                <li>
                                                    <i class="kt-icon black size-15x13">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14">
                                                            <path d="M15.9 5v6c0 .7-.3 1.4-.8 2-.6.5-1.2.7-2 .7H3c-.8 0-1.4-.2-2-.8-.5-.5-.8-1.2-.8-2V3c0-.8.3-1.4.8-2C1.5.4 2.1.1 3 .1h2.7c.7 0 1.4.3 2 .8.3.4.6.9.7 1.4H13c.8 0 1.4.2 2 .8.5.5.8 1.2.8 2zm-2-.7a1 1 0 0 0-.8-.2H7.5a.9.9 0 0 1-1-1V3c0-.3 0-.5-.2-.7a1 1 0 0 0-.7-.3H2.9a1 1 0 0 0-.7.3 1 1 0 0 0-.3.7v8c0 .3 0 .6.3.8.2.2.4.2.7.2H13c.3 0 .5 0 .7-.2.2-.2.3-.5.3-.7V5c0-.2 0-.5-.3-.7z"
                                                                  fill-rule="nonzero"/>
                                                        </svg>
                                                    </i>
                                                    <span><?= FunctionPub::inHoaChuCai($v02['category']['name']) ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                                <div class="clearfix"></div>
                                <div style="min-height: 20px"></div>
                                <!--<a href="" title="">
                                    <img src="/frontend/web/images/360x200.jpg" alt="" class="img-fluid"
                                         style="border-radius: 4px"/>
                                </a>-->
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
<style type="text/css">
    div.hag-tag ul li{
        display: inline-block;
    }
    div.hag-tag ul li:first-child{
        background: #e6e6e6;
        font-size: 12px;
        padding: 1px 10px;
    }
    div.hag-tag ul li a button {
        background: #e6e6e6;
        color: #666666;
        border: 0;
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
    }
</style>

<?php
$this->registerCssFile("@web/css/detail-news.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
