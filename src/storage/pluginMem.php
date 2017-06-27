<?php
require "storageinterface.php";
/**
 * Created by PhpStorm.
 * User: brie
 * Date: 6/26/17
 * Time: 6:25 PM
 */
class pluginMem implements storageinterface
{
    protected $buf; //array

    public function __construct()
    {
        $this->buf = [];
    }

    public function Count()
    {
        return sizeof($this->buf);
    }

    public function Create($item)
    {
        $this->buf[] = $item;
    }
    public function Read($id)  // $id is offset or index
    {
        return $this->buf[$id];
    }
    public function ReadAll()
    {
        return $this->buf;
    }
    public function Update($id, $values)
    {
        $this->buf[$id] = $values;
    }
    public function Delete($id)
    {
        unset($this->buf[$id]);
    }
}
