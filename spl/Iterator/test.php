<?php
/**
 * Created by PhpStorm.
 * User: zs
 * Date: 18-10-17
 * Time: 下午2:33
 */
require  './MyIterator.php';

$arr = new MyIterator([
    0=>'php',
    1=>'java',
    2=>'go',
    3=>'python',
]);

foreach ($arr as $key=>$value) {
    echo $key . '=>' .$value . PHP_EOL;
}
//方法的执行顺序
// MyIterator::rewind   MyIterator::valid   MyIterator::current   MyIterator::key  0=>php
// MyIterator::next   MyIterator::valid   MyIterator::current   MyIterator::key  1=>java
// MyIterator::next   MyIterator::valid   MyIterator::current   MyIterator::key  2=>go
// MyIterator::next   MyIterator::valid   MyIterator::current   MyIterator::key  3=>python
// MyIterator::next   MyIterator::valid

//另外一种遍历

$arr->rewind();

while($arr->valid()){
    echo $arr->key() . ' : ' . $arr->current() . PHP_EOL;
    $arr->next();
}
