<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Teacher extends Controller_Common {

    protected $_model;

    public function __construct($req, $res) {
        parent::__construct($req, $res);
        $this->_model = new Model_Teacher();
    }

    public function action_create() {
        $method = $this->request->method();
        if ("POST" === $method) {

            $filename = NULL;
            //var_dump($_POST);

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $patronim = $_POST['patronim'];
            $posada = $_POST['posada'];
            $phone = $_POST['phone'];
            $passp = $_POST['passp'];
            $kid = $_POST['kid'];

            $id = $this->_model->addTeacher(
                    $kid, $name, $surname, $patronim, $posada, $phone, $passp, NULL, NULL, NULL);
            if (isset($_FILES['pic'])) {
                $filename = $this->_save_image($_FILES['pic'], $id, 'teacher');
            }
            $pic = $filename;

            if (!$filename) {
                $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
            }
            $this->_redirect("teachers");
        } else {
            $content = View::factory('/admin/teacher/teacher-create');
            $modelKafedra = new Model_Kafedra();
            $kafedras = $modelKafedra->prepareForSelect($modelKafedra->getAllKafedra());
            $content->kafedras = $kafedras;
            $this->template->content = $content;
        }
    }

    // Сторінка Викладачі    
    public function action_teachers() {

        $total_items = count($this->_model->getTeacher());
        $pagination = Pagination::factory(array(
                    'total_items' => $total_items,
                    'items_per_page' => 11,
                        )
        );

        // Pass controller and action names explicitly to $pagination object
        $pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action()));
        // Get data

        $teachers = $this->_model->getTeacherByLimit($pagination->offset, $pagination->items_per_page);
        //var_dump($teachers);
// Pass data and validation object to view
        $content = View::factory('pages/teacher');
        $content->pagination = $pagination;
        $content->teachers = $teachers;
        $content->roles = $this->_roles;
        $this->template->content = $content;
    }

    public function action_tinfo() {
        $db = new Model_Teacher();
        $id = $this->request->param('id');
        $teacher = $db->getTeacherById($id);
        $content = View::factory('/pages/tinfo');
        $content->teacher = $teacher;
        $content->roles = $this->_roles;
        $this->template->content = $content;
    }
	

    public function action_delete() {
        $id = $this->request->param('id');
        $this->_model->removeTeacher($id);
        $this->_redirect("teachers");
    }
    
    public function action_edit()
    {
             $id = $this->request->param('id');

        $method = $this->request->method();
        if ($method == "POST") {
            //update        
            var_dump($_POST);
            if (isset($_FILES['img'])) {
               $filename = $this->_save_image($_FILES['img'], $id, 'teacher');
            }
            
            $kid = $_POST['kid'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $patronimic = $_POST['patronimic'];
            $posada = $_POST['posada'];
            $mobPhn = $_POST['mobPhn'];
            $passport = $_POST['passport'];
            $surname2 = $_POST['surname2'];
            $mobPhn2 = $_POST['mobPhn2'];
            $img = $filename;
            $this->_model->updateTeacher($id,$kid,$name,$surname,$patronimic,$posada,$mobPhn,$passport,$surname2,$mobPhn2,$img);
            $this->_redirect('teachers');
        } else {
            //view form
            $content = View::factory('/admin/teacher/edit');
            $teacher = $this->_model->getTeacherById($id);
            $model_Kafedra = new Model_Kafedra;
            $kafedra = $model_Kafedra->prepareForSelect($model_Kafedra->getAllKafedra());
            $content->teacher = $teacher;
            $content->kafedra = $kafedra;
            $content->id = $id;
           $this->template->content = $content;
        }        
    }

}

// End Teacher

