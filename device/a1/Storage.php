<?php
/**
 * 存储类
 */
include 'Floppy.php';

class Storage {
    private $writer;

    public function __construct()
    {
        $this->writer = new Floppy();
    }

    public function save(){
        $this->writer->writer();
    }
}