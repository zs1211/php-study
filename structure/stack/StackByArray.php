<?php
 class StackByArray{

     private $storage = [];

     private $length = 0;

     public function __construct()
     {

     }

     public function push($data)
     {
         $this->storage[$this->length] = $data;
         $this->length++;
     }

     public function pop()
     {
         if($this->isEmpty()) {
             return false;
         }
         $data = $this->storage[$this->length - 1];
         unset($this->storage[$this->length - 1]);
         return $data;
     }

     public function isEmpty()
     {
         return $this->length >0;
     }

     public function size()
     {
         return $this->length;
     }
 }