<?php
// +----------------------------------------------------------------------
// | 文件: index.php
// +----------------------------------------------------------------------
// | 功能: mysql数据库表model
// +----------------------------------------------------------------------
// | 时间: 2021-11-15 16:20
// +----------------------------------------------------------------------
// | 作者: rangangwei<gangweiran@tencent.com>
// +----------------------------------------------------------------------

namespace app\common;

use think\Model;
use Exception;
use app\model\Balance;

// Counters 定义数据库model
class Util extends Model
{
    public static function res($code,$data,$reason){
        return [
            "code" => $code,
            "data" => $data,
            "errorMsg" => $reason
        ];
    }

}