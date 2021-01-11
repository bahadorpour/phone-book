<?php
/**
 * Forget password view
 * Author: Mojdeh Bahadorpour
 */

use App\Packages\flashMessenger;

$content = '
<strong class="card-header text-center">
  <span class="fas fa-search pr-2"></span>Forgot Your Password?
</strong>
<div class="card-body">
  <div class="row justify-content-center">
    <div class="col-11 alert alert-info alert-dismissible fade show" role="alert">
      <strong>Hint:</strong> The email address of admin is : admin@gmail.com
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="col-9 border rounded py-3">
      <form action="resetPassword" id="register-form" role="form" autocomplete="on" class="my-4 form" method="post">

        <div class="form-row">
          <div class="col-12 mb-3">
            <label for="email">Your Email: </label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fas fa-at"></span>
                </span>
              </div>
              <input id="email" name="email" placeholder="Email address" class="form-control" type="email" required
                autofocus tabindex="1">
            </div>
          </div>
        </div>
';

      if (!empty($_REQUEST['msg']) && $_REQUEST['msg'] == '1'){
      $content .= flashMessenger::showError("A user with this email address is not registered.");
      }

      $content .='
        <div class="form-row justify-content-center mt-4">
          <input name="recover-submit" class="col-5 btn btn-dark" value="NEXT" type="submit" tabindex="2">
        </div>
      </form>
    </div>
  </div>
</div>
';
$this->layout($content);