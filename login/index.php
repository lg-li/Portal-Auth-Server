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



<section id="content">
    <div class="b-t b-light dker text-white animated fadeInRight" style="background-image: url(../images/slider-3.jpg);background-size: cover;background-position: center center;">
        <div class="container" >
            <div class="row">
                <div class="col-sm-12">
                    <div class="carousel slide carousel-fade inline auto" data-interval="2000">

                        <div class="carousel-inner">
                            <div class="item active">
                                <h2 class="font-thin">获取网络权限</h2>
                                <h6 class="text-white">开始访问网络</h6>
                            </div>
                            <div class="item">
                                <h2 class="font-thin">Grant Access to Internet</h2>
                                <h6 class="text-white">Get started to surf</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="b-t b-light dker animated fadeInRight">
        <div class="container m-t-xl" >
            <div class="row">
                <div class="col-sm-12">
                    <h3 id="timerText" class="font-thin m-b-lg" style="display: none">广告剩余 <span id="t_s"></span></h3>
                    <p id="preContinue" class="h5 m-b-lg l-h-1x">

<a class='btn btn-lg btn-dark' onclick="startTimer();" >
<i class='fa fa-arrow-circle-right'></i> 点击继续</a>
                    </p>
                    <p id="continue" class="h5 m-b-lg l-h-1x" style="display: none">
                        <?php
                        echo "
<a class='btn btn-lg btn-dark' href='GrantPermission.php?mac=".$_GET["mac"]."&url=".$_GET["url"]."&gwip=".$_GET['gw_address']."&gwport=".$_GET['gw_port']."&cip=".$_GET['ip']."'>
<i class=\"fa fa-connectdevelop\"></i> 点击获取网络连接权限</a>";
                        ?>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div id="adArea" class="carousel slide auto panel-body animated fadeInRight" style="display:none;">
        <ol class="carousel-indicators out">
            <li class="active" data-target="#c-slide" data-slide-to="0"></li>
            <li data-target="#c-slide" data-slide-to="1"></li>
            <li data-target="#c-slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="">
            <div class="item active" style="background-image: url(../images/slider-1.jpg);background-size: cover;background-position: center center;">

                <div class="text-center wrapper">
                    <div class="m-t-xl m-b-xl">
                        <div class="text-uc h1 font-bold inline">
                            <div class="pull-left m-r-sm text-white font-thin">使用
                                <span>UGMS</span>
                                对您的集体进行信息化管理。
                            </div>

                        </div>
                        <div class="h4 m-t-sm text-white">
                            向您推荐通用的中小型集体自助信息管理解决方案
                        </div>


                    </div>
                    <p class="text-center m-b-xl"> <a class="btn btn-lg btn-dark m-sm" href="?route=projectugms">了解更多</a>
                    </p>
                </div>

            </div>
            <div class="item" style="background-image: url(../images/slider-2.jpg);background-size:cover;background-position: center center;">

                <div class="text-center wrapper">
                    <div class="m-t-xl m-b-xl">
                        <div class="text-uc h1 font-bold inline">
                            <div class="pull-left m-r-sm text-white font-thin">
                                Lib. Manager 参上。
                            </div>

                        </div>
                        <div class="h4 m-t-sm text-white">
                            基于C++与MySQL的轻量级一源多端图书管理集成程序
                        </div>

                    </div>
                    <p class="text-center m-b-xl"> <a class="btn btn-lg btn-dark m-sm" href="?route=projectlibmgr">了解更多</a>
                    </p>
                </div>

            </div>


            <div class="item" style="background-image: url(../images/slider-4.jpg);background-size:cover;background-position: center center;">

                <div class="text-center wrapper">
                    <div class="m-t-xl m-b-xl">
                        <div class="text-uc h1 font-bold inline">
                            <div class="pull-left m-r-sm text-white font-thin">
                                开源的神经网络演示，以中文版提供给初学者。
                            </div>

                        </div>
                        <div class="h4 m-t-sm text-white">
                            便于认识神经网络的可视化演示，来自 <span> 世界顶级IT公司* </span>
                        </div>
                        <div class="h6 m-t-sm text-white">
                           (示例滚动广告)
                        </div>
                    </div>
                    <p class="text-center m-b-xl">
                        <a class="btn btn-lg btn-dark m-sm" href="http://5io2.com/tfpg">查看</a>
                    </p>
                </div>

            </div>
        </div>
        <a class="left carousel-control" href="#c-slide" data-slide="prev">
            <i class="fa fa-angle-left"></i> </a>
        <a class="right carousel-control" href="#c-slide" data-slide="next">
            <i class="fa fa-angle-right"></i> </a>
    </div>







</section>








<!-- footer -->
<footer id="footer">
    <div class="bg-dark lter text-center fadeInUp" >
        <div class="container wrapper">
            <div class="m-t-xl m-b font-thin"> <h3>横幅广告位。</h3>
                <a href="http://5io2.com/account" target="_blank" class="btn btn-lg btn-dark b-white bg-empty m-sm">广告位链接</a>
            </div>
        </div>
    </div>
    <div class="bg-light lter wrapper" >
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="title font-thin padder-v">
                        <h3>更多</h3>
                    </div>
                    <div >
                        <ul class="list-group" style="list-style-type:none">
                            <li class="list-group-item-heading"><a href="#" class="text-muted">应用定制计划</a></li>
                            <li class="list-group-item-heading"><a href="#" class="text-muted">支持与解惑</a></li>
                            <li class="list-group-item-heading"><a href="#" class="text-muted">关于我们</a></li>
                            <li class="list-group-item-heading"><a href="#" class="text-muted">服务条款</a></li>
                            <li class="list-group-item-heading"><a href="#" class="text-muted">隐私政策</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="title font-thin padder-v">
                        <h3>项目</h3>
                    </div>
                    <div>
                        <ul class="list-group" style="list-style-type:none">
                            <li class="list-group-item-heading"><a href="?route=projectpas" class="text-muted">Cheelem Portal</a></li>
                            <li class="list-group-item-heading"><a href="?route=projectlibmgr" class="text-muted">Cheelem Lib. Manager</a></li>
                            <li class="list-group-item-heading"><a href="?route=projectugms" class="text-muted">Cheelem UGMS</a></li>

                            <li class="list-group-item-heading"><a href="http://5io2.com/tfpg" class="text-muted">Tensorflow Playground</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="title font-thin padder-v">
                        <h3>建言献策</h3>
                    </div>
                    <div>
                        <form>
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">
                                    <input name="textinput" class="form-control input-md btn-light" id="suggname" type="text" placeholder="姓名*">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <input name="textinput" class="form-control input-md btn-light" id="suggemail" type="text" placeholder="电邮地址*">
                                </div>
                                <!-- Textarea-->
                                <div class="form-group">
                                    <textarea name="textarea" class="form-control input-md btn-light" id="suggarea" placeholder="您想说的话..." rows="4"></textarea>
                                </div>
                                <div class="form-group send-button">
                                    <button class="btn btn-s-md btn-light" type="submit" onclick="onSuggestionSubmit()">交予我们</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="m-t-xl m-b-xl">
                <div class="pull-left text-muted">
                    <p> ©2016-2017 Cheelem, 5iO2, CertainlyWin, LLG. All rights reserved.  </p>
                    <p class="text-muted font-thin">5iO2和CertainlyWin皆为Cheelem的旁系站点 / 渝ICP备15001693号-2</p></div>
                <div class="pull-right">
                    <p>
                        <a href="#content" data-jump="true" class="btn btn-icon btn-rounded btn-light b-light bg-empty m-sm text-muted">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </p>

                </div>
            </div>
        </div>

    </div>
</footer>
<!-- / footer -->
<script src="../js/app.v2.js"></script> <!-- Bootstrap --> <!-- App --> <script src="../js/appear/jquery.appear.js" cache="false"></script> <script src="../js/scroll/smoothscroll.js" cache="false"></script> <script src="../js/landing.js" cache="false"></script>
<script src="../js/jquery.js"></script>
<script>
    var flag=false;
    var EndTime; //截止时间
    function startTimer(){
        EndTime = new Date(); //截止时间
        flag=true;
        $("#adArea").show(900);
        $("#preContinue").hide(500);

        $("#timerText").show(500);
    }

    function getRTime(){
        if(flag) {
            var NowTime = new Date();
            var t =  2000-(NowTime.getTime()-EndTime.getTime());
            /*var d=Math.floor(t/1000/60/60/24);
             t-=d*(1000*60*60*24);
             var h=Math.floor(t/1000/60/60);
             t-=h*60*60*1000;
             var m=Math.floor(t/1000/60);
             t-=m*60*1000;
             var s=Math.floor(t/1000);*/

            var s = Math.floor(t / 1000 % 60);

            document.getElementById("t_s").innerHTML = s + "秒";
            if(s<=0)
            {
                flag=false;
                document.getElementById("timerText").innerHTML="<i class='fa fa-check-circle-o'></i>可以继续操作";
                $("#continue").show(500);
            }
        }
    }
    setInterval(getRTime,1000);
</script>


</body>
</html>
