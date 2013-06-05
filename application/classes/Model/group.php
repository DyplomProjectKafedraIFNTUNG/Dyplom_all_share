<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Group extends Model_Common
{
	function removeStudent($id)
	{
	$stmt = $this->_db->prepare("CALL removeStudent($id)");
    return $stmt->execute();
	}
	public function addGroup($kid, $sfid,$name, $descr)
	{
	//CREATE PROCEDURE addGroupOfStudents(kid INT(2), sfid INT(2), name VARCHAR(255), cnt INT(2), descript TEXT)
	$stmt = $this->_db->prepare("CALL addGroupOfStudents($kid,$sfid,'$name',NULL, '$descr')");
    $stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	return $result['add_id'];
        }
	
	public function getGroupById($id){
	$groups = $this->getGroups();
	foreach($groups as $group)
	{
	if($group['id'] == $id) return $group;
	}
	return NULL;
	}
	   public function getGroups(){
        $stmt = $this->_db->prepare("CALL getAllGroupsOfStudents()");
        $stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
	public function getStudentsByGroup($id)
	{
	$stmt = $this->_db->prepare("CALL getStudentsByGroup($id)");
        $stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
	}
	
	public function removeGroup($id)
	{
	return true;
	$stmt = $this->_db->prepare("CALL removeGroupOfStudents($id)");
     return $stmt->execute();
	}
	
	public function getStudyForms()
	{
	return array(1 => "Денна",
	2=>"Заочна");
	}
	
	//CREATE PROCEDURE updateGroupOfStudents(idn INT(2), kid INT(2), sfid INT(2), name VARCHAR(255), cnt INT(2), descript TEXT)
	public function updateGroupOfStudents($id,$kid,$sfid,$name)
	{
	var_dump($id,$kid,$sfid,$name);
	$stmt = $this->_db->prepare("CALL updateGroupOfStudents($id, $kid, $sfid, '$name', NULL, NULL)");
       return $stmt->execute();
	}
	
	
	
	
	
}