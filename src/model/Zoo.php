<?php
namespace App\Model;

class Zoo extends AbstractModel {

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

        /**
     * Retourne la liste des zoo en BDD
     * 
     * @return array $dataAsObjects
     */
    public static function findAll() {
        
        $bdd = self::getPdo();

        $query = "SELECT * FROM zoo";
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
     * Transforme un array de données de la table Zoo en un objet zoo
     * 
     * @return object $zoo
     */
    public static function toObject($array) {

        $zoo = new Zoo;
        $zoo->setId($array['id']);
        $zoo->setName($array['name']);
        $zoo->setCity($array['city']);

        return $zoo;
    }

    public static function createZoo() {
        $bdd = self::getPdo();

        $query =   "INSERT INTO zoo (name, city)
                    VALUES (:name, :city)";
        $response = $bdd->prepare($query);
        $response->execute([
            'name' => $_POST['name'],
            'city' => $_POST['city']
        ]);
    }

    

}