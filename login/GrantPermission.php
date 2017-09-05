<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8" />

    <title>获取网络权限</title>
    <meta name="description" content="网关认证" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="../css/app.v2.css" type="text/css" />
    <link rel="stylesheet" href="../css/landing.css" type="text/css" cache="false" />
    <!--[if lt IE 9]>
    <script src="../js/ie/html5shiv.js" cache="false"></script>
    <script src="../js/ie/respond.min.js" cache="false"></script>
    <script src="../js/ie/excanvas.js" cache="false"></script>
    <![endif]-->
</head>
<body>
<!-- header -->
<header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light" data-spy="affix" data-offset-top="1">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">
                <img src="../images/logo.png" class="m-r-sm">
                <span class="text-muted font-thin"> PAS 网关控制</span>
            </a>
            <button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right ">
                <li> <a href="?route=about">关于</a> </li>
                <li> <a href="?route=support">支持</a> </li>
                <li>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- / header -->

 <div class="b-t b-light dker animated fadeInRight">
        <div class="container m-t-xl wrapper-lg" >
<?php
/**
 * Portal Authentication.
 * Creator: LLG
 * Date: 2017/5/25
 * Time: 22:47
 */

require_once "../CoreService.php";

echo "<h2><i class='fa fa-clock-o'></i>正在等待服务器响应</h2>";
$Conn=CoreService::GetInstance();
$ExpireTime=date("Y/m/d H:i:s", strtotime("+4 hours"));
$token=md5("1d8qwf".sha1("76jy9rt6br".$ExpireTime."3uf6ej")."4feh78k");
$result=$Conn->QuerySQL("INSERT INTO 
`tokens` (`token`,`mac`,`ip`,`expireTime`)
 VALUES
('$token','{$_GET['mac']}','{$_GET['cip']}','$ExpireTime');");
echo "Confirm Authentication";
if($result)
{
     echo "<h5>请稍候...</h5><h5>如本页面停留超过5秒，请手动 <a href='"."http://".$_GET['gwip'].":".$_GET['gwport']."/wifidog/auth?token=".$token ."'>点击此处重试</a> 。</h5>";
     echo "<script>location.href('http://".$_GET['gwip'].":".$_GET['gwport']."/wifidog/auth?token=".$token."');</script>";
     header("http://".$_GET['gwip'].":".$_GET['gwport']."/wifidog/auth?token=".$token);

}
else
{
    var_dump($result);
    echo "<h5>出现错误，请返回上一级页面。</h5>";
}

?>
</div>
</div>
</body>
</html>