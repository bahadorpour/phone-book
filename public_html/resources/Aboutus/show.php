<?php
/**
 * About us view
 * Author: Mojdeh Bahadorpour
 */

$content = 
'
<link rel="stylesheet" href="../../public/librarys/css/about-us.css">
<strong class="card-header text-center">
  <span class="fas fa-info pr-2"></span>About Application
</strong>
<div class="card-body">
  <div class="row justify-content-center">

    <div class="col-md-12">
    <h5 class="card-title">Details of trial Project for web programming training course.</h5>
      <div id="featuresList">
        <p>
          This test program provides the ability to search contact numbers. It is suitable for stores, offices and
          organizations.
        </p>
        <br>
        <p> The different parts of this phonebook project are: </p>
        <ol>
          <li> End user
            <ol>
              <li class="py-3"> Ability to search between contact numbers </li>
              <li class="py-3"> View Contact Us </li>
              <li class="py-3"> View about the app </li>
            </ol>
          </li>
          <br>
          <li> Administrator
            <ol>
              <li class="py-3"> Login to the admin page </li>
              <li class="py-3"> Change password if forgotten </li>
              <li class="py-3"> View the profile of registered people </li>
              <li class="py-3"> Ability to search among all people registered in the phone book </li>
              <li class="py-3"> Add a new phone number </li>
              <li class="py-3"> Edit existing phone numbers </li>
              <li class="py-3"> Delete the desired phone number </li>
            </ol>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
'
;

$this->layout($content);
?>