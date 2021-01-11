<?php
/**
 * About us controller: Accepts input and converts it to commands for about us view.
 * Author: Mojdeh Bahadorpour
 */

use App\Http\BaseController;

class AboutusController extends BaseController
{
    public function show()
    {
        return $this->view('Aboutus/show');
    }
}