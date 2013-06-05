<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Groups extends Controller_Common {

    protected $_model;

    public function __construct($req, $res) {
        parent::__construct($req, $res);
        $this->_model = new Model_Group();
    }

    public function action_removeStudentFromGroup() {
        $id = $this->request->param('id');
        $this->_model->removeStudent($id);
        $this->_redirect("groups/view/");
    }

    // Сторінка Групи студентів    
    public function action_groups() {
        $content = View::factory('/pages/groups');
        $content->gr = $this->_model->getGroups();
        $content->roles = $this->_roles;
        $this->template->content = $content;
    }

    public function action_view() {
        $id = $this->request->param('id');
        var_dump($id);
        //stundents-group
        $content = View::factory('/pages/groups/students');
        $students = $this->_model->getStudentsByGroup($id);
        $group = $this->_model->getGroupById($id);
        $content->group = $group;
        $content->students = $students;
		$content->roles = $this->_roles;
        $this->template->content = $content;
    }

    public function action_delete() {
        $id = $this->request->param('id');
        $this->_model->removeGroup($id);
        $this->_redirect('groups');
    }

    public function action_edit() {
        $id = $this->request->param('id');

        $method = $this->request->method();
        if ($method == "POST") {
            //update 
            var_dump($_POST);

            $name = $_POST['name'];
            $sfid = $_POST['study_form_id'];
            $kid = $_POST['kafedra_id'];
            $this->_model->updateGroupOfStudents($id, $kid, $sfid, $name);
            $this->_redirect('groups');
        } else {
            //view form
            $content = View::factory('/admin/group/group-edit');
            $group = $this->_model->getGroupById($id);
            $study_form = $this->_model->getStudyForms();
            $model_Kafedra = new Model_Kafedra;
            $kafedra = $model_Kafedra->prepareForSelect($model_Kafedra->getAllKafedra());
            $content->study_form = $study_form;
            $content->kafedra = $kafedra;

            $content->group = $group;
            $this->template->content = $content;
        }
    }

    public function action_create() {
        $method = $this->request->method();
        if ("POST" === $method) {
            var_dump($_POST);

            $name = $_POST['name'];
            $descr = $_POST['descr'];
            $fid = $_POST['fid'];
            $kid = $_POST['kid'];
            $this->_model->addGroup($kid, $fid, $name, $descr);
            $this->_redirect("groups");
        } else {
            $content = View::factory('/admin/group/group-create');
            $faculty_Model = new Model_Faculty();
            $kafedra_Model = new Model_Kafedra();
            $faculties = $faculty_Model->getFaculty();
            $prepare = $faculty_Model->_prepareForSelect($faculties);
            reset($prepare);
            $firstFacultyId = key($prepare);
            $preparedKafedras = $kafedra_Model->prepareForSelect($kafedra_Model->getAllKafedrasFromFaculty($firstFacultyId));
            $content->faculties = $prepare;
            $content->kafedras = $preparedKafedras;
            $content->additional_js = html::script('public/js/loadKafedraForFacultyChange.js');

            $this->template->content = $content;
        }
    }

    public function action_getKafedra() {
        //if ($this->request->is_ajax())        {
        $fid = $this->request->param('fid');
        //var_dump($fid);
        $kafedraModel = new Model_Kafedra();
        $kafedras = $kafedraModel->prepareForSelect($kafedraModel->getAllKafedrasFromFaculty($fid));
        //var_dump($kafedras);
        $jsonArr = array();
        foreach ($kafedras as $key => $kaf) {
            $jsonArr[] = array('kid' => $key, 'name' => $kaf);
        }
        $json = json_encode($jsonArr);
        $this->request->headers('Content-type', 'application/json; charset=' . Kohana::$charset);
        $this->response->body($json);
        //}
    }

}