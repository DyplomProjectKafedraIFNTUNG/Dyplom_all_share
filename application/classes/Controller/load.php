<?php

class Controller_Load extends Controller_Common {

    protected $_model;

    public function __construct($req, $res) {
        parent::__construct($req, $res);
        $this->_model = new Model_Load();
    }

    public function action_index() {
        $content = View::factory('/pages/load/index');
        $this->template->content = $content;
    }
    
    public function action_getPersonalTeacherLoad()
    {
        //getPersonalTeacherLoad
             $content = View::factory('/pages/load/personalTeacherLoad/get-personal-teacher-load');
        $teacherModel = new Model_Teacher();
        $teachers = $teacherModel->getAllTeachersForSelect();
        $content->teachers = $teachers;
        $this->template->content = $content;
    }
    
    public function action_getPersonalTeacherLoadView()
    {
     var_dump($_POST);
        $tid = $_POST['tid'];
        $dateStart = $_POST['date1'];
        $dateEnd = $_POST['date2'];
        $load = $this->_model->getPersonalTeacherLoad($tid, $dateStart, $dateEnd);
        $content = View::factory('/pages/load/personalTeacherLoad/view');
        //$content->columns = $this->_model->getMainTeacherLoadColumns($load);
        $content->load = $load;
        $this->template->content = $content;
    }

    public function action_getMainTeacherLoad() {
        $content = View::factory('/pages/load/mainTeacherLoad/get-main-teacher-load');
        $teacherModel = new Model_Teacher();
        $teachers = $teacherModel->getAllTeachersForSelect();
        $content->teachers = $teachers;
        $this->template->content = $content;
    }

    public function action_getTimesheet() {
        $content = View::factory('/pages/load/time-sheet');
        $kafedraModel = new Model_Kafedra();
        $kafedras = $kafedraModel->prepareForSelect($kafedraModel->getAllKafedra());
        $content->kafedras = $kafedras;
        $this->template->content = $content;
    }

    public function action_getMainTeacherLoadview() {
        var_dump($_POST);
        $tid = $_POST['tid'];
        $dateStart = $_POST['date1'];
        $dateEnd = $_POST['date2'];
        $load = $this->_model->getMainTeacherLoad($tid, $dateStart, $dateEnd);

        $content = View::factory('/pages/load/mainTeacherLoad/view');
        $content->columns = $this->_model->getMainTeacherLoadColumns($load);
        $content->load = $load;
        $this->template->content = $content;
    }

    public function action_getTimesheetView() {
        var_dump($_POST);
        $kid = $_POST['kid'];
        $sfid = $_POST['sfid'];
        $dateStart = $_POST['date1'];
        $dateEnd = $_POST['date2'];
        $content = View::factory('/pages/load/timesheet/view');
        $load = $this->_model->getTimesheetBySemestr($kid, $sfid, $dateStart, $dateEnd);
        $content->load = $load;
        $content->form = $this->_model->getForma($sfid);
        $content->semestr = $this->_getSemestr($dateStart, $dateEnd);
        //$content->columns = $this->_model->getTimesheetLoadColumns();
        $this->template->content = $content;
    }

    protected function _getSemestr($dateStart, $dateEnd) {
        $dateFormat = 'Y-m-d';
        $str = "з ";
        $date = new DateTime($dateStart);
        $str .= $date->format($dateFormat);
        $str .=" до ";
        $date = new DateTime($dateEnd);
        $str .= $date->format($dateFormat);
        return $str;
    }

}