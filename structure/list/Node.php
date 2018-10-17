<?php
/**
 * Created by PhpStorm.
 * User: zs
 * Date: 18-10-17
 * Time: 下午3:01
 */
class Node {
    public $data;
    public $next;

    /**
     * Node constructor.
     * @param String $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
}

class SingleList{
    private $head = null;
    private $length = 0;


    public function printNode()
    {
        echo PHP_EOL ;
        if($this->head == null){
            echo 'empty List';
        }

        $currentNode = $this->head;

        while($currentNode !== null){
            echo $currentNode->data . '->';
            $currentNode = $currentNode->next;
        }

        echo 'null';
        echo PHP_EOL ;
    }
    /**
     * 单链表插入
     * @param $data
     * @return bool
     */
    public function insert($data)
    {
        $node = new Node($data);

        if($this->head == null) {
            $this->head = $node;
            $this->length++;
            return true;
        }

        $currentNode = $this->head;
        while ($currentNode->next  !== null) {
            $currentNode = $currentNode->next;
        }
        $currentNode->next = $node;
        $this->length ++;
        return true;
    }

    /**
     * 在ord值前插入$data
     * @param $data
     * @param $ord
     * @return bool
     */
    public function insertBefore($data, $ord)
    {
        if($this->head == null){
            return false;
        }

        $find = false;
        $beforeNode = null;
        $currentNode = $this->head;
        while($currentNode->next !== null) {
            if($currentNode->data == $ord) {
                $find = true;
                break;
            }
            $beforeNode = $currentNode;
            $currentNode = $currentNode->next;
        }

        if(!$find) {
            return false;
        }

        $node = new Node($data);
        if ($beforeNode !== null) {
            $beforeNode->next = $node;
        } else{
            $this->head = $node;
        }
        $node->next = $currentNode;
        $this->length++;
        return true;
    }

    /**
     * 在目标元素之后插入data
     * @param $data
     * @param $ord
     * @return bool
     */
    public function insertAfter($data, $ord)
    {
        if($this->head == null){
            return false;
        }
        $find = false;
        $currentNode = $this->head;
        while($currentNode->next !== null) {
            if($currentNode->data == $ord) {
                $find = true;
                break;
            }
            $currentNode = $currentNode->next;
        }
        if(!$find) return false;
        $node = new Node($data);
        $nextNode = $currentNode->next;
        $currentNode->next = $node;
        $node->next = $nextNode;
        $this->length++;
        return true;
    }

    /**
     * 链表首部插入元素
     * @param $data
     */
    public function insertAtFirst($data)
    {
        $node = new Node($data);

        $currentNode = null;
        if($this->head !== null) {
            $currentNode = $this->head;
        }
        $this->head = $node;
        $node->next = $currentNode;
        $this->length++;
    }

    /**
     * 链表中搜索元素
     * @param $ord
     * @return bool
     */
    public function search($ord)
    {
        if($this->head == null){
            return false;
        }
        $currentNode = $this->head;
        while($currentNode->next !== null) {
            if($currentNode->data == $ord) {
               return $currentNode;
            }
            $currentNode = $currentNode->next;
        }
        return false;
    }


    /**
     * 删除首部元素
     * @return bool
     */
    public function deleteFirst()
    {
        if($this->head == null){
            return false;
        }
        $currentNode = $this->head->next;
        $this->head->next = null;
        $this->head = $currentNode;
        $this->length--;
        return true;
    }

    /**
     *
     */
    public function deleteLast()
    {
        if($this->head == null){
            return false;
        }
        $pos = 1;
        $currentNode = $this->head;
        while($currentNode->next !== null) {
            if($pos == $this->length -1) {
                $currentNode->next = null;
                $this->length--;
                return true;
            }
            $pos ++;
            $currentNode = $currentNode->next;
        }
        return false;
    }

    /**
     * 翻转链表
     * @return bool
     */
    public function reverse()
    {
        if($this->head == null) {
            return false;
        }
        $currentNode = $this->head;
        $lastNode = null;
        while( $currentNode->next !== null) {
            $tempNode = $currentNode->next;
            $currentNode->next = $lastNode;
            $lastNode = $currentNode;
            $currentNode = $tempNode;
        }
        //最后一个节点还没放上来 因为最后一个节点的next为null 没有进入循环
        $this->head = $currentNode;
        $currentNode->next = $lastNode;
        return true;
    }

    public function delete($ord)
    {
        if($this->head == null){
            return false;
        }
        $currentNode = $this->head;
        $lastNode = null;
        $find = false;
        while($currentNode->next !== null) {
            if($currentNode->data == $ord) {
                $find = true;
               break;
            }
            $lastNode = $currentNode;
            $currentNode = $currentNode->next;
        }

        if(!$find){
            return false;
        }

        if(!$lastNode) {
            $this->head = $currentNode->next;
            return true;
        }
        $lastNode->next = $currentNode->next;
        return true;
    }
}

