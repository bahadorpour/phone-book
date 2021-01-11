<?php

namespace App\Http;

use App\Http\Config;

class Kernel
{
    protected $controller = null;
    protected $action = null;
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        //get controller

        $formatUrl = ucfirst($url[0]) . "Controller";

        if (file_exists(Config::CONTROLLERS_PATH . $formatUrl . ".php")) {
            $this->controller = $formatUrl;
            unset($url[0]);
        }

        require_once("../app/Controllers/" . $this->controller . ".php");
        $this->controller = new $this->controller;

        //get action

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
                unset($url[1]);
            }
        }

        //get params

        $this->params = $url ? array_values($url) : [""];
        call_user_func_array([$this->controller, $this->action], $this->params);

    }

    public function parseUrl()
    {
        return explode("/", rtrim($_GET['url'], "/"));

    }
}
