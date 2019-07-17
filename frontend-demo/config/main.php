<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    //'homeUrl' => $this_url,
    'components' => [
        'mobileDetect' => [
            'class' => '\skeeks\yii2\mobiledetect\MobileDetect'
        ],
        'assetManager' => [
            'bundles' => [
                'kartik\form\ActiveFormAsset' => [
                    'bsDependencyEnabled' => false // do not load bootstrap assets for a specific asset bundle
                ],
            ],
        ],
        'reCaptcha' => [
            'name' => 'reCaptcha',
            'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
            'siteKey' => '6LcveZsUAAAAAB8LctE5H1_jutkEJnqnUc18YQrS',
            'secret' => '6LcveZsUAAAAAL7dT1TlxVpQkoOzMW0OwMd4bzlT',
        ],
        'request' => [
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
            'scriptUrl'=>'/index.php',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'enableStrictParsing' => true,
            'rules' => [
//                'class' => 'yii\rest\UrlRule',
//
//                '' => 'site/index',//link mac dinh
//                'news' => 'index/articles',
//
//                '<controller:[\w-]+>/<action:[\w-]+>' => '<controller>/<action>',//link thuan
//
//
//                '<link:[\w-]+>/<link1:[\w\-\–\—]+>-&<id:\d+>.html' => 'index/article-detail',//chi tiet bai viet
//
//                '<link:[\w-]+>-C<category:\d+>' => 'index/article-category',//cate cha
//                '<link:[\w-]+>/<link1:[\w-]+>-C<category:\d+>' => 'index/article-category',//cate con
            ],
        ],

    ],
    'params' => $params,
];
