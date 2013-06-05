<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Lessons extends Controller_Common {

	
 
    // Сторінка Предмети    
    public function action_lessons()
    {
		$content = View::factory('/pages/lessons');
		$content->roles = $this->_roles;
		$this->template->content = $content;
    }	

} // End Lessons


class Lessons {
	private $_db;
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
    function getLessons(){
        $stmt = $this->_db->prepare("CALL getAllLessons()");
        $stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
