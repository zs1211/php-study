<?php

require '../list/Node.php';
class StackList {

    private $storage;

    private $length;

    public function __construct() {
        $this->storage = new SingleList();
        $this->length = 0;
    }

    public function push($data)
    {
        $this->storage->insert($data);
    }

    public function pop()
    {
        return $this->storage->deleteLast();
    }

    public function isEmpty()
    {
        return $this->storage->size() > 0;
    }

    public function size()
    {
        return $this->storage->size();
    }
}

