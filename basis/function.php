<?php
/**
 * Created by PhpStorm.
 * User: zs
 * Date: 18-11-8
 * Time: 上午9:17
 */

//1. ip转换相关函数
echo ip2long('127.0.0.1');
echo long2ip(1000);


echo PHP_EOL;
$i = 1;
$s = 'i am string';
$a = ['name'=>'zs','age'=>'23'];
$c = new stdClass();
$c->name = 'zs';


class Person{
    public $name = 'xxx';

    public $age = 45;

    public function say(){
        echo ' i am xxx';
    }
}

$p = new Person();
echo serialize($i) . PHP_EOL;
echo serialize($s) . PHP_EOL;
echo serialize($a) . PHP_EOL;
echo serialize($c) . PHP_EOL;
echo serialize($p) . PHP_EOL;