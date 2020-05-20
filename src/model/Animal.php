<?php
namespace App\Model;

class Animal extends AbstractModel {

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
     * Retourne la liste des animaux en BDD
     * 
     * @return array $dataAsObjects
     */
    public static function findAll() {
        
        $bdd = self::getPdo();

        $query = "SELECT * FROM animal";
        $response = $bdd->prepare($query);
        $response->execute();

        $data = $response->fetchAll();

        // On prépare le tableau qui contiendra nos animaux en format Object
        $dataAsObjects = [];

        // On fait un foreach de $data (données de la bdd) pour transformer chaque data en un object
        // puis on met l'object dans le tableau $dataAsObjects
        foreach($data as $d) {
            $dataAsObjects[] = self::toObject($d);
        }

        return $dataAsObjects;
    }

    /**
     * Transforme un array de données de la table Animal en un objet Animal
     * 
     * @return object $animal
     */
    public static function toObject($array) {

        $animal = new Animal;
        $animal->setId($array['id']);
        $animal->setSpecies($array['species']);
        $animal->setCountry($array['country']);

        return $animal;
    }

    public static function createAnimal() {
        $bdd = self::getPdo();

        $query =   "INSERT INTO animal (species, country)
                    VALUES (:species, :country)";
        $response = $bdd->prepare($query);
        $response->execute([
            'species' => $_POST['species'],
            'country' => $_POST['country']
        ]);
    }

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

