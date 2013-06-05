<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Faculty extends Model_Common
{
    function getFaculty(){
        $stmt = $this->_db->prepare("CALL getAllFaculty()");
        $stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
	
	function getFacultyById($id)
	{
		$stmt = $this->_db->prepare("CALL getFacultyById($id)");
        $stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;	
	}
	
	function updateFaculty($id, $name,$pic, $descr)
	{
	//var_dump($id,$name,$pic,$descr);
	$stmt = $this->_db->prepare("CALL updateFaculty($id, '$name', '$pic', '$descr')");
       return $stmt->execute();
      
	}
	
	function removeFaculty($id)
	{
	$stmt = $this->_db->prepare("CALL removeFaculty($id)");
       return $stmt->execute();
	}
	
	function addFaculty($name, $pic, $descr)
	{
	$stmt = $this->_db->prepare("CALL addFaculty('$name', '$pic', '$descr')");
	$stmt->execute();	
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	return $result['add_id'];
	}
	
		public function _prepareForSelect($faculties)
	{
$facq = array();
foreach($faculties as $k => $fac)
{
//var_dump($fac['name']);
$facq[$fac['id']] = $fac['name'];
}
//var_dump($facq);
return $facq;	
}

}