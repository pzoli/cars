<?php
namespace app\Models;
use App\Utils\PDODBUtility;

class Model
{
    protected $id;
    protected $name;
    protected $manufacturer_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getManufacturerId()
    {
        return $this->manufacturer_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $manufacturer_id
     */
    public function setManufacturerId($manufacturer_id)
    {
        $this->manufacturer_id = $manufacturer_id;
    }

    public static function create(object $data)
    {
        $pdo = PDODBUtility::getInstance();
        $pdo->exec("insert into model (name, manufacturer_id) values (:name, :manufacturer_id)", (array)$data);
    }
    
    public static function readAll()
    {
        $pdo = PDODBUtility::getInstance();
        $models = $pdo->exec("select m.*, f.name as manufacturer_name from model m join manufacturer f on m.manufacturer_id = f.id", null);
        return $models;
       
    }
    
    public static function read(int $id)
    {
        $pdo = PDODBUtility::getInstance();
        $model = $pdo->findById($id, "model");
        return $model;
    }
    
    public static function update(object $data)
    {
        $pdo = PDODBUtility::getInstance();
        $pdo->exec("update model set manufacturer_id = :manufacturer_id, name = :name where id = :id", (array)$data);
    }
    
    public static function delete(int $id)
    {
        $pdo = PDODBUtility::getInstance();
        $pdo->exec("delete from model where id = :id", array("id" => $id));
    }
    
    public static function findModelByNameFilter($pattern) {
        $pdo = PDODBUtility::getInstance();
        $models = $pdo->exec("select m.*, f.name as manufacturer_name from model m join manufacturer f on m.manufacturer_id = f.id where concat(f.name, ' ', m.name) like :pattern", ["pattern"=>"%".$pattern."%"]);
        return $models;
        
    }
    
}

