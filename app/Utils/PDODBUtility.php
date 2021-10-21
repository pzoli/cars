<?php
namespace App\Utils;
use PDO;

class PDODBUtility extends Singleton
{
    
    protected $conn;
    
    public function __construct() {
        parent::__construct();
        $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER , DB_PASS);
    }
    
    public function __destruct(){
        $this->conn = null;
    }
    
    public function exec($sql,$params) {
        $stmt = $this->conn->prepare($sql);
        //var_dump($sql);
        //var_dump($params);
        $res = $stmt->execute($params);
        if (!$res) {
            die("SQL exception!");
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $stmt = null;
        return $rows;
    }
    
    public function findById($id,$class) {
        $sql = "select * from $class where id = :id";
        //var_dump($sql);
        
        $stmt = $this->conn->prepare($sql);
        $res = $stmt->execute(array(':id'=>$id));
        if (!$res) {
            die("sql exception! ".$this->conn->errorInfo());
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $stmt = null;
        return count($rows)==1 ? $rows[0] : null;
    }
    
    public function findAll($class) {
        $sql = "select * from $class";
        //var_dump($sql);
        $stmt = $this->conn->prepare($sql);
        $res = $stmt->execute();
        if (!$res) {
            die("sql exception! ".$this->conn->errorInfo());
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $stmt = null;
        return $rows;
    }
    
}

