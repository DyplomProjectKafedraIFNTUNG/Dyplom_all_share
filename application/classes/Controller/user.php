<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Common {
	public function action_info()
	{
		$this->template->content = View::factory('user/info')
			->bind('user', $user);
		
		// Load the user information
		$user = Auth::instance()->get_user();
		$adminRole = Auth::instance()->logged_in("login");
		var_dump($adminRole);
		//var_dump($user);
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->_redirect('user/login');
		}
	}

	public function action_create() 
	{
	
	$this->template->content = View::factory('user/create')
			->bind('errors', $errors)
			->bind('message', $message);
			
			//var_dump($_POST);
			if(HTTP_Request::POST == $this->request->method()){
			try{
			// Validate any other settings submitted
$extra_validation = Validation::factory(
    array('password' => Arr::get($_POST, 'password'),
          'password_confirm' => Arr::get($_POST, 'password_confirm'))
    );

$extra_validation->rule('password_confirm', 'matches', array(':validation', 'password_confirm', 'password'));
				$user = new Model_User();
				$user->email = $_POST['email'];
				$user->password = $_POST['password'];
				$user->username = $_POST['username'];
				
				$user->save($extra_validation);	
				$user->add('roles', ORM::factory('role', array('name' => 'login')));
				$this->_redirect("user/login");
			}catch(ORM_Validation_Exception $e){
			$message = 'There were errors, please see form below.';
			$errors = $e->errors('models');
			}}
			$this->template->content = View::factory('user/create')
			->bind('errors', $errors)
			->bind('message', $message);
		
	/*	if (HTTP_Request::POST == $this->request->method()) 
		{			
			try {				
				// Create the user using form values
				$user = ORM::factory('users')->create_user($_POST, array(
					'email',
					'username',
					'password'				
				));
				var_dump($user);die(1);
				// Grant user login role
				//$user->add('roles', ORM::factory('role', array('name' => 'login')));
				
				// Reset values so form is not sticky
				//$_POST = array();
				
				// Set success message
				$message = "You have added user '{$user->username}' to the database";
				
				$user->save();
			} catch (ORM_Validation_Exception $e) {
				var_dump($e->getMessage());die(1);
				// Set failure message
				$message = 'There were errors, please see form below.';
				
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
				$this->template->content = View::factory('user/create')
			->bind('errors', $errors)
			->bind('message', $message);*/
	}
	
	public function action_login() 
	{
	$user = Auth::instance()->get_user();
	if($user) $this->_redirect("user/info");
	try{
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			// Attempt to login user
			$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
			$username = $this->request->post('username');
			$password = $this->request->post('password');
			$user = Auth::instance()->login($username, $password, true);
			
			$logged = Auth::instance()->logged_in('login');
			var_dump(get_class_methods('Controller_User'));
			// If successful, redirect user
			if($user) 
			{
			
			$this->_redirect('user/info');
			
			} 
			else 
			{
				$message = 'Login failed';
			}
		}
		/**/
		}catch(Exception $e)
		{
			var_dump($e->getMessage());
		}
		$this->template->content = View::factory('user/login')
			->bind('message', $message);
	}
	
	public function action_logout() 
	{
	Auth::instance()->logout();		
		$this->_redirect("user/login");
	}
	


}
?>