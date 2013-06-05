<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Kafedra extends Controller_Common {

	protected $_model = null;
	
	public function __construct($req,$res)
	{
	$this->_model = new Model_Kafedra();
	parent::__construct($req,$res);
	}
 
    // Сторінка Кафедри    
    public function action_kafedra()
    {	
		$content = View::factory('/pages/kafedra');
		$kaf = $this->_model->getAllKafedra();		
		$content->kaf=$kaf;
		$content->roles = $this->_roles;
		$this->template->content = $content;
		
    }
	
	public function action_kinfo()
	{
		$id = $this->request->param('id');
		$kafedra = $this->_model->getKafedraById($id);
		$content = View::factory('/pages/kinfo');
		$content->kafedra = $kafedra;
		$content->roles = $this->_roles;
		$this->template->content = $content;
	}
	
	public function action_create(){
		$method = $this->request->method();
	if ("POST" === $method){

	$filename = NULL;
        var_dump($_POST);
		/*
		array (size=4)
  'name' => string 'моя кафедра' (length=21)
  'descr' => string 'ываываыва' (length=18)
  'facultyId' => string '2' (length=1)
  'create' => string 'add kafedra' (length=11)
		*/
		$name = $_POST['name'];
		$descr = $_POST['descr'];
		$facultyId = $_POST['facultyId'];
		$id = $this->_model->addKafedra($facultyId, $name,NULL,$descr);
		
		
            if (isset($_FILES['pic']))
            {			
			$filename = $this->_save_image($_FILES['pic'],$id,'kafedra');					
            }			
			$pic = $filename;
			$this->_model->updateKafedra($id,$facultyId,$name,$pic, $descr);
 
        if ( ! $filename)
        {
            $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
        }
		$this->_redirect("kafedra/kinfo/$id");
		}
		else
		{
		
		$content = View::factory('/admin/kafedra/create');
		$faculty_Model = new Model_Faculty();
		$faculties = $faculty_Model->getFaculty();
		$prepare = $this->_prepareForSelect($faculties);
		$content->faculties = $prepare;
		$this->template->content = $content;
		}
}	
	
	public function action_delete()
	{
$id = $this->request->param('id');	
$this->_model->removeKafedra($id);
$this->_redirect("kafedra/kafedra");
	}
	
	public function action_edit()
	{
$id = $this->request->param('id');
	
	$hasAccess = Auth::instance()->logged_in('admin');
	if($hasAccess){
	$method = $this->request->method();
	var_dump($method);
	//die($method);
	if ("POST" === $method){
	$filename = NULL;
 if (isset($_FILES['pic']))
            {
                $filename = $this->_save_image($_FILES['pic'],$id,'kafedra');					
            }
			
			/*
			 'name' => string 'nvbnbvn' (length=7)
  'descr' => string 'bvnbvn' (length=6)
  'facultyId' => string '1' (length=1)
  'update' => string 'save edit' (length=9)
			*/
			$name = $_POST['name'];
			$descr = $_POST['descr'];
			$facultyId = $_POST['facultyId'];
			$pic = $filename;
			
			
		$this->_model->updateKafedra($id,$facultyId,$name,$pic, $descr);
	
 
        if ( ! $filename)
        {
            $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
        }
		$this->_redirect("kafedra/kinfo/$id");
		}
		else
		{
				$id = $this->request->param('id');
				$db = $this->_model->getKafedraById($id);
				$content = View::factory('/admin/kafedra/edit');
				//$content->faculties=$fac;
				$content->id = $id;
				$faculty_Model = new Model_Faculty();
				$faculties = $faculty_Model->getFaculty();
				$prepare = $this->_prepareForSelect($faculties);
				var_dump($prepare);
				$content->faculties = $prepare;
				$content->kafedra = $this->_model->getKafedraById($id);
				$this->template->content = $content;
		}
	
	}
	else{
	$this->_redirect("user/login");
	}
	}
	
	protected function _prepareForSelect($faculties)
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
 
} // End Kafedra

