<?php
/**
 * Created by PhpStorm.
 * User: LLG
 * Date: 2017/9/4
 * Time: 22:03
 */

namespace Pas;
include "../core/CoreService.php";
use \Pas\CoreService;

class Recorder
{
    static function ping()
    {
        $Conn = CoreService::GetInstance();
        $CurrentTime = date("Y/m/d H:i:s", time());
        $result=$Conn->QuerySQL("INSERT INTO `pingLogs` (`time`) VALUE ('$CurrentTime');");
        if($result){
            return true;
        }else{
            return false;
        }
    }
}