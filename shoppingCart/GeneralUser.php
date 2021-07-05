<?php
/**
 * 普通用户策略 具体实现
 */
include_once 'Strategy.php';

class GeneralUser implements Strategy {
    public function calculatePrice($price)
    {
        //'普通用户没有折扣'
        return $price;
    }
}