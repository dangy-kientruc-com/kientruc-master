<?php
/**
 * Created by PhpStorm.
 * User: KIENTRUC.com
 * Date: 4/5/2018
 * Time: 8:56 AM
 */
namespace frontend\models;

use common\models\CityProvince;
use common\models\CustomerInfo;
use common\models\CustomerInfoKts;
use common\models\GiftPresent;
use common\models\Project;
use common\models\Tag;
use yii\base\Model;
use yii;


class FunctionPub extends Model
{
    /**
     * @param $data
     */
    public static function createMeta($data)
    {
        Yii::$app->view->title = $data['title'];

        Yii::$app->view->registerLinkTag([
            'rel' => 'icon',
            'type' => 'images/png',
            'href' => 'uploads/setup/1492048590_fava.ico'
        ]);

        static::taotagLink([
            //'name' => 'og:url',
            'rel' => 'canonical',
            'href' => Yii::$app->params['ssl'] . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
        ]);

        static::taotag([
            'name' => 'description',
            'content' => $data['description'],
        ]);
        static::taotag([
            'name' => 'keywords',
            'content' => $data['keyword'],
        ]);

        static::taotag([
            'name' => 'DC.title',
            'content' => $data['title'],
        ]);
        static::taotag([
            'name' => 'geo.region',
            'content' => 'VN-SG',
        ]);
        static::taotag([
            'name' => 'geo.placename',
            'content' => 'HoChiMinh City',
        ]);
        static::taotag([
            'name' => 'geo.position',
            'content' => '10.768536,106.660271',
        ]);

        /****/
        static::taotag([
            'name' => 'fb:app_id',
            'content' => '685480354937581',
            'property' => 'fb:app_id',
        ]);
        static::taotag([
            'name' => 'fb:pages',
            'content' => '848546668563574',
            'property' => 'fb:pages',
        ]);
        static::taotag([
            'name' => 'article:publisher',
            'content' => 'https://www.facebook.com/kientruccom/',
            'property' => 'article:publisher',
        ]);
        static::taotag([
            'name' => 'article:section',
            'property' => 'article:section',
            'content' => $data['category'],
        ]);

        /****/
        static::taotag([
            //'name' => 'og:type',
            'property' => 'og:type',
            'content' => 'article',
        ]);
        static::taotag([
            //'name' => 'og:site_name',
            'property' => 'og:site_name',
            'content' => 'KienTruc.com',
        ]);
        static::taotag([
            //'name' => 'og:title',
            'property' => 'og:title',
            'content' => $data['title'],
        ]);
        static::taotag([
            //'name' => 'og:description',
            'property' => 'og:description',
            'content' => $data['description'],
        ]);
        static::taotag([
            //'name' => 'og:url',
            'property' => 'og:url',
            'content' => Yii::$app->params['ssl'] . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
        ]);

        static::taotag([
            //'name' => 'og:image',
            'property' => 'og:image',
            'content' => $data['image'] ? $data['image']:Yii::$app->params['ssl']. '://'.$_SERVER['HTTP_HOST'].'/image/kien-truc-su_200x200.jpg',
        ]);
        /*
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:image',
            'property' => 'og:image:secure_url',
            'content' => $data['image'] ? $data['image']:Yii::$app->params['ssl']. '://'.$_SERVER['HTTP_HOST'].'/image/kien-truc-su_200x200.jpg',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:width',
            'content' => '200',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:height',
            'content' => '500',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:alt',
            'content' => 'Hình ảnh cho facebook',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:type',
            'content' => 'image/jpeg',
        ]);
        */

        /****/
        static::taotag([
            'name' => 'twitter:widgets:csp',
            'content' => 'on',
        ]);
        static::taotag([
            'name' => 'twitter:card',
            'content' => 'summary',
        ]);
        static::taotag([
            'name' => 'twitter:site',
            'content' => '@kientruccom',
        ]);
        static::taotag([
            'name' => 'twitter:creator',
            'content' => '@kientruccom',
        ]);
        static::taotag([
            'name' => 'twitter:title',
            'content' => $data['title'],
        ]);
        static::taotag([
            'name' => 'twitter:description',
            'content' => $data['description'],
        ]);

    }
    public static function createMeta1($data)
    {
        Yii::$app->view->title = $data['title'];

        Yii::$app->view->registerLinkTag([
            'rel' => 'icon',
            'type' => 'images/png',
            'href' => 'uploads/setup/1492048590_fava.ico'
        ]);

        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'rel' => 'canonical',
            'href' => Yii::$app->params['ssl'] . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
        ]);

        Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $data['description'],
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $data['keyword'],
        ]);

        Yii::$app->view->registerMetaTag([
            'name' => 'DC.title',
            'content' => $data['title'],
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'geo.region',
            'content' => 'VN-SG',
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'geo.placename',
            'content' => 'HoChiMinh City',
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'geo.position',
            'content' => '10.768536,106.660271',
        ]);

        /****/
        Yii::$app->view->registerMetaTag([
            'name' => 'fb:app_id',
            'content' => '685480354937581',
            'property' => 'fb:app_id',
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'fb:pages',
            'content' => '848546668563574',
            'property' => 'fb:pages',
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'article:publisher',
            'content' => 'https://www.facebook.com/kientruccom/',
            'property' => 'article:publisher',
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'article:section',
            'property' => 'article:section',
            'content' => $data['category'],
        ]);

        /****/
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:type',
            'property' => 'og:type',
            'content' => 'article',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:site_name',
            'property' => 'og:site_name',
            'content' => 'KienTruc.com',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:title',
            'property' => 'og:title',
            'content' => $data['title'],
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:description',
            'property' => 'og:description',
            'content' => $data['description'],
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:url',
            'content' => Yii::$app->params['ssl'] . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
        ]);

        Yii::$app->view->registerMetaTag([
            //'name' => 'og:image',
            'property' => 'og:image',
            'content' => $data['image'] ? $data['image']:Yii::$app->params['ssl']. '://'.$_SERVER['HTTP_HOST'].'/image/kien-truc-su_200x200.jpg',
        ]);
        /*
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:image',
            'property' => 'og:image:secure_url',
            'content' => $data['image'] ? $data['image']:Yii::$app->params['ssl']. '://'.$_SERVER['HTTP_HOST'].'/image/kien-truc-su_200x200.jpg',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:width',
            'content' => '200',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:height',
            'content' => '500',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:alt',
            'content' => 'Hình ảnh cho facebook',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:type',
            'content' => 'image/jpeg',
        ]);
        */

        /****/
        Yii::$app->view->registerMetaTag([
            'name' => 'twitter:widgets:csp',
            'content' => 'on',
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'twitter:card',
            'content' => 'summary',
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'twitter:site',
            'content' => '@kientruccom',
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'twitter:creator',
            'content' => '@kientruccom',
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'twitter:title',
            'content' => $data['title'],
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'twitter:description',
            'content' => $data['description'],
        ]);

    }

    public static function taotag($options, $key = null){
        Yii::$app->view->metaTags[] = static::taotagHtml('meta', '', $options);
    }
    public static function taotagLink($options, $key = null){
        Yii::$app->view->metaTags[] = static::taotagHtml('link', '', $options);
    }
    private static function taotagHtml($name, $content = '', $options = []){
        if ($name === null || $name === false) {
            return $content;
        }
        return $html = "<$name" . yii\helpers\BaseHtml::renderTagAttributes($options) . ' />';
    }

    /**
     * @param $folder
     * @param $photo
     * @return mixed
     * dung cho phan upload avatar khong thanh cong return null
     */
    public static function returnSrcImageUploadAvatar($folder, $photo, $size)
    {
        $img = '';
        if ($photo) {
            if (file_exists(Yii::$app->params['uploadPath'] .'/'. $folder . '/' . $size . $photo)) {
                $img =Yii::$app->params['uploadPath'].'/' . $folder . '/' . $size . $photo;
            }
        }
        return str_replace(' ', '%20', $img);

    }

    /**
     * @param $folder
     * @param $photo
     * @return mixed
     * return anh kiem tra ton tai file
     */
    public static function returnSrcImage($folder, $photo, $size)
    {
        $img = Yii::$app->params['uploadPath'] .'/'. $folder . '/' . $size . $photo;
        if ($photo) {
            if (file_exists(Yii::$app->params['uploadPath'] .'/' . $folder . '/' . $size . $photo)) {
                $img = Yii::$app->params['uploadPath'] .'/'. $folder . '/' . $size . $photo;
            }
        }
        return str_replace(' ', '%20', $img);

    }

    /**
     * @param $folder
     * @param $photo
     * @return mixed
     * return anh kiem tra ton tai file
     */
    public static function returnSrcImageAvatar($folder, $photo, $link, $size)
    {
        $img = Yii::$app->params['uploadPath'] .'/'.'kien-truc-su.jpg';
        if($link){
            $img = $link;
        }else if ($photo) {
            if (file_exists(Yii::$app->params['uploadPath'] .'/' . $folder . '/' . $size . $photo)) {
                $img = Yii::$app->params['uploadPath'] .'/' . $size . $photo;
            }
        }
        return str_replace(' ', '%20', $img);
    }

    /**
     * @param $folder
     * @param $photo
     * @return mixed
     * return anh kiem tra ton tai file
     */
    public static function returnSrcImageHttp($folder, $photo, $size)
    {
        $img = Yii::$app->params['uploadPath'] .'/'. $size . 'no-image.png';
        if ($photo) {
            if (file_exists(Yii::$app->params['uploadPath'] .'/'. $folder . '/' . $size . $photo)) {
                $img = Yii::$app->params['uploadPath'] .'/'.$folder . '/' . $size . $photo;
            }
        }
        return str_replace(' ', '%20', $img);
    }

    /**
     * @param $folder
     * @param $photo
     * @return mixed
     * return anh kiem tra ton tai file
     */
    public static function returnSrcImageDomain($folder, $photo, $size)
    {
        if ($photo) {
            $img = 'http://sale.kientruc.com' . '/uploads/' . $folder . $size . $photo;
        } else {
            $img = Yii::$app->params['uploadPath'] .'/' . $size . 'no-image.png';
        }
        return str_replace(' ', '%20', $img);

    }

    /**
     * @param $str
     * @return bool|string
     */
    public static function createLink($str)
    {
        if (!$str) {
            return false;
        }
        $unicode = [
            'a' => ['á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ặ', 'ằ', 'ẳ', 'ẵ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ'],
            'A' => ['Á', 'À', 'Ả', 'Ã', 'Ạ', 'Ă', 'Ắ', 'Ặ', 'Ằ', 'Ẳ', 'Ẵ', 'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ'],
            'd' => ['đ'],
            'D' => ['Đ'],
            'e' => ['é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'],
            'E' => ['É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ'],
            'i' => ['í', 'ì', 'ỉ', 'ĩ', 'ị'],
            'I' => ['Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị'],
            'o' => ['ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'],
            'O' => ['Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ', 'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ'],
            'u' => ['ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'],
            'U' => ['Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự'],
            'y' => ['ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ'],
            'Y' => ['Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ'],
            '-' => ['(', ')', '$', ' ', '  ', '?', '!', '#', '%', '^', '&', '*', ',', '"', "'", '&quot;', '.', ':', ';', '/', '\\', '”', '“', '+', '=', '_', '|', '>', '<', '–', '—'],
        ];
        $str = trim($str);
        foreach ($unicode as $nonUnicode => $uni) {
            foreach ($uni as $value) {
                $str = str_replace($value, $nonUnicode, $str);
            }
        }
        $str = ltrim($str, "-");
        $str = rtrim($str, "-");
        $str = preg_replace('/\-(?=\-)/', '', $str);

        // Replace non-AlNum characters with space
        $str = preg_replace('/[^A-Za-z0-9\-]/', '', $str);

        return strtolower($str);
    }

    /**
     * @param $menu
     * @param string $khoa
     * @return string
     * sap xep mang menu
     */
    public static function arr_menu($menu, $khoa = 'id_parent')
    {
        $arr_menu = "";
        if ($menu) {
            foreach ($menu as $key => $value) {
                $id = $value[$khoa];
                $arr_menu[$id][] = $value;
            }
        }

        return $arr_menu;
    }

    /**
     * @param $menu
     * @param string $khoa
     * @return string
     * sap xep mang menu
     */
    public static function arr_menu_fetch($menu, $khoa = 'id_parent')
    {
        $arr_menu = "";
        if ($menu) {
            foreach ($menu as $key => $value) {
                $id = $value[$khoa];
                $arr_menu[$id] = $value;
            }
        }

        return $arr_menu;
    }

    /**
     * @param $menu
     * @param string $khoa
     * @return string
     * sap xep mang menu
     */
    public static function arr_one_quarter($menu, $k = 'id', $v = 'name')
    {
        $arr_menu = "";
        if ($menu) {
            foreach ($menu as $key => $value) {
                $id = $value[$k];
                $arr_menu[$id] = $value[$v];
            }
        }

        return $arr_menu;
    }

    /**
     * @param $year
     * @param $week_number
     * @return array|bool
     */
    public static function day_in_week($year, $week_number)
    {
        $arr = false;
        for ($day = 1; $day <= 7; $day++) {
            //$arr[] = strtotime($year."W".$week_number.$day);
            //$arr2[] = date('d/m/Y', strtotime($year."W".$week_number.$day));
            if ($day == 1 || $day == 7) {
                $arr[] = strtotime($year . "W" . $week_number . $day);
                //$arr2[] = date('d/m/Y', strtotime($year."W".$week_number.$day));
            }
        }
        return $arr;
    }

    /**
     * @param $data
     * @param int $parent
     * @param string $id
     * @param array $dataarr
     * @param string $loai
     * lay cate con
     */
    public static function dq_menu_childrent($data, $parent = 0, $id = 'id_category', &$dataarr = [], $loai = '')
    {
        if (isset($data[$parent]) && $parent != $loai) {
            foreach ($data[$parent] as $k => $value) {
                $j = $value[$id];
                $dataarr[] = $value['id_category'];
                unset($data[$parent][$k]);
                self::dq_menu_childrent($data, $j, $id, $dataarr, $loai);
            }
        }
    }

    /**
     * @param $str
     * @return mixed|string
     * xu ly chuoi string in hoa
     */
    public static function inHoaChuCai($str)
    {
        $str = mb_strtolower($str, 'UTF-8');
        $data_str = explode(' ', $str);
        foreach ($data_str as $k => $v) {
            $data_str[$k] = mb_strtoupper(mb_substr($v, 0, 1, 'UTF-8'), 'UTF-8') . mb_strtolower(mb_substr($v, 1, mb_strlen($v), 'UTF-8')
                    , 'UTF-8');
        }
        $str = implode(' ', $data_str);
        return $str;
    }

    /**
     * @param $ptime
     * @return string
     */
    public static function getCountTime($ptime)
    {
        $etime = time() - $ptime;
        $result = '';
        if ($etime < 1) {
            $result = 'mới xong';
        } else {

            $a = [
                365 * 24 * 60 * 60 => 'year',
                30 * 24 * 60 * 60 => 'month',
                7 * 24 * 60 * 60 => 'week',
                24 * 60 * 60 => 'day',
                60 * 60 => 'hour',
                60 => 'minute',
                1 => 'second',
            ];
            $a_plural = [
                'year' => 'năm',
                'month' => 'tháng',
                'week' => 'tuần',
                'day' => 'ngày',
                'hour' => 'giờ',
                'minute' => 'phút',
                'second' => 'giây',
            ];

            foreach ($a as $secs => $str) {
                $d = $etime / $secs;

                if ($d >= 1) {

                    switch ($str) {
                        case 'year':
                        case 'month':
                            $result = date('d/m/Y', $ptime);
                            break;
                        default:
                            $r = round($d);
                            $result = $r . ' ' . $a_plural[$str] . ' trước';
                            break;
                    }
                    break;

                }
            }
        }
        return $result;
    }

    /**
     * @param $format
     * @param int $time
     * @return null|string|string[]
     */
    public static function rebuild_date($format, $time = 0)
    {
        if (!$time) $time = time();

        $lang = array();
        $lang['sun'] = 'CN';
        $lang['mon'] = 'T2';
        $lang['tue'] = 'T3';
        $lang['wed'] = 'T4';
        $lang['thu'] = 'T5';
        $lang['fri'] = 'T6';
        $lang['sat'] = 'T7';
        $lang['sunday'] = 'Chủ nhật';
        $lang['monday'] = 'Thứ hai';
        $lang['tuesday'] = 'Thứ ba';
        $lang['wednesday'] = 'Thứ tư';
        $lang['thursday'] = 'Thứ năm';
        $lang['friday'] = 'Thứ sáu';
        $lang['saturday'] = 'Thứ bảy';
        $lang['january'] = 'Tháng Một';
        $lang['february'] = 'Tháng Hai';
        $lang['march'] = 'Tháng Ba';
        $lang['april'] = 'Tháng Tư';
        $lang['may'] = 'Tháng Năm';
        $lang['june'] = 'Tháng Sáu';
        $lang['july'] = 'Tháng Bảy';
        $lang['august'] = 'Tháng Tám';
        $lang['september'] = 'Tháng Chín';
        $lang['october'] = 'Tháng Mười';
        $lang['november'] = 'Tháng M. một';
        $lang['december'] = 'Tháng M. hai';
        $lang['jan'] = 'T01';
        $lang['feb'] = 'T02';
        $lang['mar'] = 'T03';
        $lang['apr'] = 'T04';
        $lang['may2'] = 'T05';
        $lang['jun'] = 'T06';
        $lang['jul'] = 'T07';
        $lang['aug'] = 'T08';
        $lang['sep'] = 'T09';
        $lang['oct'] = 'T10';
        $lang['nov'] = 'T11';
        $lang['dec'] = 'T12';
        $lang['AM'] = 'Sáng';
        $lang['PM'] = 'Chiều tối';

        $format = str_replace("r", "D, d M Y H:i:s O", $format);
        $format = str_replace(array("D", "M"), array("[D]", "[M]"), $format);
        $return = date($format, $time);

        $replaces = array(
            '/\[Sun\](\W|$)/' => $lang['sun'] . "$1",
            '/\[Mon\](\W|$)/' => $lang['mon'] . "$1",
            '/\[Tue\](\W|$)/' => $lang['tue'] . "$1",
            '/\[Wed\](\W|$)/' => $lang['wed'] . "$1",
            '/\[Thu\](\W|$)/' => $lang['thu'] . "$1",
            '/\[Fri\](\W|$)/' => $lang['fri'] . "$1",
            '/\[Sat\](\W|$)/' => $lang['sat'] . "$1",
            '/\[Jan\](\W|$)/' => $lang['jan'] . "$1",
            '/\[Feb\](\W|$)/' => $lang['feb'] . "$1",
            '/\[Mar\](\W|$)/' => $lang['mar'] . "$1",
            '/\[Apr\](\W|$)/' => $lang['apr'] . "$1",
            '/\[May\](\W|$)/' => $lang['may2'] . "$1",
            '/\[Jun\](\W|$)/' => $lang['jun'] . "$1",
            '/\[Jul\](\W|$)/' => $lang['jul'] . "$1",
            '/\[Aug\](\W|$)/' => $lang['aug'] . "$1",
            '/\[Sep\](\W|$)/' => $lang['sep'] . "$1",
            '/\[Oct\](\W|$)/' => $lang['oct'] . "$1",
            '/\[Nov\](\W|$)/' => $lang['nov'] . "$1",
            '/\[Dec\](\W|$)/' => $lang['dec'] . "$1",
            '/Sunday(\W|$)/' => $lang['sunday'] . "$1",
            '/Monday(\W|$)/' => $lang['monday'] . "$1",
            '/Tuesday(\W|$)/' => $lang['tuesday'] . "$1",
            '/Wednesday(\W|$)/' => $lang['wednesday'] . "$1",
            '/Thursday(\W|$)/' => $lang['thursday'] . "$1",
            '/Friday(\W|$)/' => $lang['friday'] . "$1",
            '/Saturday(\W|$)/' => $lang['saturday'] . "$1",
            '/January(\W|$)/' => $lang['january'] . "$1",
            '/February(\W|$)/' => $lang['february'] . "$1",
            '/March(\W|$)/' => $lang['march'] . "$1",
            '/April(\W|$)/' => $lang['april'] . "$1",
            '/May(\W|$)/' => $lang['may'] . "$1",
            '/June(\W|$)/' => $lang['june'] . "$1",
            '/July(\W|$)/' => $lang['july'] . "$1",
            '/August(\W|$)/' => $lang['august'] . "$1",
            '/September(\W|$)/' => $lang['september'] . "$1",
            '/October(\W|$)/' => $lang['october'] . "$1",
            '/November(\W|$)/' => $lang['november'] . "$1",
            '/December(\W|$)/' => $lang['december'] . "$1",
            '/AM(\W|$)/' => $lang['AM'] . "$1",
            '/PM(\W|$)/' => $lang['PM'] . "$1");

        return preg_replace(array_keys($replaces), array_values($replaces), $return);
    }

    /**
     * @param $data
     * @param $arr
     * @return bool
     */
    public static function dequy_getOnlyValue($data, &$arr)
    {
        if (!$data) return false;
        foreach ($data as $v) {
            if ($v['id_tag']) {
                $arr[] = $v['id_tag'];
            }
        }
        return true;
    }

    /**
     * @param $data
     * @return array
     */
    public static function resultVotePhoto($photo, $vote, &$tong)
    {
        //tinh duoc tong so
        $arr = [];
        if ($photo) {
            $tong_member = 0;
            $tong_kts = 0;
            //neu co photo moi lam
            foreach ($photo as $k => $v) {
                $key = $v['id_photo'];
                $arr[$key] = $v;
                $arr[$key]['member'] = 0;
                $arr[$key]['kts'] = 0;
                foreach ($vote as $k01 => $v01) {
                    if ($v['id_photo'] == $v01['id_photo']) {
                        if ($v01['id_customer_level']) {
                            //kien truc su
                            $arr[$key]['kts'] += $v01['total_point'];
                            $tong_kts += $v01['total_point'];
                        } else {
                            //khach hang
                            $arr[$key]['member'] += $v01['total_point'];
                            $tong_member += $v01['total_point'];
                        }
                    }
                }
            }
            foreach ($arr as $k02 => $v02) {
                $arr[$k02]['per_member'] = $v02['member'] ? round($v02['member'] * 100 / $tong_member, 2) : 0;
                $arr[$k02]['per_kts'] = $v02['kts'] ? round($v02['kts'] * 100 / $tong_kts, 2) : 0;
            }
            $tong['kts'] = $tong_kts;
            $tong['mb'] = $tong_member;
        }

        return $arr;
    }

    /**
     * @param $num
     * @return int|mixed
     */
    public static function exportResultIDCustomer($num)
    {
        if (strlen($num) > 12) {
            $num = str_replace(',', '', $num, $count);
            $num = str_replace('.', '', $num, $count);
            return $count ? 0 : str_replace('100010010011', '', $num);
        }
        return 0;
    }

    /**
     * @param $arrTag
     * @param $title
     * @return array
     */
    public static function resultNameTitle($arrTag, $title)
    {
        $result = [
            0 => 'thiết kế',
            1 => 'thiet-ke'
        ];
        //loai cong trinh [0]
        $loaiCT = Tag::find()->asArray()->where(['id_tag' => $arrTag[0]])->select(['link', 'name'])->one();
        //so tang [1]
        $loaiST = Tag::find()->asArray()->where(['id_tag' => $arrTag[1]])->select(['link', 'name'])->one();
        //hang muc [2]
        //$loaiHM = Tag::find()->asArray()->where(['id_tag' => $arrTag[2]])->select(['link','name'])->one();
        //tinh / thanh pho [3]
        $city = CityProvince::find()->asArray()->where(['provinceid' => $arrTag[3]])->select(['name'])->one();

        //kiem tra cac tag cua project
        switch ($arrTag[0]) {
            case 2://chung cu
                if ($arrTag[2] == 7) {//noi that
                    $result[0] .= ' nội thất';
                    $result[1] .= '-noi-that';
                }
                $result[0] .= ' chung cư';
                $result[1] .= '-chung-cu';
                break;
            case 1://nha nho
            case 3://nha mat pho
            case 51://biet thu
                if ($arrTag[2] == 7) {//noi that
                    $result[0] .= ' nội thất';
                    $result[1] .= '-noi-that';

                    $result[0] .= ' ' . $loaiCT['name'];
                    $result[1] .= '-' . $loaiCT['link'];
                } else if ($arrTag[2] == 4) {//ngoai that
                    $result[0] .= ' ' . $loaiCT['name'];
                    $result[1] .= '-' . $loaiCT['link'];

                    if ($arrTag[1] != 17 && $arrTag[1] != 0) {// so tang khac tren 7 tang
                        $result[0] .= ' ' . $loaiST['name'];
                        $result[1] .= '-' . (FunctionPub::createLink($loaiST['name']));
                    }
                } else {
                    $result[0] .= ' ' . $loaiCT['name'];
                    $result[1] .= '-' . $loaiCT['link'];
                }
                break;
            default://con lai
                if ($arrTag[2] == 7) {//noi that
                    $result[0] .= ' nội thất';
                    $result[1] .= '-noi-that';
                }
                $result[0] .= ' ' . $loaiCT['name'];
                $result[1] .= '-' . $loaiCT['link'];
                break;
        }
        $result[0] .= ' tại ' . $city['name'] . ' ' . $title;
        $result[1] .= '-tai-' . (FunctionPub::createLink($city['name']));
        return $result;
    }

    /**
     * @param $num
     * @return string
     * ham view star 2*
     */
    public static function viewStar_bt($num)
    {
        $str = '';
        switch ($num) {
            case '1':
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star-o" style=""></i> ';
                $str .= '<i class="fa fa-star-o" style=""></i> ';
                $str .= '<i class="fa fa-star-o" style=""></i> ';
                $str .= '<i class="fa fa-star-o" style=""></i>  ';
                break;
            case '2':
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star-o" style=""></i> ';
                $str .= '<i class="fa fa-star-o" style=""></i> ';
                $str .= '<i class="fa fa-star-o" style=""></i> ';
                break;
            case '3':
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star-o" style=""></i> ';
                $str .= '<i class="fa fa-star-o" style=""></i> ';
                break;
            case '4':
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star-o" style=""></i> ';
                break;
            case '5':
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star" style=""></i> ';
                $str .= '<i class="fa fa-star" style=""></i> ';
                break;
        }

        return $str;
    }

    /**
     * @param $so
     * @param $dodai
     * @return string
     */
    public static function chenSoThanhChuoi($so, $dodai)
    {
        //dem ky tu
        $bien_x = mb_strlen($so);
        $bien_them = $dodai - $bien_x;
        $str = '';
        for ($i = 1; $i <= $bien_them; $i++) {
            $str .= '0';
        }
        return $str . $so;
    }

    /**
     * @return bool
     */
    public static function catchGetParam($link = false){
        $arrGET = false;
        if(isset($_GET)){
            foreach ($_GET as $k => $v){
                switch ($k){
                    case 'cate':
                    case 'tags':
                    case 'style':
                    case 'hashtag':
                    case 'used':
                    case 'status':
                        $arrGET[$k] = $v;
                        break;

                }
            }
        }
        if($arrGET && $link){
            foreach ($arrGET as $k => $v){
                $url[] = $k.'='.$v;
            }
            $arrGET = implode('&',$url);
        }

        return $arrGET;
    }

    /**
     * @param $post
     * @param $len
     * @return array
     */
    public static function cutStringPHP($post,$len){
        $str = ['txt'=>'','cut'=>0];
        if(strlen($post)<$len && trim($post)){
            $str['txt'] = $post;
            return $str;
        }
        if(trim($post)) {
            $words = preg_split('//', $post);
            $i = 0;
            $tam = '';
            do{
                $str['txt'] .= $words[$i];
                $i++;
                if($words[$i]==' '){
                    $tam = $str['txt'];
                }
            }while ($i < $len && isset($words[$i]));
            $str['txt'] = $tam;            
            $str['cut'] = 1;
        }
        return $str;
    }

    /**
     * @param $post
     * @param $len
     * @return bool
     */
    public static function upgradeProgress($idCus){
        $model = GiftPresent::find()->where(['id_customer_receive' => $idCus])->one();
        if($model && $model->admin_check == 0) {
            $info = CustomerInfo::find()->where(['id_customer' => $idCus])->one();
            if ($info) {
                $kts = CustomerInfoKts::find()->where(['id_customer_info' => $info->id_customer_info])->one();
                //bat dau kiem tra
                $progress = 30;
                if ($info->full_name) {
                    $progress += 10;
                    $model->name_recei = $info->full_name;
                }
                if ($info->phone) {
                    $progress += 10;
                }
                if ($info->email) {
                    $progress += 10;
                }
                if ($info->avatar_link) {
                    $progress += 10;
                }
                if ($kts && $kts->facebook) {
                    $progress += 10;
                }
                //phan kiem tra du an
                if($info->register_kts && $info->check_customer_level && $info->active_mail == '1'){
                    $project = Project::find()->where(['id_customer' => $idCus,'status' => 1,'hide' => 0,'del' => 0])->count();
                    if($project > 0){
                        $progress += 10;
                    }
                }
                //kiem tra admin check
                if($model->admin_check == 1){
                    $progress += 10;
                }
                //cap nhat ngay
                $model->progress = $progress;
                $model->save();
                return true;
            }
        }
        return false;
    }

}