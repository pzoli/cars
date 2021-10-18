<?php
namespace app\Models;
use App\Utils\PDODBUtility;

class Car
{
    protected $id;
    protected $model_id;
    protected $chassis_number;
    
    public function __construct($data) {
        //$this->model_id = $data->model_id;
        //$this->chassis_number = $data->chassis_number;
    }
    
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
    public function getModelId()
    {
        return $this->model_id;
    }

    /**
     * @return mixed
     */
    public function getChassisNumber()
    {
        return $this->chassis_number;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $modelId
     */
    public function setModelId($model_id)
    {
        $this->model_id = $model_id;
    }

    /**
     * @param mixed $chassisNumber
     */
    public function setChassisNumber($chassis_number)
    {
        $this->chassis_number = $chassis_number;
    }

    // CRUD OPERATIONS
    public static function create(object $data)
    {
        $pdo = PDODBUtility::getInstance();
        $pdo->exec("insert into car (model_id, chassis_number) values (:model_id, :chassis_number)", (array)$data);
    }

    public static function readAll()
    {
        $pdo = PDODBUtility::getInstance();
        $cars = $pdo->findAll("car");
        $pdo = null;
        return $cars;
       
    }
    
    public static function read(int $id)
    {
        $pdo = PDODBUtility::getInstance();
        $car = $pdo->findById($id, "car");
        $pdo = null;
        return $car;
    }
    
    public static function update(int $id, array $data)
    {
        
    }
    
    public static function delete(int $id)
    {
        
    }
    
}

