<?php
/* Smarty version 3.1.30, created on 2017-09-05 10:26:19
  from "C:\xampp\htdocs\AUTHSERVER\recommendation\templates\detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ae5fab238c16_12864886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18570d967559bc11e2a934c66786e5884a46e811' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AUTHSERVER\\recommendation\\templates\\detail.tpl',
      1 => 1504599976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ae5fab238c16_12864886 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                              <div class="col-xs-5 info text-center"><h4><?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
</h4></div>
                  <div class="col-xs-4">  <a class="btn-dark wrapper text-white" href="../login/grantPermission.php">
                          <i class="fa fa-globe"></i> 访问网络</a>
                  </div>
      </div>  </header></div>



  <div class="content group-info bg-white">

      <section>
          <div class="carousel slide auto panel-body animated fadeInRight" >
              <ol class="carousel-indicators out">
                  <?php $_smarty_tpl->_assignInScope('loopRec', 0);
?>
                  <?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['shop']->value['imagesURL']) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_start = min(0, $__section_sec1_0_loop);
$__section_sec1_0_total = min(($__section_sec1_0_loop - $__section_sec1_0_start), $__section_sec1_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = $__section_sec1_0_start; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                  <li <?php if ($_smarty_tpl->tpl_vars['loopRec']->value == 0) {?>class="active"<?php }?> data-target="#c-slide" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['loopRec']->value;?>
"></li>

                  <?php $_smarty_tpl->_assignInScope('loopRec', $_smarty_tpl->tpl_vars['loopRec']->value+1);
?>
                  <?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>
              </ol>
              <div class="carousel-inner" style="">
<?php $_smarty_tpl->_assignInScope('loopRec', 0);
?>
                  <?php
$__section_sec1_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['shop']->value['imagesURL']) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_start = min(0, $__section_sec1_1_loop);
$__section_sec1_1_total = min(($__section_sec1_1_loop - $__section_sec1_1_start), $__section_sec1_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_1_total != 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = $__section_sec1_1_start; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>

                  <div class="item <?php if ($_smarty_tpl->tpl_vars['loopRec']->value == 0) {?>active<?php }?>" style="width: 100%;height: 100%;"><img style="width: 100%;max-width: 1080px" src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['imagesURL'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['imageURL'];?>
"></div>
<?php $_smarty_tpl->_assignInScope('loopRec', $_smarty_tpl->tpl_vars['loopRec']->value+1);
?>
                  <?php
}
}
if ($__section_sec1_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_1_saved;
}
?>
              </div>
          </div>
      </section>

              <div class="row text-center">
                  <div class="col-xs-4">
              <div class="pic">

                  <img width="90" height="90" src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['logoURL'];?>
"/>
              </div></div><div class="col-xs-8">
              <h3><?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
</h3>
              <p><?php echo $_smarty_tpl->tpl_vars['shop']->value['description'];?>
</p>
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
              <div class="index_like_title"><?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
 最近促销信息

              </div>
              <div class="index_content">
                  <div>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop']->value['promotions'], 'promotion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['promotion']->value) {
?>
          <div class="index_content_item standard_content_item">


              <div class="content">
                  <div class="shop_name_main">
                      <div class="shop_name" style="max-width: 443px;"><a href="?promotion=<?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>
</a></div>
                      <div class="shop_tags text-danger" style="width: 16px;">
                          新
                      </div>
                  </div>

                  <div class="shop_name_sub">
                      <a  href="?promotion=<?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>
">
                      <?php echo $_smarty_tpl->tpl_vars['promotion']->value['description'];?>

                            </a>
                        </div>

                        <div class="item_price">

                      <div class="sale_desc"></div>
                  </div>
              </div>
          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</div>
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


          <?php echo '<script'; ?>
 src="../js/app.v2.js"><?php echo '</script'; ?>
> <!-- Bootstrap --> <!-- App --> <?php echo '<script'; ?>
 src="../js/appear/jquery.appear.js" cache="false"><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 src="../js/scroll/smoothscroll.js" cache="false"><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 src="../js/landing.js" cache="false"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="../js/jquery.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="../js/recommendation/recommandation.js"><?php echo '</script'; ?>
>


</body></html><?php }
}
