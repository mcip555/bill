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

use Exception;
use app\service\BalanceService;
use think\response\Json;
use think\facade\Log;
use app\common\Util;

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

                $res = Util::res(-2,[],"cardId不能为空");
                Log::write('getBalanceByCardId:'.json_encode($res));
                return json($res);
            }
            
            $balanceList = BalanceService::getBalanceByCardId($cardId);

            $res = Util::res(0,$balanceList,"");
            Log::write('getBalanceByCardId:'.json_encode($res));
            return json($res);

        }catch(Exception $e){
            $res = Util::res(-1,[],"根据卡ID获取余额列表");
            Log::write('getBalanceByCardId: '.json_encode($res));
            return json($res);
        }
    }
}
