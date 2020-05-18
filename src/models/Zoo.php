<?php

class Zoo {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $city;

    /**
     * Nom de la table en BDD
     * On le met en public car il n'a pas besoin d'avoir de Getter (en effet la donnée est écrite en "dur")
     * 
     * @var string
     */
    public $tableName = "Zoo";

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
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param int $name
     * @return self
     */
    public function setName($name) : self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @param int $city
     * @return self
     */
    public function setCity($city) : self
    {
        $this->city = $city;
        return $this;
    }

}