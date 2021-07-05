<?php
include_once 'Facade.php';

$facade = new Facade();
//离家模式
echo '离家模式:'.PHP_EOL;
$facade->leaveHome();
//回家模式
echo PHP_EOL.'回家模式:'.PHP_EOL;
$facade->goHome();

/*
离家模式:
灯已关闭
空调已关闭
窗帘已关闭
监控摄像头已打开

回家模式:
灯已打开
空调已打开
窗帘已打开
监控摄像头已关闭
*/