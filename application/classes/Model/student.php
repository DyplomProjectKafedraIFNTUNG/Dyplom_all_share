<?php defined('SYSPATH') or die('No direct script access.');
class Model_Student extends Model_Common
 {

    function getStudentByOffset($offset = 0, $limit = 11)
    {
      $stmt = $this->_db->prepare("CALL getAllStudentsByLimit($limit, $offset)");
        $stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;        
        
    }
    
    function getStudent(){
        $stmt = $this->_db->prepare("CALL getAllStudents()");
        $stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
	
	function getStudentById($id){
		$stmt = $this->_db->prepare("CALL getStudentById($id)");
        $stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;		
	}
	function removeStudent($id)
	{
	$stmt = $this->_db->prepare("CALL removeStudent($id)");
    return $stmt->execute();
	}
	function addStudent(
	$groupId,
	$surname,
	$name,	
	$patronim,
	$zalik1,
	$phone,
	$passport,
	$surname2,
	$zalik2,
	$photo)
	{
	
/*
VALUES	(add_id,1, val_surname),
		(add_id,2, val_name),
		(add_id,3, val_patronim),
		(add_id,4, val_zalik1),
		(add_id,5, val_phone),
		(add_id,6, val_passp),
		(add_id,7, val_surname2),
		(add_id,8, val_zalik2),
		(add_id,9, val_photo);
*/

	$stmt = $this->_db->prepare("CALL addStudent($groupId,'$surname','$name','$patronim','$zalik1','$phone','$passport','$surname2','$zalik2','$photo')");
	$stmt->execute();	
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	return $result['add_id'];
	}
}

?>