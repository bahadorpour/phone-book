<?php
/**
 * Created by PhpStorm.
 * User: Bahadorpour
 * Date: 5/20/2019
 * Time: 10:27 AM
 */

use App\Http\BaseController;

class AboutusController extends BaseController
{
    public function show()
    {
        return $this->view('Aboutus/show');
    }

}
