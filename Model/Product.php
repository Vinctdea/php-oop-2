<?php

require_once __DIR__ . '/Category.php';

class Product {

    protected $name;
    protected $description;
    protected $price;
    protected $category;

    function __construct(string $_name, string $_description, float $_price, Category $_category){
        $this->setName($_name);
        $this->setDescription($_description);
        $this->setPrice($_price);
        $this->setCategory($_category);
    }

    // Getter per il nome
    public function getName() {
        return $this->name;
    }

    // Setter per il nome
    public function setName($_name) {

        // Verificare che il nome non sia vuoto
        if(empty($_name)){
            throw new Exception('Il nome del prodotto non può essere vuoto!');
        }
        
        $this->name = $_name;
    }
    
    // Getter e Setter per description
    public function getDescription() {
        return $this->description;
    }
    
    public function setDescription($_description) {
        $this->description = $_description;
    }
    
    // Getter e Setter per price
    public function getPrice() {
        return $this->price;
    }
    
    public function setPrice($_price) {
        
        // Verificare che il nome non sia vuoto
        if ($_price <= 0) {
            throw new Exception("Il prezzo deve essere un valore positivo.");
        }


        $this->price = $_price;
    }

    // Getter e Setter per category
    public function getCategory() {
        return $this->category;
    }

    public function setCategory($_category) {
        $this->category = $_category;
    }

}