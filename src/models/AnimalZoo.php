<?php

class AnimalZoo {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $animalId;

    /**
     * @var string
     */
    private $zooId;

    /**
     * Nom de la table en BDD
     * On le met en public car il n'a pas besoin d'avoir de Getter (en effet la donnée est écrite en "dur")
     * 
     * @var string
     */
    public $tableName = "AnimalZoo";

    /**
     * @return int
     */
    public function getId() :int
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
    public function getAnimalId() : int
    {
        return $this->animalId;
    }

    /**
     * @param int $animalId
     * @return self
     */
    public function setAnimalId(int $animalId) : self   
    {
        $this->animalId = $animalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getZooId() : int
    {
        return $this->zooId;
    }

    /**
     * @param int $zooId
     * @return self
     */
    public function setZooId(int $zooId) : self 
    {
        $this->zooId = $zooId;
        return $this;
    }

}