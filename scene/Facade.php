<?php
/**
 * 门面类 根据不同情景组织智能家居的开关
 * 负责将零散的功能统一在一起
 * 例如回家模式 开灯->开空调->开窗帘->关监控
 * 例如离家模式 关灯->关空调->关窗帘->开监控
 */
include_once 'Light.php';
include_once 'Curtain.php';
include_once 'Air.php';
include_once 'Camera.php';

class Facade {
    private $light; //灯
    private $curtain; //窗帘
    private $air; //空调
    private $camera; //监控摄像头

    public function __construct()
    {
        $this->light = new Light();
        $this->curtain = new Curtain();
        $this->air = new Air();
        $this->camera = new Camera();
    }

    //回家模式  开灯->开空调->开窗帘->关监控
    public function goHome(){
        $this->light->turnOn(); //开灯
        $this->air->turnOn(); //开空调
        $this->curtain->turnOn();//打开窗帘
        $this->camera->turnOff();//关监控
    }
    //离家模式 关灯->关空调->关窗帘->开监控
    public function leaveHome(){
        $this->light->turnOff(); //关灯
        $this->air->turnOff(); //关空调
        $this->curtain->turnOff();//关闭窗帘
        $this->camera->turnOn();//开监控
    }
}