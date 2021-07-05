<?php
/**
 * 存储设备接口
 */
interface IDevice {
    public function read();
    public function writer();
}