<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <title>团购详情</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui">
  <meta name="format-detection" content="telephone=no">
  <meta name="format-detection" content="email=no">
    <link href="../css/recommendation.css" rel="stylesheet" type="text/css">
    <link href="../css/detail.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/app.v2.css" type="text/css" />
    <style type="text/css">
        .footertab_footerTab {
            background-image: linear-gradient(180deg, #e1e1e1, #e1e1e1 50%, transparent 0);
            background-position: 0 0;
            background-size: 100% 1px;
            background-repeat: no-repeat;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            background-color: #fff;
            height: 80px;
            display: -webkit-box;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            font-size: 12px;
            z-index: 998;
            padding: 0;
            box-shadow: 0px 5px 25px #000;
        }
    </style>
</head>

<body>
  <div>
      <div class="J_header">
          <header class="index-head header_browser" >
              <div class="row" style="width: 100%">
                  <div class="col-xs-3">
                              <a class="btn-dark wrapper text-white" href="javascript:history.go(-1)">
                                  <i class="fa fa-arrow-left"></i> 返回</a>
                  </div>
                              <div class="col-xs-5 info text-center"><h4><{$shop['name']}></h4></div>
                  <div class="col-xs-4">  <a class="btn-dark wrapper text-white" href="../login/grantPermission.php">
                          <i class="fa fa-globe"></i> 访问网络</a>
                  </div>
      </div>  </header></div>



  <div class="content group-info bg-white">

      <section>
          <div class="carousel slide auto panel-body animated fadeInRight" >
              <ol class="carousel-indicators out">
                  <{$loopRec=0}>
                  <{section name=sec1 loop=$shop['imagesURL'] start=0}>
                  <li <{if $loopRec eq 0}>class="active"<{/if}> data-target="#c-slide" data-slide-to="<{$loopRec}>"></li>

                  <{$loopRec=$loopRec+1}>
                  <{/section}>
              </ol>
              <div class="carousel-inner" style="">
<{$loopRec=0}>
                  <{section name=sec1 loop=$shop['imagesURL'] start=0}>

                  <div class="item <{if $loopRec eq 0}>active<{/if}>" style="width: 100%;height: 100%;"><img style="width: 100%;max-width: 1080px" src="<{$shop['imagesURL'][sec1]['imageURL']}>"></div>
<{$loopRec=$loopRec+1}>
                  <{/section}>
              </div>
          </div>
      </section>

              <div class="row text-center">
                  <div class="col-xs-4">
              <div class="pic">

                  <img width="90" height="90" src="<{$shop['logoURL']}>"/>
              </div></div><div class="col-xs-8">
              <h3><{$shop['name']}></h3>
              <p><{$shop['description']}></p>
                  </div>
              </div>


      <div class="cost-box wrapper">
          <div class="buy-box">

              <div class="price">¥</div>
              <div class="text-danger"><h4>7.8</h4></div>

              <div class="last text-right">
                  <a class="btn-lg btn-warning" href="#">
                      <i class="fa fa-thumbs-up"></i> 优质店铺
                  </a>
              </div>
          </div>                <div class="promo-detail-list">
              <a href="javascript:void(0);">

                  <div class="blo">
                                <span class="promo-tag ri">
                                    <strong>立减2元</strong>
                                </span>
                  </div>
                  <div class="blo">
                      立减2元，每人限购1张
                  </div>
              </a>
          </div>
          <ul class="advantage ">
              <li><i></i>随时可退</li>
              <li><i class="dated"></i>过期自动退</li>
          </ul>
      </div>
  </div>

  <div class="comments-list detail-info">
      <div class="con">
          <h3 class="hd wrapper-sm">
              <span class="text-danger">
                  活动</span>

              <small class="pull-right text-warning small">店铺评分 4.6 </small></h3>

          <div class="index_for_you">
              <div class="index_like_title"><{$shop['name']}> 最近促销信息

              </div>
              <div class="index_content">
                  <div>
          <{foreach $shop['promotions'] as $promotion}>
          <div class="index_content_item standard_content_item">


              <div class="content">
                  <div class="shop_name_main">
                      <div class="shop_name" style="max-width: 443px;"><a href="?promotion=<{$promotion['name']}>"><{$promotion['name']}></a></div>
                      <div class="shop_tags text-danger" style="width: 16px;">
                          新
                      </div>
                  </div>

                  <div class="shop_name_sub">
                      <a  href="?promotion=<{$promotion['name']}>">
                      <{$promotion['description']}>
                            </a>
                        </div>

                        <div class="item_price">

                      <div class="sale_desc"></div>
                  </div>
              </div>
          </div>
          <{/foreach}></div>
  </div>
          </div>

          <div class="all-shop wrapper-sm">
            查看全部活动 <i class="fa fa-angle-right"></i>
          </div>

          <p></p><p></p><p></p><p></p><p></p><p></p>

          <!-- / footer -->
          <div class="J_footer footertab_footerTab">
              <div class="row wrapper-sm" style="width: 100%; height:100%; text-align: center;">
                  <div class="col-xs-3">
                      <a class="btn text-dark"><i class="fa fa-2x fa-thumbs-o-up"></i><p>今日优选</p></a>
                  </div>
                  <div class="col-xs-3">
                      <a class="btn text-muted"><i class="fa fa-2x fa-tasks"></i><p>icon2</p></a>
                  </div>
                  <div class="col-xs-3">
                      <a class="btn text-muted"><i class="fa fa-2x fa-address-card"></i><p>icon3</p></a>
                  </div>
                  <div class="col-xs-3">
                      <a class="btn text-muted"><i class="fa fa-2x fa-user"></i><p>我的</p></a>
                  </div>

              </div>
          </div>


          <script src="../js/app.v2.js"></script> <!-- Bootstrap --> <!-- App --> <script src="../js/appear/jquery.appear.js" cache="false"></script> <script src="../js/scroll/smoothscroll.js" cache="false"></script> <script src="../js/landing.js" cache="false"></script>
          <script src="../js/jquery.js"></script>
          <script src="../js/recommendation/recommandation.js"></script>


</body></html>