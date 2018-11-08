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

#echo hex2bin('616161'); //aaa

#5 chop()  rtrim的别名

#6 chr() 返回相对应于 ascii 所指定的单个字符

#echo chr(65); //A
#echo chr(1000); //?

#7 ord() 返回字符对应的ascii码

#echo ord('/'); //47
//echo ord('我'); //230

//echo chr(0x65);

//$str = '我是谁';

//echo ord($str[0]);

function utf8_sub($str,$start,$len) {


    $loop =0;

    $res = '';
    for ($i = 0 ; $i < strlen($str); ) {


        $ord = ord($str[$i]);
        if($ord <= 127) {
            $j = 1;
        } elseif ($ord < 128 + 64 + 32){
            $j = 2;
        } elseif ($ord < 128 + 64 + 32 + 16){
           $j = 3;
        } elseif ($ord < 128 + 64 + 32 + 16 + 8){
            $j =4;

        } elseif ($ord < 128 + 64 + 32 + 16 + 8+4){
            $j = 5;
        } else {
            $j = 6;
        }

        echo $ord , '   ', $j ,PHP_EOL;
        if($loop >= $start && $len>0){
            $len -- ;
            for ($k = 0; $k < $j; $k++){
                $res.= $str[$i+$k];
            }

        }
        $loop++;
        $i +=$j;
    }
    return $res;
}

$str = 'ab我defghijk';


echo utf8_sub($str,2,3);


//echo ord('abc'); // 97
