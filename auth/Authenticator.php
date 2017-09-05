<?php
/**
 * Created by PhpStorm.
 * User: LLG
 * Date: 2017/9/4
 * Time: 21:47
 */
namespace Pas;
use \mysqli;
date_default_timezone_set("Asia/Chongqing");
include "../core/CoreService.php";
use \Pas\CoreService;
class Authenticator{
    const SUCCESS=1;
    const INVALID_TOKEN=-1;
    const EXPIRED_TOKEN=0;
    static function auth($token)
    {
        $conn=CoreService::GetInstance();
        $result = $conn->QuerySQL("SELECT * FROM `tokens` WHERE `token`='$token';");
        if ($result) {
            $result = mysqli_fetch_array($result);
            //echo json_encode($result);
            //var_dump($result);
            if ($result['token'] == $token && time() <= strtotime($result['expireTime'])) {
                return self::SUCCESS;
                //echo "Auth: 1";
            } else {
                return self::EXPIRED_TOKEN;
                //echo "Auth: 0";
            }
        } else {
            return self::INVALID_TOKEN;
            //echo "Auth: -1";
        }
    }

    static function authMAC($mac){

        $conn=\Pas\CoreService::GetInstance();
        $result=$conn->QuerySQL("SELECT * FROM `tokens` WHERE `mac`='$mac' ORDER BY `expireTime` DESC LIMIT 1");
        if ($result) {
            $result = mysqli_fetch_array($result);
            //echo json_encode($result);
            //var_dump($result);
            //echo "<script>alert('TOKEN1: ".$result['token']."');</script>";
            if (time() <= strtotime($result['expireTime'])) {
                return $result['token'];
                //echo "Auth: 1";
            } else {
                return -1;
                //echo "Auth: 0";
            }
        } else {

            return "-1";
            //echo "Auth: -1";
        }

    }

}