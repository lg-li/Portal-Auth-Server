<?php


include '../third_party/smarty/libs/Smarty.class.php';

$smarty = new Smarty;
//$smarty->caching = true;

$ch = curl_init("http://121.42.252.18:8080/dspPlatform/back/promotions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$result = curl_exec($ch);
curl_close($ch);

//echo $result;
$smarty->left_delimiter = "<{"; //设置左边界符
$smarty->right_delimiter = "}>"; //设置右边界符
$result = json_decode($result, true);

if(isset($_GET['shop'])){
    $render=null;
    foreach ($result['shops'] as $shop){
        if($shop['name']==$_GET['shop']){
            $render=$shop;
        }
    }

    if($render!=null){
        $smarty->assign("shop", $render);
        $smarty->display('detail.tpl');
    }



}else {

    $smarty->assign("promotions", $result);
    $smarty->display('index.tpl');
}
?>