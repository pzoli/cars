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

    public static function readAll()
    {
        $pdo = PDODBUtility::getInstance();
        $cars = $pdo->findAll("manufacturer");
        return $cars;
       
    }
    
    public static function read(int $id)
    {
        $pdo = PDODBUtility::getInstance();
        $car = $pdo->findById($id, "manufacturer");
        return $car;
    }
    
    public static function update(int $id, array $data)
    {
        
    }
    
    public static function delete(int $id)
    {
        
    }
    
}

