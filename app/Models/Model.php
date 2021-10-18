<?php
namespace app\Models;
use App\Utils\PDODBUtility;

class Model
{
    protected $id;
    protected $name;
    protected $manufacturer_id;

    public static function readAll()
    {
        $pdo = PDODBUtility::getInstance();
        $cars = $pdo->findAll("model");
        return $cars;
       
    }
    
    public static function read(int $id)
    {
        $pdo = PDODBUtility::getInstance();
        $car = $pdo->findById($id, "model");
        return $car;
    }
    
    public static function update(int $id, array $data)
    {
        
    }
    
    public static function delete(int $id)
    {
        
    }
    
}

