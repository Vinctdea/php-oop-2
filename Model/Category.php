<?php

class Category
{
    private $name;
    private $description;
    private $furLength;
    private $size;

    function __construct(string $_name, string $_description, string $_furLength = null, string $_size = null)
    {
        $this->setName($_name);
        $this->setDescription($_description);
        $this->setFurLength($_furLength);
        $this->setSize($_size);
    }

    // Getter e Setter name 
    public function getName()
    {
        return $this->name;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    // Getter e Setter description 
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($_description)
    {
        $this->description = $_description;
    }

    // Getter e Setter furLength 
    public function getFurLength()
    {
        return $this->furLength;
    }

    public function setFurLength($_furLength)
    {

        // Array delle lugnghezze valide
        $validLengths = ["Pelo Corto", "Pelo Lungo", "Pelo Medio"];

        // controlla che la lunghezza non sia null e appartenga all'array delle lunghezze valide
        if ($_furLength !== null && !in_array($_furLength, $validLengths)) {
            throw new Exception("Lunghezza del pelo non valida!");
        }

        $this->furLength = $_furLength;
    }

    // Getter e Setter size
    public function getSize()
    {
        return $this->size;
    }

    public function setSize($_size)
    {
        $this->size = $_size;
    }
}
