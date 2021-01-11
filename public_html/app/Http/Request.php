<?php
/**
 * Request: Get and Post
 * Author: Mojdeh Bahadorpour
 */

namespace App\Http;


class Request
{
/*    public static function anyRequest($params = [])
    {
        //    null coalescing operator (??)
        $reqs = [];
        foreach ($params as $param) {
            $method = $_GET[$param] ?? $_POST[$param];

            if (isset($method) && !empty($method) ){
                array_push($reqs, $method);
            }
        }
        return ($reqs);
    }*/

     public static function postRequest($params = [])
    {
        $post = [];
        foreach ($params as $param) {
            if (isset($_POST[$param]) && !empty($_POST[$param]) ){
                array_push($post, $_POST[$param]);
            }
        }
        return ($post);
    }

    public static function getRequest($params = [])
    {
        $get = [];
        foreach ($params as $param) {
            array_push($get,  @$_GET[$param]);
        }
        return ($get);
    }

    public static function notReqPostRequest($params = [])
    {
        $post = [];
        foreach ($params as $param) {
            array_push($post, strip_tags($_POST[$param]));
        }
        return ($post);
    }
}
