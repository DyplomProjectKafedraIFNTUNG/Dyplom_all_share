<?php 

	class Model_User extends Model_Auth_User {
	
	protected $_table_name = "users";
	
	/*public function __construct()
	{
	parent::__construct();
	}*/
	
	public function is_unique($value)
	{
	//check email and/or username for unique 
	$count = DB::select()->from($this->_table_name)
	->where('email', '=',$value)
	->or_where('username','=',$value)
	->execute()
	->count();
	return !((bool)$count);
	}
	
	/*public function rules()
{
    return array(
			'username' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 32)),
				array(array($this, 'is_unique'), array(':value')),
			),
			'password' => array(
				array('not_empty'),
			),
			
			'email' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 127)),
				array('email'),
				array(array($this, 'is_unique'), array(':value')),
			),
		);

}*/
	}