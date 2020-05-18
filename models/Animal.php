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
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecies() {
        return $this->species;
    }

        /**
     * @param int $species
     * @return self
     */
    public function setSpecies($species) {
        $this->species = $species;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * @param int $country
     * @return self
     */
    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

}

$simba = new Animal;
$simba->getSpecies();