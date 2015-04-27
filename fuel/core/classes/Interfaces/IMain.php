<?php

namespace Fuel\Core\Interfaces;

interface IMain
{
    /**
     * @param $name
     * @return mixed
     */
    public function action_sessionCheck($name);

    /**
     * @param $gtlPost
     * @return mixed
     */
    public function action_createRecord($gtlPost);

    /**
     * @param $name
     * @return mixed
     */
    public function action_listRecord($name);
}
