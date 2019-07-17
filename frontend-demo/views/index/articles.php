<?php

use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;

use common\models\Article;
use common\models\Photo;
use common\models\Category;

use frontend\models\FunctionPub;
// Request #1
// set a flash message named as "postDeleted"
//$session->set('language', 'en-US');

/**
 * css description:
 * Page index: prefix kt-index-???
 * Noprefix -index- is use public website
 */

//lay 10 tin moi nhat cua articles
$articles = Article::find()
    ->joinWith('category')
    ->select(['article.id_article', 'article.name', 'article.id_post', 'article.id_category', 'article.link'])
    ->where(['article.status' => 1])
    ->limit(10)
    ->offset(0)
    ->orderBy(['id_article' => SORT_DESC])
    ->asArray()
    ->all();
//lay 10 tin moi nhat cua articles

//lay danh sach menu dung chung cho ca trang
$all_menu_not_sort = Category::find()->asArray()->where(['id_type_category' => 5])->all();
$all_menu = FunctionPub::arr_menu($all_menu_not_sort);
$all_menu_not_sort = \yii\helpers\ArrayHelper::map($all_menu_not_sort, 'id_category', 'link');
//lay danh sach menu dung chung cho ca trang

?>
    <div class="kt-wrap">
        <?= \frontend\widgets\headerWidget::widget(['id' => 2]) ?>

        <!-- slide 6 bài viết mới nhất đầu tiên-->
        <div class="container">
            <div class="kt-row">

                <div class="box-ticker-news">
                    <div class="td td1">
                        <span>Tin mới</span>
                    </div>
                    <?php
                    if ($articles) {
                        ?>
                        <div class="td td2" id="findWidth">
                            <div class="vticker">
                                <ul class="list-unstyled">
                                    <?php
                                    for ($i = 4; $i < count($articles); $i++) {
                                        $tt = $articles[$i]['link'];
                                        $linkPost = Yii::$app->params['ssl'] .
                                            '://' . $_SERVER['HTTP_HOST'] . '/' . $articles[$i]['category']['link'] . '/' . $articles[$i]['link'] . '-&' . $articles[$i]['id_article'] . '.html';
                                        ?>
                                        <li>
                                            <h2>
                                                <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                                    <?= $articles[$i]['name'] ?>
                                                </a>
                                            </h2>
                                            <p>
                                                <a href="" title="">
                                                    Trong chuyên mục <b><?= $articles[$i]['category']['name'] ?></b>
                                                </a>
                                            </p>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="td td3">
                            <button type="button" class="btn up">
                                <i class="kt-icon bo-tron green size-8x10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                                        <path d="M2.4 7l5.3-5.2c.4-.4.4-1 0-1.5a1 1 0 0 0-1.4 0l-6 6A1 1 0 0 0 0 7c0 .3.1.6.3.8l6 5.9c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L2.4 7z"
                                              fill-rule="evenodd"/>
                                    </svg>
                                </i>
                            </button>
                            <button type="button" class="btn down">
                                <i class="kt-icon bo-tron green size-8x10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                                        <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                              fill-rule="evenodd"></path>
                                    </svg>
                                </i>
                            </button>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- slide 6 bài viết mới nhất đầu tiên-->


        <!-- 4 bài viết mới nhất tiếp theo của mục tạp chí-->
        <div class="container">
            <div class="kt-row">
                <div class="box-head-news">
                    <?php
                    if ($articles) {
                        for ($i = 0; $i < 4; $i++) {
                            $pt = Photo::find()->asArray()
                                ->where(['id_post' => $articles[$i]['id_post'], 'del' => 0])
                                ->orderBy([
                                    'tick' => SORT_DESC,
                                    'position' => SORT_ASC
                                ])
                                ->one();
                            $img = $pt ? $pt['name'] : '';
                            $tt = $pt ? $pt['title'] : $articles[$i]['name'];
                            $linkPost = Yii::$app->params['ssl'] .
                                '://' . $_SERVER['HTTP_HOST'] . '/' . $articles[$i]['category']['link'] . '/' . $articles[$i]['link'] . '-&' . $articles[$i]['id_article'] . '.html';
                            $linkCate = '/' . $articles[$i]['category']['link'] . '-C' . $articles[$i]['category']['id_category'];
                            if (isset($all_menu_not_sort[$articles[$i]['id_category']])) {
                                $linkCate = '/' . $all_menu_not_sort[$articles[$i]['id_category']] . $linkCate;
                            }
                            ?>
                            <div class="item<?= $i + 1 ?>">
                                <div class="box-news">
                                    <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                        <img style="height: <?= ($i) ? "206px" : '422px' ?>"
                                             src="<?= FunctionPub::returnSrcImage('article', $img, '400x300') ?>"
                                             alt="<?= $tt ?>"
                                             class="img-fluid">
                                    </a>
                                    <div class="title">
                                        <a href="<?= $linkCate ?>"
                                           title="<?= FunctionPub::inHoaChuCai($articles[$i]['category']['name']) ?>">
                                            <button type="button"
                                                    class="btn"><?= FunctionPub::inHoaChuCai($articles[$i]['category']['name']) ?></button>
                                        </a>
                                        <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                            <h2><?= $articles[$i]['name'] ?></h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- 4 bài viết mới nhất tiếp theo của mục tạp chí-->


        <?php
        //giai phong bo nho
        unset($articles);
        ?>

        <!-- show tất cả menu có parent =0 và các menu con và bài biết trong hệ menu đó nhưng ko có menu goc kien truc su-->
        <?php
        foreach ($all_menu[0] as $k01 => $v01) {
            if ($v01['id_category'] != 44) {
                //phan menu top
                $chuoi_menu = $v01['id_category'];
                ?>
                <div class="container">
                    <div class="kt-row">
                        <div style="min-height: 30px"></div>
                        <div class="kt-index-category">
                            <div class="kt-pull-left">
                                <a href="<?= $v01['link'] ?>-C<?= $v01['id_category'] ?>" title="<?= $v01['name'] ?>">
                                    <h4 class="active"><?= $v01['name'] ?></h4>
                                </a>
                            </div>
                            <div class="kt-pull-right">
                                <ul class="list-unstyled">
                                    <?php
                                    if (isset($all_menu[$v01['id_category']])) {
                                        foreach ($all_menu[$v01['id_category']] as $k02 => $v02) {
                                            $chuoi_menu .= ',' . $v02['id_category'];
                                            ?>
                                            <li>
                                                <a href="<?= $v01['link'] ?>/<?= $v02['link'] ?>-C<?= $v02['id_category'] ?>"
                                                   title="<?= $v02['name'] ?>">
                                                    <span style="font-weight: 500"><?= $v02['name'] ?></span>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div style="min-height: 13px"></div>
                        <div class="kt-line grey"></div>
                        <div style="min-height: 15px"></div>
                        <div class="kt-row">
                            <?php
                            //lay 11 bai2 vie6t1 tie6u bie6u3 trong day menu
                            //tim ra 10 bai viet trong chuyen muc nay
                            $articles = Article::find()
                                ->distinct()
                                ->asArray()
                                ->joinWith('category')
                                ->where("article.id_category in ($chuoi_menu)")
                                ->andWhere(['article.status' => 1])
                                ->select([
                                    'article.id_article',
                                    'article.id_category',
                                    'article.name',
                                    'article.link',
                                    'article.info',
                                    'article.id_post',
                                    //'lik.total_liked',
                                ])
                                ->orderBy(['article.id_post' => SORT_DESC])
                                ->limit(11)
                                ->all();
                            //lay 11 bai2 vie6t1 tie6u bie6u3 trong day menu
                            ?>
                            <?php
                            if ($articles) {
                                ?>
                                <div class="grid-container-3">
                                    <div class="item first-item">
                                        <div class="col-one">
                                            <?php
                                            // hiển thị bài viết đầu tiên
                                            $pt = Photo::find()->asArray()
                                                ->where(['id_post' => $articles[0]['id_post'], 'del' => 0])
                                                ->orderBy([
                                                    'tick' => SORT_DESC,
                                                    'position' => SORT_ASC
                                                ])
                                                ->one();
                                            $img = $pt ? $pt['name'] : '';
                                            $tt = $pt ? $pt['title'] : $articles[0]['name'];
                                            $linkPost = Yii::$app->params['ssl'] .
                                                '://' . $_SERVER['HTTP_HOST'] . '/' . $articles[0]['category']['link'] . '/' . $articles[0]['link'] . '-&' . $articles[0]['id_article'] . '.html';
                                            ?>
                                            <div class="image">
                                                <a href="<?= $linkPost ?>" title="<?= $articles[0]['name'] ?>">
                                                    <img src="<?= FunctionPub::returnSrcImage('article', $img, '400x300') ?>"
                                                         alt="<?= $tt ?>" title="<?= $tt ?>"
                                                         class="img-fluid">
                                                </a>
                                            </div>
                                            <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                                <h3 class="title"><?= FunctionPub::inHoaChuCai($articles[0]['name']) ?></h3>
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
                                                    <span><?= FunctionPub::inHoaChuCai($articles[0]['category']['name']) ?></span>
                                                </li>
                                            </ul>
                                            <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                                <h4 class="info"><?= $articles[0]['info'] ?></h4>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    //huy phần tử đầu tiên
                                    unset($articles[0]);
                                    foreach ($articles as $kAr => $vAr) {
                                        // hiển thị bài viết đầu tiên
                                        $pt = Photo::find()->asArray()
                                            ->where(['id_post' => $vAr['id_post'], 'del' => 0])
                                            ->orderBy([
                                                'tick' => SORT_DESC,
                                                'position' => SORT_ASC
                                            ])
                                            ->one();
                                        $img = $pt ? $pt['name'] : '';
                                        $tt = $pt ? $pt['title'] : $vAr['name'];
                                        $linkPost = Yii::$app->params['ssl'] .
                                            '://' . $_SERVER['HTTP_HOST'] . '/' . $vAr['category']['link'] . '/' . $vAr['link'] . '-&' . $vAr['id_article'] . '.html';
                                        ?>
                                        <div class="item second-item">
                                            <div class="col-two">
                                                <div class="image">
                                                    <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                                        <img src="<?= FunctionPub::returnSrcImage('article', $img, '400x300') ?>"
                                                             alt="<?= $tt ?>"
                                                             class="img-fluid">
                                                    </a>
                                                </div>
                                                <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                                    <h3 class="title"><?= $vAr['name'] ?></h3>
                                                </a>
                                                <ul class="list-unstyled date">
                                                    <li>
                                                        <i class="kt-icon black size-15x13">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14">
                                                                <path d="M15.9 5v6c0 .7-.3 1.4-.8 2-.6.5-1.2.7-2 .7H3c-.8 0-1.4-.2-2-.8-.5-.5-.8-1.2-.8-2V3c0-.8.3-1.4.8-2C1.5.4 2.1.1 3 .1h2.7c.7 0 1.4.3 2 .8.3.4.6.9.7 1.4H13c.8 0 1.4.2 2 .8.5.5.8 1.2.8 2zm-2-.7a1 1 0 0 0-.8-.2H7.5a.9.9 0 0 1-1-1V3c0-.3 0-.5-.2-.7a1 1 0 0 0-.7-.3H2.9a1 1 0 0 0-.7.3 1 1 0 0 0-.3.7v8c0 .3 0 .6.3.8.2.2.4.2.7.2H13c.3 0 .5 0 .7-.2.2-.2.3-.5.3-.7V5c0-.2 0-.5-.3-.7z"
                                                                      fill-rule="nonzero"/>
                                                            </svg>
                                                        </i>
                                                        <span><?= FunctionPub::inHoaChuCai($vAr['category']['name']) ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                $menuGKTS = $v01;
            }
        }
        ?>
        <!-- show tất cả menu có parent =0 và các menu con và bài biết trong hệ menu đó nhưng ko có menu goc kien truc su-->

        <!-- show menu góc kiến trúc sư-->
        <?php
        if ($menuGKTS) {
            $chuoi_menu = $menuGKTS['id_category'];
            ?>
            <div class="container">
                <div class="kt-row">
                    <div style="min-height: 30px"></div>
                    <div class="kt-index-category">
                        <div class="kt-pull-left">
                            <a href="<?= $menuGKTS['link'] ?>-C<?= $menuGKTS['id_category'] ?>"
                               title="<?= $menuGKTS['name'] ?>" title="">
                                <h4 class="active"><?= $menuGKTS['name'] ?></h4>
                            </a>
                        </div>
                        <div class="kt-pull-right">
                            <ul class="list-unstyled">
                                <?php
                                if (isset($all_menu[$menuGKTS['id_category']])) {
                                    foreach ($all_menu[$menuGKTS['id_category']] as $k02 => $v02) {
                                        $chuoi_menu .= ',' . $menuGKTS['id_category'];
                                        ?>
                                        <li>
                                            <a href="<?= $menuGKTS['link'] ?>/<?= $v02['link'] ?>-C<?= $v02['id_category'] ?>"
                                               title="<?= $v02['name'] ?>">
                                                <span style="font-weight: 500"><?= $v02['name'] ?></span>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div style="min-height: 13px"></div>
                    <div class="kt-line grey"></div>
                    <div style="min-height: 15px"></div>
                    <div class="kt-row">
                        <div class="grid-container-3">
                            <?php
                            //lay cac bai viet cua goc kien truc su
                            $articles = Article::find()
                                ->distinct()
                                ->asArray()
                                ->joinWith('category')
                                ->where("article.id_category in ($chuoi_menu)")
                                ->andWhere(['article.status' => 1])
                                ->select([
                                    'article.id_article',
                                    'article.id_category',
                                    'article.name',
                                    'article.link',
                                    'article.info',
                                    'article.id_post',
                                    //'lik.total_liked',
                                ])
                                ->orderBy(['article.id_post' => SORT_DESC])
                                ->limit(9)
                                ->all();
                            //lay cac bai viet cua goc kien truc su
                            if ($articles)
                                for ($i = 0; $i < 3; $i++) {
                                    $k = $i * 3;
                                    if (isset($articles[$k])) {
                                        ?>
                                        <div class="item">
                                            <?php
                                            $value = $articles[$k];
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
                                                    <h4 class="info"><?= \common\models\FunctionPub::_substr($value['info'], 180) ?>
                                                        ...</h4>
                                                </a>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div style="min-height: 20px"></div>
                                            <?php
                                            for ($j = 1; $j < 3; $j++) {
                                                if (isset($articles[$k + $j])) {
                                                    $value = $articles[$k + $j];
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
                                                    <div class="col-two">
                                                        <div class="image">
                                                            <a href="<?= $linkPost ?>" title="<?
                                                            $tt ?>">
                                                                <img src="<?= FunctionPub::returnSrcImage('article', $img, '400x300') ?>"
                                                                     alt="<?= $tt ?>"
                                                                     class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <a href="<?= $linkPost ?>" title="<?= $tt ?>">
                                                            <h3 class="title"><?= $value['name'] ?></h3>
                                                        </a>
                                                        <ul class="list-unstyled da_substrte">
                                                            <li>
                                                                <i class="kt-icon black size-15x13">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 16 14">
                                                                        <path d="M15.9 5v6c0 .7-.3 1.4-.8 2-.6.5-1.2.7-2 .7H3c-.8 0-1.4-.2-2-.8-.5-.5-.8-1.2-.8-2V3c0-.8.3-1.4.8-2C1.5.4 2.1.1 3 .1h2.7c.7 0 1.4.3 2 .8.3.4.6.9.7 1.4H13c.8 0 1.4.2 2 .8.5.5.8 1.2.8 2zm-2-.7a1 1 0 0 0-.8-.2H7.5a.9.9 0 0 1-1-1V3c0-.3 0-.5-.2-.7a1 1 0 0 0-.7-.3H2.9a1 1 0 0 0-.7.3 1 1 0 0 0-.3.7v8c0 .3 0 .6.3.8.2.2.4.2.7.2H13c.3 0 .5 0 .7-.2.2-.2.3-.5.3-.7V5c0-.2 0-.5-.3-.7z"
                                                                              fill-rule="nonzero"/>
                                                                    </svg>
                                                                </i>
                                                                <span><?= FunctionPub::inHoaChuCai($value['category']['name']) ?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div style="min-height: 20px"></div>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <!-- show menu góc kiến trúc sư-->


        <div class="clearfix"></div>
        <div style="min-height: 30px"></div>
        <?= \frontend\widgets\footerWidget::widget() ?>

    </div>

    <script type="text/javascript">
        async function newsTicker() {
            var hei = await $('body').find('#findWidth').width();
            await $('.vticker').css({'width': hei + 'px'}).easyTicker({
                direction: 'up',
                easing: 'easeInOutBack',
                speed: 'slow',
                interval: 2000,
                height: 'auto',
                visible: 1,
                mousePause: 0,
                controls: {
                    up: '.up',
                    down: '.down',
                    //toggle: '.toggle',
                    //stopText: 'Stop !!!'
                }
            }).data('easyTicker');
        }
    </script>

<?php
$this->registerCssFile("@web/css/news.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJsFile("@web/library/jquery.easing.min.js", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJsFile("@web/library/jquery.easy-ticker.min.js", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJs("newsTicker();");

$session = Yii::$app->session;
$cookies = Yii::$app->request->cookies;

