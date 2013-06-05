<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller {
 
 protected $_roles = array();
 protected $_logged = false;
 
 public function __construct($req, $res){
 parent::__construct($req,$res);
 $this->_loadRoles();
 }
 /**
	 * @var  View  page template
	 */
	public $template = 'main';

	/**
	 * @var  boolean  auto render template
	 **/
	public $auto_render = TRUE;

	/**
	 * Loads the template [View] object.
	 */
	public function before()
	{
		parent::before();
       if ($this->request->is_ajax())
        {
                $this->auto_render = FALSE;
        }
		//die($this->auto_render);
		if ($this->auto_render === TRUE)
		{
			// Load the template
			$this->template = View::factory($this->template);
		
		View::set_global('logged', $this->_logged);
		View::set_global('title', 'Мій сайт');				
        View::set_global('description', 'Сайт');
        $this->template->content = '';
        $this->template->styles = array('style');
        $this->template->scripts = '';
		
       
	}
	}

	/**
	 * Assigns the template [View] as the request response.
	 */
	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			$this->response->body($this->template->render());
		}
		parent::after();
	}
	protected function _redirect($url){
	header( 'Location: ' . URL::base() . $url );die();	
	}
	
	protected function _loadRoles(){
	$user = Auth::instance()->get_user();
		if($user !== null){
		$this->_logged = true;
		$user_id = $user->id;
		$roles = ORM::factory('user',$user_id)->roles->find_all()->as_array();
		foreach($roles as $role)
			{
				$this->_roles[] = $role->name;
			}
		}else{
				$this->_roles[] = "login";
		}
	}
	
		 protected function _save_image($image,$id,$folder)
    {
	var_Dump($image);
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
			$filename = "/public/img/zobr.jpg";
        $directory = DOCROOT.'public/img/'.$folder."/";
				var_dump($directory);
        if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = $id.'.jpg';
 
            Image::factory($file)
                ->resize(160, 120, Image::AUTO)
                ->save($directory.$filename);
 
            // Delete the temporary file
            unlink($file);
 
            return $filename;
        }
 
        return FALSE;
    }
	


 
} // End Common