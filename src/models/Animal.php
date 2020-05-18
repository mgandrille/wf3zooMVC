<?php

class Animal {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $species;

    /**
     * @var string
     */
    private $country;

    /**
     * Nom de la table en BDD
     * On le met en public car il n'a pas besoin d'avoir de Getter (en effet la donnée est écrite en "dur")
     * 
     * @var string
     */
    public $tableName = "Animal";

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecies() : string
    {
        return $this->species;
    }

        /**
     * @param int $species
     * @return self
     */
    public function setSpecies($species) : self
    {
        $this->species = $species;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }

    /**
     * @param int $country
     * @return self
     */
    public function setCountry($country) : self
    {
        $this->country = $country;
        return $this;
    }

}

