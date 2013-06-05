<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Page extends Controller_Common {
 
    // Главная страница
    public function action_index()
    {
        
 
        $content = View::factory('/pages/show');
        $this->template->content = $content;
    }
 

	
	public function action_navan()
    {
        $content = View::factory('/pages/navan');
        $this->template->content = $content;
    }    

	
} // End Page