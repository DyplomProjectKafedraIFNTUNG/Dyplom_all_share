<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Faculty extends Controller_Common {

    // Сторінка Факультети    
    public function action_faculty() {        
        
        $db = new Model_Faculty();
        $fac = $db->getFaculty();
        //var_dump($fac);
        $content = View::factory('/pages/faculty');
        $this->template->content = $content;

        $content->fac = $fac;
        $content->roles = $this->_roles;
    }

    public function action_finfo() {
        $db = new Model_Faculty();
        $id = $this->request->param('id');
        $faculty = $db->getFacultyById($id);
        $content = View::factory('/pages/finfo');
        $content->faculty = $faculty;
        $content->roles = $this->_roles;
        $this->template->content = $content;
    }

    public function action_create() {
        $method = $this->request->method();
        if ("POST" === $method) {
            $db = new Model_Faculty();
            $filename = NULL;
            //var_dump($_POST);
            $name = $_POST['name'];
            $descr = $_POST['descr'];
            $id = $db->addFaculty($name, NULL, $descr);
            if (isset($_FILES['pic'])) {
                var_dump($id);
                $filename = $this->_save_image($_FILES['pic'], $id, 'faculty');
            }
            $pic = $filename;
            $db->updateFaculty($id, $name, $pic, $descr);

            if (!$filename) {
                $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
            }
            $this->_redirect("faculty/faculty");
        } else {
            $content = View::factory('/admin/faculty/create');
            $this->template->content = $content;
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');
        $db = new Model_Faculty();
        $db->removeFaculty($id);
        $this->_redirect("faculty/faculty");
    }

    public function action_edit() {
        $id = $this->request->param('id');

        $hasAccess = Auth::instance()->logged_in('admin');
        if ($hasAccess) {
            $method = $this->request->method();
            var_dump($method);
            //die($method);
            if ("POST" === $method) {
                $db = new Model_Faculty();
                $filename = NULL;
                var_dump($_POST);
                if (isset($_FILES['pic'])) {
                    var_dump($filename);
                    $filename = $this->_save_image($_FILES['pic'], $id, 'faculty');
                }
                $name = $_POST['name'];
                $descr = $_POST['descr'];
                $pic = $filename;



                $db->updateFaculty($id, $name, $pic, $descr);

                if (!$filename) {
                    $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
                }
                $this->_redirect("faculty/finfo/$id");
            } else {
                $id = $this->request->param('id');
                $db = new Model_Faculty();
                $content = View::factory('/admin/faculty/edit');
                $faculty = $db->getFacultyById($id);
                //var_dump($fac);
                $content->faculty = $faculty;
                $content->id = $id;
                $this->template->content = $content;
            }
        } else {
            $this->_redirect("user/login");
        }
    }
}
// End Faculty

