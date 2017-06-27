<?php

/**
 * Created by PhpStorm.
 * User: brie
 * Date: 6/26/17
 * Time: 6:27 PM
 */
interface storageinterface
{
    public function Count();
    public function Create($item);
    public function Read($id);
    public function ReadAll();
    public function Update($id, $values);
    public function Delete($id);
}