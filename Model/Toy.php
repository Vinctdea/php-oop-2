<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product {
    protected $material; 

    function __construct(string $_name, string $_description, float $_price, Category $_category, string $_material) {
        parent::__construct($_name, $_description, $_price, $_category);
        $this->setMaterial($_material);
    }

    // Getter e Setter del material 
    public function getMaterial(){
        return $this->material;
    }

    public function setMaterial($_material){
        $this->material = $_material;
    }

}
