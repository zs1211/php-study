<?php
/**
 * Created by PhpStorm.
 * User: wujie
 * Date: 2018/11/7
 * Time: 21:34
 */

$arr = ['yellow','red','blue','green'];

print_r(each($arr)); //Array ( [1] => yellow [value] => yellow [0] => 0 [key] => 0 )
print_r(each($arr)); // Array ( [1] => red [value] => red [0] => 1 [key] => 1 )

list($key,$value) = each($arr);
echo $key; //2
echo $value; //blue

reset($arr);
while(list($key,$value) = each($arr)){
    echo $key .'=>'. $value . PHP_EOL;
}


reset($arr);
while( ($key = key($arr) ) !== null ){
    echo $key .'=>'. current($arr) . PHP_EOL;
    next($arr);
}