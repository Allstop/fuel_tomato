<?php

//use fuel\core\IUserData;
use app\classes\model\Model_mainModel;
use fuel\core\Controller;

class Controller_userController extends \Controller
{
    // 共用的物件
    private $Model = NULL;
    private $gtPost = NULL;
    // 初始化要執行的動作以及物件
    public function __construct()
    {
        Controller::init();
        //$this->Model = IUserData::getMain();
        $this->Model = new Model_mainModel();
        $this->gtPost = self::$app->getPost();
    }
    //登出
    public function action_logout()
    {
        session_destroy();
    }
    //登入檢查
    public function action_loginCheck()
    {
        $_SESSION['name'] = $this->gtPost['name'];
        $_SESSION['password'] = $this->gtPost['password'];
        $status = $this->Model->loginCheck($_SESSION);
        if ($status == false) {
            session_destroy();
            return View::render(array('status' => false));
        }else {
            return View::render(array('status' => $status, 'username' => $_SESSION['name']));
        }
    }
    //建立
    public function action_create()
    {
        $status = $this->Model->create($_SESSION);

        return View::render(array('status' => $status));
    }
    //建立檢查
    public function action_createCheck()
    {
        $_SESSION['name'] = $this->gtPost['name'];
        $_SESSION['password'] = $this->gtPost['password'];
        $status = $this->Model->createCheck($_SESSION['name']);
        if ($status == 'success') {
            return View::render(array('status' => false));
        }else {
            return View::render(array('status' => 'success'));
        }
    }
}
