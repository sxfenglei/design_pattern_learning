<?php
/**
 * 空调
 */
class Air {
    public $name = '空调';
    //开
    public function turnOn(){
        echo $this->name .'已打开' . PHP_EOL;
    }
    //关
    public function turnOff(){
        echo $this->name .'已关闭' . PHP_EOL;
    }
    //模式
    public function pattern(){
        echo $this->name .'调整模式' . PHP_EOL;
    }
    //温度
    public function temperature(){
        echo $this->name .'设置温度' . PHP_EOL;
    }
}