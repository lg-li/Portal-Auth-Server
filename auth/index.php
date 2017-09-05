<?php
namespace Pas;
/**
 * Created by PhpStorm.
 * User: LLG
 * Date: 2017/5/25
 * Time: 23:03

 */
include "Authenticator.php";
use Pas\Authenticator;
$statusCode=Authenticator::auth($_GET['token']);
echo "Auth: ".$statusCode;
?>