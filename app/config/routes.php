<?php
return array(
    '_root_'  => 'mainController/index',  // The default route
    '_404_'   => 'welcome/404',    // The main 404 route

    'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
    'sessionCheck' => 'classes/mainController/sessionCheck',
    'createRecord' => 'mainController/createRecord',
    'listRecord' => 'mainController/listRecord',

    'loginCheck' => 'UserController/loginCheck',
    'create' => 'UserController/create',
    'createCheck' => 'UserController/createCheck',
    'logout' => 'UserController/logout',
);
