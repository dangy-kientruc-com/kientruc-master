<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/params.php');
$this_url = '/';
return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'vi-VN',
    'controllerNamespace' => 'frontend\controllers',
    'homeUrl' => $this_url,
    'components' => [
        'mobileDetect' => [
            'class' => '\skeeks\yii2\mobiledetect\MobileDetect'
        ],
        'request' => [
            'baseUrl' => $this_url,
            'csrfParam' => '_csrf-frontend',
            'cookieValidationKey' => 'kientruc_frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_identity-frontend',
                //'domain' => '.kientruc.com',
                'httpOnly' => true,
            ],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => '_identity-frontend',
//            'savePath' => '@frontend/runtime',
//            'cookieParams' => [
//                'domain' => '.kientruc.com',
//                'httpOnly' => true,
//            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'baseUrl' => $this_url,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'class' => 'yii\rest\UrlRule',
                '/' => 'index/index',
                'tap-chi' => 'news/article',

                'tag-project' => 'index/home-category',
                'login' =>'site/home-login',

               // 'tag-project' => 'tag/project', //page home category
                //'kien-truc-su/<view:[a-zA-Z0-9\-\_\.\@]+>' => 'index/home-login', //page home login

                '<link:[\w-]+>-<post:\d+>.html' => 'project/project-detail',//chi tiet du an


                '<link:[\w-]+>/<link1:[\w\-\–\—]+>-&<id:\d+>.html' => 'news/article-detail',//chi tiet bai viet
                '<link:[\w-]+>-C<category:\d+>' => 'news/article-category',//cate cha
                '<link:[\w-]+>/<link1:[\w-]+>-C<category:\d+>' => 'news/article-category',//cate con

                '<controller:[\w-]+>/<action:[\w-]+>' => '<controller>/<action>',//link thuan
            ],
        ],
    ],
    'params' => $params,

];
