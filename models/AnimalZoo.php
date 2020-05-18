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
    public function getAnimalId() {
        return $this->animalId;
    }

    /**
     * @param int $animalId
     * @return self
     */
    public function setAnimalId($animalId) {
        $this->animalId = $animalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getZooId() {
        return $this->zooId;
    }

    /**
     * @param int $zooId
     * @return self
     */
    public function setZooId($zooId) {
        $this->zooId = $zooId;
        return $this;
    }

}