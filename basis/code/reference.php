<?php


$a = range(0,1000);
var_dump(memory_get_usage());

$b = $a;
var_dump(memory_get_usage());

$a = range(0,1000);

var_dump(memory_get_usage());

class Person{
    public $name = 'zs';
}

$p1 = new Person();
xdebug_debug_zval('p1');
$p2 = &$p1;
xdebug_debug_zval('p2');

xdebug_debug_zval('p2');
$p2->name = 'ls';
xdebug_debug_zval('p2');