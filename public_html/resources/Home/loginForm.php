<?php
/**
 * Login form view
 * Author: Mojdeh Bahadorpour
 */
use App\Packages\flashMessenger;

$content = '
<script src="../../public/librarys/js/jquery-3.2.1.min.js" type="text/javascript"></script>

<script>
  $(function () {
    $(\'span#eye\').on(\'click\', function() {
            $(\'#password\').attr("type", function(index, attr){
                return attr === "password" ? "text" : "password";
  });

  $(this).toggleClass("fa-eye-slash fa-eye")
        });
    });
</script>

<strong class="card-header text-center">
  <span class="fas fa-sign-in-alt pr-2"></span>Login
</strong>
<div class="card-body">
  <div class="row justify-content-center">
    <div class="col-11 alert alert-info alert-dismissible fade show" role="alert">
      <ul><strong>Hint:</strong>
        <li>Admin 1 --> username: admin , password: admin</li>
        <li>Admin 2 --> username: doe , password: 123</li>
      </ul>

      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="col-9 border rounded py-3">
      <form class="login_form" method="post" action="login">

        <div class="form-row">
          <div class="col-12 mb-3">
            <label for="username" class="control-label">Username</label>
            <div class="input-group">

              <input type="text" class="form-control" name="username" id="username" placeholder="Username" required
                autocomplete="off" autofocus tabindex="1">
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-12 mb-3">
            <label for="password" class="control-label">Password</label>
            <div class="input-group mb-3">

              <input id="password" type="password" class="form-control " name="password" placeholder="Password" required
                autocomplete="off" tabindex="2">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fas fa-eye-slash" id="eye"></span>
                </span>
              </div>
            </div>
            <div id="mt-5">
              <a href="forgetPassword" tabindex="4">Forgot password?
              </a>
            </div>
          </div>
        </div>
        ';

if (!empty($data)  ){
    switch ($data['msg']){
        case '0':
            $content .= flashMessenger::showError("Username or Password is incorrect!");
            break;
        case '2':
            $content .= flashMessenger::showError("Please enter same password!");
            break;
    }
}
if (!empty($_REQUEST['msg'])){
    switch ($_REQUEST['msg']){
        case '1':
            $content .= flashMessenger::showWarning("Could not find this user!");
            break;
        case  '2':
            $content .= flashMessenger::showSuccess("The password has been changed successfully.");
            break;
    }
}

$content .= '
        <div class="form-row justify-content-center">
          <input type="submit" class="col-5 btn btn-success btn-dark" value="Login" name="login" tabindex="3" />
        </div>
      </form>
    </div>
  </div>
</div>
';

$this->layout($content);