<?php
/**
 * Contact controller: Accepts input and converts it to commands for the contact us view.
 * Author: Mojdeh Bahadorpour
 */

use App\Http\BaseController;

class ContactController extends BaseController
{
    public function show()
    {
        return $this->view('contact/show');
    }

}