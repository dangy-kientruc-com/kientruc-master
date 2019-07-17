<?php 
namespace frontend\models;
use Yii;
use yii\base\Model;
class ModelIndex extends Model
{
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
}
?>