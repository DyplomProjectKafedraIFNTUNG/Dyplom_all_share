<?php

class Model_Teacher extends Model_Common {

    
    function removeTeacher($tid)
    {
        $stmt = $this->_db->prepare("CALL removeTeacher($tid)");
        $stmt->execute();
        
    }
    
    function getTeacherByLimit($offset = 0,$limit = 10 )
    {
      $stmt = $this->_db->prepare("CALL getAllTeachersByLimit($limit,$offset)");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;  
        
    }
    
    function getTeacher() {
        $stmt = $this->_db->prepare("CALL getAllTeachers()");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getTeacherById($id) {
        $stmt = $this->_db->prepare("CALL getTeacherById($id)");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
	}

    public function getAllTeachersForSelect() {
        $result = $this->getTeacher();
        $prepared = array();
        foreach ($result as $t) {
            $prepared[$t['id']] = $t['surname'] . " " . $t['name'] . " " . $t['patronimic'];
        }

        return $prepared;
    }

    public function addTeacher($kid, $name, $surname, $patronim, $posada, $phone, $passport, $surname2, $phn_num2, $photo) {
        $stmt = $this->_db->prepare("CALL addTeacher(
            '$kid',
            '$name',
            '$surname',
                '$patronim',
                    '$posada',
                        '$phone',
                            '$passport',
                                '$surname2',
                                    '$phn_num2',
                                        '$photo')");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['add_id'];
    }
    
    public function updateTeacher($id, $kid, $name, $surname, $patronimic, $posada, $mobPhn, $passport, $surname2, $mobPhn2, $img)
    {
        
          $stmt = $this->_db->prepare("CALL updateTeacher(
              '$id',
            '$kid',
                '$surname',
            '$name',            
                '$patronimic',
                    '$posada',
                        '$mobPhn',
                            '$passport',
                                '$surname2',
                                    '$mobPhn2',
                                        '$img')");
        $stmt->execute(); 
      
        
    }

}

