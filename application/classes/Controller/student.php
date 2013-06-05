<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Student extends Controller_Common {

    protected $_model;

    public function __construct($req, $res) {
        parent::__construct($req, $res);
        $this->_model = new Model_Student();
    }

    // Сторінка Cтуденти    
    public function action_student() {
 
        $total_items = count($this->_model->getStudent());


        $pagination = Pagination::factory(array(
                    'total_items' => $total_items,
                    'items_per_page' => 11,
                        )
        );

        // Pass controller and action names explicitly to $pagination object
        $pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action()));
        // Get data
        
        $st = $this->_model->getStudentByOffset($pagination->offset, $pagination->items_per_page);
        var_dump(count($st));        
// Pass data and validation object to view
        $content = View::factory('pages/student');
        $content->pagination = $pagination;
        $content->st = $st;
        $this->template->content = $content;
    }

    public function action_sinfo() {
        $id = $this->request->param('id');
        $student = $this->_model->getStudentById($id);
        $content = View::factory('/pages/sinfo');
        $content->student = $student;
        $this->template->content = $content;
    }

    public function action_create() {
        $id = $this->request->param('id');
        $method = $this->request->method();
        if ("POST" === $method) {
            $_POST['gid'] = $id;
            var_dump($_POST);

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $patronim = $_POST['patronim'];
            $phone = $_POST['phone'];
            $zalik1 = $_POST['zalik1'];
            $passport = $_POST['passport'];
            $gid = $_POST['gid'];

            $this->_model->addStudent($gid, $surname, $name, $patronim, $zalik1, $phone, $passport, "0", "0", "0");
            $this->_redirect("groups/view/$gid");
        } else {
            $groupId = $this->request->param('id');
            $content = View::factory('/admin/student/student-create');
            $content->groupId = $groupId;
            $this->template->content = $content;
        }
    }

    /* public function getStudentById($students,$id)
      {
      foreach ($students as $student){
      if ($student['id'] ==$id)
      return $student;
      }
      return NULL;

      } */
}

// End Student

