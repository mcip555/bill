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

namespace app\model;

use think\Model;
use app\model\Balance;

// Counters 定义数据库model
class Balance extends Model
{
    public function getBalanceByCardId($cardId){
        try{
            $BalanceList = Balance::where('cardId',$cardId)->select();
            return $BalanceList;
        }catch(Exception $e){
            return $e;
        }
    }

}