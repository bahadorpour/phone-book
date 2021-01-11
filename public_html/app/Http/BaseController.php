<?php
/**
 * Base Controller:  A controller with basic functionalities from which the other controllers inherit.
 * Author: Mojdeh Bahadorpour
 */

namespace App\Http;

use App\Http\Config;

class BaseController
{
    public function view($view , $data = [])
    {
        return require_once Config::RESOURCES_PATH . $view . ".php";
    }

   public function layout($content){
        $get = file_get_contents(Config::LAYOUT_PATH . "layout.php");
        print str_replace("{content}", $content, $get);
    }

    public function layoutAdmin($content){
        $get = file_get_contents(Config::LAYOUT_PATH . "layoutAdmin.php");
        print str_replace("{@contentAdmin}", $content, $get);
    }

    public function redirect($src , $data = [])
    {
        return header("location:{$src}");
    }

      public function error($message, $code)
    {
        return require_once Config::ERROR_PATH;
    }
}