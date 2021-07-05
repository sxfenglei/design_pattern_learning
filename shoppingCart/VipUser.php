<?php
/**
 * VIP用户策略 具体实现
 */
include_once 'Strategy.php';

class VipUser implements Strategy {
    public function calculatePrice($price)
    {
        //'VIP用户85折'
        return $price * 0.85;
    }
}