<?php
/**
 * FlashMessenger helper: used to render the messages of the FlashMessenger MVC
 * User: Bahadorpour
 */

namespace App\Packages;

class flashMessenger
{

    public static function showSuccess($msg)
    {
        print "
        <div class='alert alert-success alert-dismissible'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Attention!</strong>{$msg}
        </div>
        ";
    }

    public static function showError($msg)
    {
        print "
            <div class='alert alert-danger alert-dismissible'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Attention! </strong>'{$msg}'
            </div>
        ";
    }

    public static function showWarning($msg)
    {
        print "
            <div class='alert alert-warning alert-dismissible'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Attention! </strong>'{$msg}'
            </div>
        ";
    }
}