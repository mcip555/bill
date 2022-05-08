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

// Counters 定义数据库model
class Balance extends Model
{
    protected $table = 'balance';
    public $id;
    public $createTime;
    public $modifyTime;
    public $cardId;
}