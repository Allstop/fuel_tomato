<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),

	'sessionCheck' => 'MainController/sessionCheck',
	'createRecord' => 'MainController/createRecord',
	'listRecord' => 'MainController/listRecord',

	'loginCheck' => 'UserController/loginCheck',
	'create' => 'UserController/create',
	'createCheck' => 'UserController/createCheck',
	'logout' => 'UserController/logout',

);
