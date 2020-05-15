<?php

class Animal {
    public $id;
    public $species;
    public $country;

    public function getId() {
        return $this->id;
    }

    public function getSpecies() {
        return $this->species;
    }

    public function getCountry() {
        return $this->country;
    }
}