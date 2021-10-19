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
        $cars = $pdo->exec("select m.*, f.name as manufacturer_name from model m join manufacturer f on m.manufacturer_id = f.id", null);
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

