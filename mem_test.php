<?php

include "mem.php";
include "dvd_titles.php";

function TestConstructor(){
    //arrange
    $t0 = new DvdTitle();

    // and act
    $memP = new Mem($t0);
    print_r($memP);
    //assert
    if ($memP->Count() != 1){
        die("TestConstructor FAILED");
    }
    echo "TestConstructor OK". PHP_EOL;
}
TestConstructor();