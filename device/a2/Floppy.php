<?php
/**
 * 软盘类
 */
include_once 'IDevice.php';

class Floppy implements IDevice {
    public function read(){
        echo __METHOD__ . PHP_EOL;
    }
    public function writer(){
        echo __METHOD__ . PHP_EOL;
    }
}