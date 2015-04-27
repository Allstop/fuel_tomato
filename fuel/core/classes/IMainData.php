<?php
namespace Fuel\Core;

use Fuel\Core\Interfaces\IMain;

class IMainData
{
    // 共用的物件
    private static $main = null;
    // 初始化要執行的動作以及物件
    public function getMain()
    {
        if (self::$main == null) {
            self::$main = new IMainData();
        }
        if (self::$main instanceof IMain) {
            return self::$main;
        }  else {
            return false;
        }
    }
}