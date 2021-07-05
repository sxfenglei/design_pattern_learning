<?php
/**
 * 窗帘
 */
class Curtain {
    public $name = '窗帘';
    //开
    public function turnOn(){
        echo $this->name .'已打开' . PHP_EOL;
    }
    //关
    public function turnOff(){
        echo $this->name .'已关闭' . PHP_EOL;
    }
}