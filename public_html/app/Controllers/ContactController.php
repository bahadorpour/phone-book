<?php
/**
 * Created by PhpStorm.
 * User: Bahadorpour
 * Date: 5/14/2019
 * Time: 7:00 PM
 */

use App\Http\BaseController;

class ContactController extends BaseController
{
    public function show()
    {
        return $this->view('contact/show');
    }

}