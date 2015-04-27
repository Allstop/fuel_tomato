<?php

namespace Fuel\Core;

class data
{
    public function getPost()
    {
        foreach ($_POST as $key => $value) {
            $_POST[$key] = trim($value);
        }
        $userData = array();
        if (isset($_POST['id'])){
            $userData['id'] = $_POST['id'];
        }
        if (isset($_POST['name'])){
            $userData['name'] = $_POST['name'];
        }
        if (isset($_POST['password'])){
            $userData['password'] = $_POST['password'];
        }
        if (isset($_POST['starttime'])){
            $userData['starttime'] =$_POST['starttime'];
        }
        if (isset($_POST['endtime'])){
            $userData['endtime'] =$_POST['endtime'];
        }
        if (isset($_POST['description'])){
            $userData['description'] =$_POST['description'];
        }
        return $userData;
    }
}
