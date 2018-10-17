<?php
/**
 * Created by PhpStorm.
 * User: zs
 * Date: 18-10-17
 * Time: 上午10:28
 */

/*
 * ArrayAccess提供像访问数组一样访问对象的能力
 *
 * abstract public boolean offsetExists ( mixed $offset ) 检查一个偏移位置是否存在
 * abstract public mixed offsetGet ( mixed $offset )    获得一个偏移位置的值
 * abstract public void offsetSet ( mixed $offset , mixed $value ) 设置一个偏移位置的值
 * abstract public void offsetUnset ( mixed $offset )  重置一个偏移位置的值
 *
 * */
class MyArrayAccess implements ArrayAccess{

    private $data;

    public function __construct($arr) {
        $this->data = $arr;
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        echo __METHOD__;
       return isset($this->data[$offset]);
    }


    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        echo __METHOD__;
        return $this->data[$offset];
    }


    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        echo __METHOD__;
        if(is_null($offset)){
            $this->data[] = $value;
            return;
        }
        $this->data[$offset] = $value;
    }


    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        echo __METHOD__;
       if($this->offsetExists($offset)){
           unset($this->data[$offset]);
       }
    }
}