<?php

include "persistence_interface.php";

class Mem implements PersistenceInterface {
    private $type; // type of object
    private $prototype;
    protected $buf;

    public function __construct($item = 0)
    {
        $this->type = gettype($item);
        $this->prototype = $item;
        $this->buf = $item;
    }

    public function Count(){
        return count($this->buf);
    }
    public function Create($item){
        $this->buf = $item;
    }
    public function Read($id){
        $target = $this->prototype->Search($id, $this->buf);
        return $target;
    }
    public function ReadAll(){
        return $this->buf;
    }
    public function Update($id, $values){
        $this->buf[$id] = $values;
    }
    public function Delete($id){
        unset($this->buf[$id]);
    }

    public function Clear(){
        unnset($this->buf);
    }

}