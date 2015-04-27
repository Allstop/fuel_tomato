<?php

namespace Fuel\Core\Interfaces;

interface IUser
{
    /**
     * @param $gtPost array
     * @return mixed array
     */
    public function action_loginCheck($gtPost);

    /**
     * @param $gtPost array
     * @return mixed ? $gtPost['name'] : '失敗';
     */
    public function action_create($gtPost);

    /**
     * @param $name
     * @return mixed
     */
    public function action_createCheck($name);
}
