<?php
// +----------------------------------------------------------------------
// | 文件: index.php
// +----------------------------------------------------------------------
// | 功能: 提供todo api接口
// +----------------------------------------------------------------------
// | 时间: 2021-11-15 16:20
// +----------------------------------------------------------------------
// | 作者: rangangwei<gangweiran@tencent.com>
// +----------------------------------------------------------------------

namespace app\controller;

use Error;
use Exception;
use app\service\Balance;
use think\response\Html;
use think\response\Json;
use think\facade\Log;

class Balance
{

    /**
     * 根据卡ID获取余额列表
     * @param $cardId 卡ID不能为空
     * @return Json
     */
    public function getBalanceByCardId($cardId):Json{
        try{
            if(!$cardId){
                $res = [
                    "code" => -2,
                    "data" => [],
                    "errorMsg" => ("cardId不能为空")
                ];
                Log::write('getBalanceByCardId:'.json_encode($res));
                return json($res);
            }
            
            $balanceList = (new Balance)->getBalanceByCardId($cardId);
            $res = [
                "code" => 0,
                "data" => $balanceList
            ];
            Log::write('getBalanceByCardId:'.json_encode($res));
            return json($res);

        }catch(Exception $e){
            $res = [
                "code" => -1,
                "data" => [],
                "errorMsg" => ("根据卡ID获取余额列表" . $e->getMessage())
            ];
            Log::write('getBalanceByCardId: '.json_encode($res));
            return json($res);
        }
    }
}
