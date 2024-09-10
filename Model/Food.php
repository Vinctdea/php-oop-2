<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    protected $dietType; 

    function __construct(string $_name, string $_description, float $_price, Category $_category, string $_dietType) {
        parent::__construct($_name, $_description, $_price, $_category);
        $this->setDietType($_dietType);
    }

    // Getter e Setter del dietTipe
    public function getDietType(){
        return $this->dietType;
    }

    public function setDietType($_dietType){
        $this->dietType = $_dietType;
    }
}

