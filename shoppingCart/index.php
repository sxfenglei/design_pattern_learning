<?php
/*
策略模式
*/
include_once 'GeneralUser.php';
include_once 'VipUser.php';
include_once 'Price.php';

$genUser = new GeneralUser();//普通策略
$price = new Price($genUser);
$genUserPrice = $price->realPrice(500); 

$vipUser = new VipUser();//vip策略
$price = new Price($vipUser);
$vipUserPrice = $price->realPrice(500); 

echo '普通用户价格：'.$genUserPrice.PHP_EOL;
echo 'vip用户价格：'.$vipUserPrice.PHP_EOL;

/*
普通用户价格：500
vip用户价格：425
*/