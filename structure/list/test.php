<?php
/**
 * Created by PhpStorm.
 * User: zs
 * Date: 18-10-17
 * Time: 下午3:26
 */
require './Node.php';

$list = new SingleList();

$list->insert(5);
$list->insert(7);
$list->insert(58);
$list->printNode();

$list->insertBefore(10,5);
$list->printNode();

$list->insertAfter(20,5);
$list->printNode();

$list->insertAtFirst(99);
$list->printNode();
$list->reverse();
$list->printNode();

$list->deleteFirst();
$list->deleteLast();
$list->printNode();

$list->delete(5);
$list->printNode();

