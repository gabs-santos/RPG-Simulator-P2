<?php

include_once("Item.php");

class Defesa extends Item 
{
    public function __construct($name) {
        parent::__construct($name, 4, "Defesa");
    }
}
