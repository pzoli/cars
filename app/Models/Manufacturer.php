<?php
namespace app\Models;
use App\Utils\PDODBUtility;

class Manufacturer
{
    protected $id;
    protected $name;
    
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

    public static function create(object $data)
    {
        $pdo = PDODBUtility::getInstance();
        $pdo->exec("insert into manufacturer (name) values (:name)", (array)$data);
    }
    
    public static function readAll()
    {
        $pdo = PDODBUtility::getInstance();
        $manufacturers = $pdo->findAll("manufacturer");
        return $manufacturers;
       
    }
    
    public static function read(int $id)
    {
        $pdo = PDODBUtility::getInstance();
        $manufacturer = $pdo->findById($id, "manufacturer");
        return $manufacturer;
    }
    
    public static function update(object $data)
    {
        $pdo = PDODBUtility::getInstance();
        $pdo->exec("update manufacturer set name = :name where id = :id", (array)$data);
    }
    
    public static function delete(int $id)
    {
        $pdo = PDODBUtility::getInstance();
        $pdo->exec("delete from manufacturer where id = :id", array("id" => $id));
    }

    public static function findModelByNameFilter($pattern) {
        $pdo = PDODBUtility::getInstance();
        $models = $pdo->exec("select * from manufacturer where name like :pattern", ["pattern"=>"%".$pattern."%"]);
        return $models;    
    }
    
}

