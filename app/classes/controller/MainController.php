<?php
namespace Mvc\Controller;

use Mvc\Core\IMainData;
use Mvc\Model\MainModel;
use Mvc\View\View;
use Mvc\Sys\Controller;

class MainController extends Controller
{
    // 共用的物件
    private $Model = NULL;
    private $gtPost = NULL;
    // 初始化要執行的動作以及物件
    public function __construct()
    {
        Controller::init();
        //$this->Model = IMainData::getMain();
        $this->Model = new MainModel();
        $this->gtPost = self::$app->getListPost();
    }
    public function action_index()
    {
        return Response::forge(View::forge('welcome/index_tomato'));
    }
    //session檢查
    public function action_sessionCheck()
    {
        if (isset($_SESSION['name'])) {
            return View::render(array('username' => $_SESSION['name']));
        }else {
            return View::render(array('username' => null));
        }
    }
    //建立清單
    public function action_createRecord()
    {
        $status = $this->Model->createRecord($this->gtPost);
        return View::render(array('status' => $status));
    }
    //工作清單
    public function action_listRecord()
    {
        $status = $this->Model->listRecord($_SESSION['name']);
        if ($status == false) {
            return View::render(array('status' => false));
        }else {
            return View::render(array('status' => $status));
        }
    }
}
