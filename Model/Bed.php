<?php

require_once __DIR__ . '/Product.php';

class Bed extends Product {
    protected $size;

    function __construct(string $_name, string $_description, float $_price, Category $_category, string $_size) {
        parent::__construct($_name, $_description, $_price, $_category);
        $this->setSize($_size);
    }

    // Getter e Setter per size
    public function getSize(){
        return $this->size;
    }

    public function setSize($_size){
        $this->size = $_size;
    }

}
