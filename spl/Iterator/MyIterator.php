<?php
/**
 * Created by PhpStorm.
 * User: zs
 * Date: 18-10-17
 * Time: 下午2:23
 */

class MyIterator implements Iterator{



    private $data;

    private $position;

    public function __construct($arr)
    {
        $this->data = $arr;
        $this->position = 0;
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {

        echo ' '  .__METHOD__ .  '  ';
        return current($this->data);
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        echo ' '  .__METHOD__ .  '  ';
        next($this->data);
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        echo ' '  .__METHOD__ .  '  ';
        return key($this->data);
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        echo ' '  .__METHOD__ .  '  ';
        return key($this->data) !== null;
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        echo ' '  .__METHOD__ .  '  ';
        reset($this->data);
    }
}