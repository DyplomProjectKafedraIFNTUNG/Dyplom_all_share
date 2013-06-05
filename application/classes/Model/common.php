<?php

class Model_Common extends Model{
       protected $_tableFaculties = 'faculties'; 
    protected $_db;
    const DB_HN = "mysql:host=localhost;dbname=dyplom_kafedra_calculation";
    const DB_USER = "root";
    const DB_PASS = "vertrigo";
    function __construct(){
            try{
			$this->_db = new PDO(self::DB_HN,self::DB_USER,self::DB_PASS);
			$this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->_db->query("SET NAMES utf8");

			}catch(PDOException $e){
                    echo $e->getMessage();
            }
            return $this->_db;
    }
    
     public function getForma($sfid)
    {
        switch($sfid)
        {
            case 1: return "Денна"; break;
            case 2: return "Заочна"; break;
        }
    }
}

