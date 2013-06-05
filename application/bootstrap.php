<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('America/Chicago');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
	'base_url'   => '/kohana',
	'index_file' => FALSE,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

Cookie::$salt = '123456654123...';

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	 'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	 'database'   => MODPATH.'database',   // Database access
	 'image'      => MODPATH.'image',      // Image manipulation
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	 'ulogin'     => MODPATH.'ulogin',   // ulogin
     'email'      => MODPATH.'email',   // email
	 'pagination' => MODPATH.'pagination', // Pagination
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
//load
 Route::set('main-load', 'load')
        ->defaults(array(
            'controller' => 'load',
            'action'     => 'index',
        ));
 
  Route::set('get-mainLoad', 'load/get-main-teacher-load')
        ->defaults(array(
            'controller' => 'load',
            'action'     => 'getMainTeacherLoad',
        ));
  
  Route::set('get-personalLoad', 'load/get-personal-teacher-load')
        ->defaults(array(
            'controller' => 'load',
            'action'     => 'getPersonalTeacherLoad',
        ));
 
    Route::set('get-timesheet', 'load/time')
        ->defaults(array(
            'controller' => 'load',
            'action'     => 'getTimesheet',
        ));
    
       Route::set('get-time-view', 'load/time/view')
        ->defaults(array(
            'controller' => 'load',
            'action'     => 'getTimesheetView',
        ));
  
   Route::set('get-mainLoadView', 'load/get-main-teacher-load/view')
        ->defaults(array(
            'controller' => 'load',
            'action'     => 'getMainTeacherLoadview',
        ));
  
      Route::set('get-personalLoadView', 'load/get-personal-teacher-load/view')
        ->defaults(array(
            'controller' => 'load',
            'action'     => 'getPersonalTeacherLoadView',
        ));
  


 //ajax route
 
 Route::set('get-kafedras-for-faculty-ajax', 'groups/get-kafedras/<fid>')
        ->defaults(array(
            'controller' => 'groups',
            'action'     => 'getKafedra',
        ));
		
		//action_removeStudentFromGroup
  Route::set('remove-stud-from-group', 'groups/student/delete/<id>')
        ->defaults(array(
            'controller' => 'groups',
            'action'     => 'removeStudentFromGroup',
        ));
 Route::set('view-concrete-group', 'groups/view/<id>')
        ->defaults(array(
            'controller' => 'groups',
            'action'     => 'view',
        ));
		
Route::set('faculty-ed', 'faculty/edit/(<id>)')
        ->defaults(array(
            'controller' => 'faculty',
            'action'     => 'edit',
        ));
		
Route::set('kafedra-ed', 'kafedra/edit/(<id>)')
        ->defaults(array(
            'controller' => 'kafedra',
            'action'     => 'edit',
        ));
		
Route::set('group-ed', 'group/edit/<id>')
        ->defaults(array(
            'controller' => 'groups',
            'action'     => 'edit',
        ));

Route::set('teacher-ed', 'teacher/edit/<id>')
        ->defaults(array(
            'controller' => 'teacher',
            'action'     => 'edit',
        ));

 Route::set('teacher-create','teacher/create')
 ->defaults(
 array(
 'controller' => 'teacher',
 'action' => 'create')
);	

 Route::set('group-create','groups/create')
 ->defaults(
 array(
 'controller' => 'groups',
 'action' => 'create')
);		
		
 Route::set('faculty-create','faculty/create')
 ->defaults(
 array(
 'controller' => 'faculty',
 'action' => 'create')
);

 Route::set('kafedra-create','kafedra/create')
 ->defaults(
 array(
 'controller' => 'kafedra',
 'action' => 'create')
);

 Route::set('student-create','student/create/<id>')
 ->defaults(
 array(
 'controller' => 'student',
 'action' => 'create')
);
 
Route::set('user', 'info')
        ->defaults(array(
            'controller' => 'user',
            'action'     => 'info',
        ));
 
Route::set('user', 'login')
        ->defaults(array(
            'controller' => 'user',
            'action'     => 'login',
        ));
 
Route::set('user', 'create')
        ->defaults(array(
            'controller' => 'user',
            'action'     => 'create',
        ));
 
Route::set('student', 'sinfo(/<id>)')
        ->defaults(array(
            'controller' => 'student',
            'action'     => 'sinfo',
        )); 
 
Route::set('account', 'login')
        ->defaults(array(
            'controller' => 'account',
            'action'     => 'login',
        ));
 

Route::set('lessons', 'lessons(/<id>)')
        ->defaults(array(
            'controller' => 'lessons',
            'action'     => 'linfo',
        ));

Route::set('teacher', 'teacher(/<id>)')
        ->defaults(array(
            'controller' => 'teacher',
            'action'     => 'tinfo',
 ));
Route::set('teachers', 'teachers(/<page>)')
        ->defaults(array(
            'controller' => 'teacher',
            'action'     => 'teachers',
        )); 
 
Route::set('lessons', 'lessons(/<id>)')
        ->defaults(array(
            'controller' => 'lessons',
            'action'     => 'lessons',
        )); 

Route::set('student', 'student(/<page>)')
        ->defaults(array(
            'controller' => 'student',
            'action'     => 'student',
        )); 

Route::set('groups', 'groups(/<id>)')
        ->defaults(array(
            'controller' => 'groups',
            'action'     => 'groups',
        )); 
 
Route::set('kafedra', 'kafedra(/<id>)')
        ->defaults(array(
            'controller' => 'kafedra',
            'action'     => 'kafedra',
        ));
		
Route::set('kafedraifn', 'kinfo/(/<id>)')
        ->defaults(array(
            'controller' => 'kafedra',
            'action'     => 'kafedra',
        ));
 
Route::set('faculty', 'faculty(/<id>)')
        ->defaults(array(
            'controller' => 'faculty',
            'action'     => 'faculty',
        ));
		
Route::set('facultyinf', 'finfo/(/<id>)')
        ->defaults(array(
            'controller' => 'faculty',
            'action'     => 'faculty',
        ));
 
Route::set('page', 'navan(/<id>)')
        ->defaults(array(
            'controller' => 'page',
            'action'     => 'navan',
        ));
 
Route::set('about', 'about')
	->defaults(array(
            'controller' => 'static',
            'action'     => 'about',
	)); 
 
Route::set('contacts', 'contacts')
	->defaults(array(
            'controller' => 'static',
            'action'     => 'contacts',
	));
 
 Route::set('default', '(<controller>(/<action>(/<id>)))')
        ->defaults(array(
            'controller' => 'page',
            'action'     => 'index',
        ));
		
