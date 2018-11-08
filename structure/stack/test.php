<?php
/**
 * Created by PhpStorm.
 * User: zs
 * Date: 18-10-26
 * Time: 下午2:40
 */

$str = "mail💙";

print_r(strlen($str));

// 过滤掉emoji表情
function filter_Emoji($str)
{
    $str = preg_replace_callback(    //执行一个正则表达式搜索并且使用一个回调进行替换
        '/./u',
        function (array $match) {
            return strlen($match[0]) >= 4 ? '' : $match[0];
        },
        $str);
    return $str;
}

echo filter_Emoji($str);