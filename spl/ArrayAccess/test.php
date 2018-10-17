<?php
/**
 * Created by PhpStorm.
 * User: zs
 * Date: 18-10-17
 * Time: 上午10:36
 */

require  './MyArrayAccess.php';

$arr = new MyArrayAccess([
    'name'=>'zs',
    'age'=>'24',
    'address'=>'china'
]);
//执行数组的常见操作
echo $arr['name'];  //MyArrayAccess:offsetGet zs
$arr['name'] = 'wj'; //MyArrayAccess::offsetSet
unset($arr['name'] ); //MyArrayAccess::offsetUnset  MyArrayAccess::offsetExists 先执行offsetUnset操作 再返回offsetUnset的值
$tag = isset($arr['name']); //MyArrayAccess::offsetExists

//内置函数对数组的操作
echo PHP_EOL;
array_key_exists('age',$arr); //没有触发任何方法

array_pop($arr); //需要数组
array_unshift($arr); //需要数组
array_push($arr,'test'); //需要数组
array_shift($arr,'test'); //需要数组
in_array('zs',$arr);  //in_array() expects parameter 2 to be array, object given
echo PHP_EOL;

function prints($value) {

    echo PHP_EOL;
    print_r($value);
    echo PHP_EOL;
}