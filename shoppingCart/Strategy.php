<?php
/**
 * 策略抽象类
 */
interface Strategy {
    //计算价格
    public function calculatePrice($price);
}