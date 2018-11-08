<?php
/**
 * Created by PhpStorm.
 * User: zs
 * Date: 18-11-8
 * Time: 下午3:09
 */

#1 int strlen(string)  获取字符串的长度（获取的是字符串的字节数而不是字符的个数）

#echo strlen('china'); //5
#echo strlen('中国'); //6  strlen是多语言不安全的

#2 int mb_strlen(str,encodeing) 获取字符串的长度  返回具有 encoding 编码的字符串 str 包含的字符数。 多字节的字符被计为 1。
#echo mb_strlen('中国');  //2
#echo mb_strlen('china'); //5

#3 string bin2hex(string) 把包含数据的二进制字符串转换为十六进制值

#echo  bin2hex('aaa'); //616161  把每一个字符的编码值用16进制表示出来

#4 string hex2bin ( string $data ) 转换十六进制字符串为二进制字符串

echo hex2bin('616161'); //aaa

//echo ord('A');