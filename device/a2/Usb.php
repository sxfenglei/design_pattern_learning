<?php
/**
 * Usb类
 */
include_once 'IDevice.php';

class Usb implements IDevice {
    public function read(){
        echo __METHOD__ . PHP_EOL;
    }
    public function writer(){
        echo __METHOD__ . PHP_EOL;
    }
}