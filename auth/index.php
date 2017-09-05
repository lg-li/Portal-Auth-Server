<?php
/**
 * Created by PhpStorm.
 * User: LLG
 * Date: 2017/5/25
 * Time: 23:03

 */
require_once "../CoreService.php";
$Conn=CoreService::GetInstance();

$result=$Conn->QuerySQL("SELECT * FROM `tokens` WHERE `token`='{$_GET['token']}';");
if($result)
{

    $result=mysqli_fetch_array($result);
    //echo json_encode($result);

    //var_dump($result);
    if($result['token']==$_GET['token']&&time()<strtotime($result['expireTime']))
    {
        echo "Auth: 1";
    }else
    {
        echo "Auth: 0";
    }
}else
{
    echo "Auth: -1";
}





?>