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