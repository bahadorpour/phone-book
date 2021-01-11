<?php

$content = 
'
<strong class="card-header text-center">
  <span class="fas fa-key pr-2"></span>Change Password
</strong>
<div class="card-body">
  <div class="row justify-content-center">

    <div class="col-9 border rounded py-3">
      <form action="updateNewPass" method="post" role="form">
        <div class="form-row">
          <div class="col-12 mb-3">
            <label for="newPass">New password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fas fa-user-lock"></span>
                </span>
              </div>
              <input class="form-control" id="newPass" name="newPass" type="password" placeholder="New password"
                required autofocus tabindex="1">
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-12 mb-3">
            <label for="confirmNewPass">Confirm new password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fas fa-user-lock"></span>
                </span>
              </div>
              <input class="form-control" id="confirmNewPass" name="confirmNewPass" type="password"
                placeholder="Confirm New Password" required tabindex="2">
            </div>
          </div>
        </div>
        ';

        $content .= "
        <div class='form-group' id='adminId' data-id='{$data['res']}'>
          <input name='id' type='hidden' value='{$data['res']}'>

          <div class='form-row justify-content-center mt-4'>
            <input name='newSubmit' class='col-5 btn btn-dark' id='btnSend' value='CHANGE PASSWORD' type=' submit'
              tabindex='3'>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
"
;
$this->layout($content);