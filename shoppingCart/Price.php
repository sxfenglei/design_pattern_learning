<?php
/**
 * 价格实现类 环境角色
 */ 
class Price {
    private $strategy;
    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }
    //计算价格
    public function realPrice($price){
        return $this->strategy->calculatePrice($price);
    }
}