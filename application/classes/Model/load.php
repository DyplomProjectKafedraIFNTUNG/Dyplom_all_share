<?php

class Model_Load extends Model_Common{ 
    
    
     public function getPersonalTeacherLoad($tid, $dateStart, $dateEnd)
    {
        var_dump($tid,$dateStart, $dateEnd);
        $stmt = $this->_db->prepare("CALL getPersonalTeacherLoad('$tid','$dateStart', '$dateEnd')");
         //$stmt = $this->_db->prepare("CALL getMainTeacherLoad('1','2009-09-01', '2010-05-24')");        
        $stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;        
    }
    public function getMainTeacherLoad($tid, $dateStart, $dateEnd)
    {
        var_dump($tid,$dateStart, $dateEnd);
        $stmt = $this->_db->prepare("CALL getMainTeacherLoad('$tid','$dateStart', '$dateEnd')");
         //$stmt = $this->_db->prepare("CALL getMainTeacherLoad('1','2009-09-01', '2010-05-24')");        
        $stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;        
    }
    
    public function getTimesheetBySemestr($kid, $sfid, $date1,$date2)
    {
      $stmt = $this->_db->prepare("CALL getTimesheetBySemestr('$kid','$sfid','$date1', '$date2')");
         //$stmt = $this->_db->prepare("CALL getMainTeacherLoad('1','2009-09-01', '2010-05-24')");        
        $stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;     
        
    }
    
    public function getTeachersFinalLoadByKafedra()
    {
        $stmt = $this->_db->prepare("CALL getTeachersFinalLoadByKafedra");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function getTimesheetLoadColumns()
    {
        return array(
            "Предмет",
            "Група",
            "Підгрупа",
            "Курс",
            "Лектор",
            "Ауд.",
            "Лаб.",
            "Ауд.",
            "Пр.",
            "Ауд."     
        );
        
    }
    
    public function getMainTeacherLoadColumns($load)
    {
        //$oneRow = $load[0];
        //return array_keys($oneRow);
        return array(
            "Предмет",
            "Група",
            "Прізвище",
            "Імя",
            "По-батькові",
            "Початок",
            "Кінець",
            "Підгрупа",
            "К-сть студ",
            "Семестр",
            "Лекція",
            "Лабор",
            "Контр роб",
            "Практ роб",
            "Іспит",
            "Залік",
            "Консульт",
            "Курс роб",
            "Курс проект",
            "Іспит кал",
            "Залік кал",
            "Консульт кал",
            "Контр роб кал",
            "Курс роб кал",
            "КП кал",
            "Завант кал"
            
        );
    }
}