<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {
    public $template = 'main';
 
    public function before()
    {
        parent::before();
        View::set_global('title', 'Мій сайт');				
        View::set_global('description', 'Сайт');
        $this->template->content = '';
        $this->template->styles = array('style');
        $this->template->scripts = '';
    }
public function action_one(){
$var = "dsd";
$view = View::factory('user/login')
			->bind('message', $var);
			$this->response->body($view);
			
			$this->redirect("test/two");
}

public function action_two(){

}
}

?>