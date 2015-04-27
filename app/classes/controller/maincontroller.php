<?php

// use fuel\Core\IMainData;
use app\classes\model\Model_mainModel;
use fuel\core\controller;

class Controller_mainController extends Controller
{
    // 共用的物件
    private $Model = NULL;
    private $gtPost = NULL;
    // 初始化要執行的動作以及物件
    public function __construct()
    {
        Controller::init();
        //$this->Model = new Model_mainModel();
        $this->gtPost = self::$app->getPost();
    }
    public function action_index()
    {
        // 取得預設 session 實例（由 'driver' 配置設定所標識）。
        $session = Session::instance();
        // 取得一個指定 session 實例
        $session = Session::instance('hahaha');
        // 建立 layout 檢視
        $view = View::forge('too/index');
        // 本地檢視變數，強制呈現
        $view->head = View::forge('too/head', array('title' => 'Fuel_Time'));
        $view->header = View::forge('too/header', array('site_title' => 'Time_Management'));
        $view->content = View::forge('too/content', array('username' => 'Cara', 'title' => 'START'));
        $view->login = View::forge('too/login');
        $view->footer = View::forge('too/footer', array('site_title' => 'Cara_Chan'));

        return $view;
    }
    //session檢查
    public function action_sessionCheck()
    {
        if (isset($_SESSION['name'])) {
            return View::forge('too/View', array('username' => $_SESSION['name']));
        }else {
            return View::forge('too/View', array('username' => null));
        }
    }
    //建立清單
    public function action_createRecord()
    {
        $status = $this->Model->createRecord($this->gtPost);
        return View::forge('too/View', array('status' => $status));
    }
    //工作清單
    public function action_listRecord()
    {
        $status = $this->Model->listRecord($_SESSION['name']);
        if ($status == false) {
            return View::forge('too/View', array('status' => false));
        }else {
            return View::forge('too/View', array('status' => $status));
        }
    }
}
