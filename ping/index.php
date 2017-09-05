<?php
/**
 * Portal Authentication.
 * Creator: LLG
 * Date: 2017/5/22
 * Time: 14:35
 */
require_once "../CoreService.php";


$Conn=CoreService::GetInstance();
$CurrentTime=date("Y/m/d H:i:s", time());
$Conn->QuerySQL("INSERT INTO `pingLogs` (`time`) VALUE ('$CurrentTime');");

echo 'Pong';
?>