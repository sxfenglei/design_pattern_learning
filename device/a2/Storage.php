<?php
/**
 * 存储类
 */
include 'IDevice.php';

class Storage {
    private $writer;

    //依赖注入
    public function __construct($writer)
    {
        $this->writer = $writer;
    }

    public function save(){
        $this->writer->writer();
    }
}