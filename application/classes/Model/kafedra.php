<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Kafedra extends Model_Common
{
	public function getAllKafedrasFromFaculty($id)
	{
	$stmt = $this->_db->prepare("CALL getAllKafedrasFromFaculty($id)");
       $stmt->execute();
        $kafedras = $stmt->fetchAll();
		return $kafedras;		
	
	}
	
	//CREATE PROCEDURE updateKafedra(idn INT(2), fid INT(2), name VARCHAR(255), pic VARCHAR(255), descript TEXT)

	public function updateKafedra($id,$facultyId,$name,$pic, $descr)
	{
		$stmt = $this->_db->prepare("CALL updateKafedra($id,'$facultyId','$name','$pic', '$descr')");
        $result = $stmt->execute();
        return $result;	
	}
	
	public function getKafedraById($id)
	{
		$stmt = $this->_db->prepare("CALL getKafedraById($id)");
        $stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;	
	}
	
	public function getAllKafedra()
	{	
	$stmt = $this->_db->prepare("CALL getAllKafedra()");
	$stmt->execute();
	$result = $stmt->fetchAll();
	return $result;
	}
	
	public function prepareForSelect($values)
	{
	
$forSelect = array();
foreach($values as $k => $value)
{
$forSelect[$value['id']] = $value['kname'];
}

return $forSelect;	
}
	
	public function addKafedra($fid, $name,$pic,$description)
	{
	$stmt = $this->_db->prepare("CALL addKafedra('$fid','$name', '$pic', '$description')");
	$stmt->execute();	
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	return $result['add_id'];
	}	
	
	public function removeKafedra($id)
	{
	$stmt = $this->_db->prepare("CALL removeKafedra($id)");
       return $stmt->execute();
	}
}