<?php
/**
 * Edit Members view
 * Author: Mojdeh Bahadorpour
 */
$content = "
<strong class='card-header text-center'>
  <span class='fas fa-user-edit text-info'></span><span class='mr-3'> Edit User</span>
</strong>

<div class='card-body'>
  <div class='row justify-content-center'>
    <div class='col-11 border rounded py-3'>
      <form action='editMember' method='get'>
        <input name='id' type='hidden' value='{$_SESSION["mem_id"]}'>
        <div class='form-row'>
          <div class='col-md-6 mb-3'>
            <label for='memFname'>Name</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-user'></span>
                </span>
              </div>
              <input class='form-control' id='memFname' name='memFname' type='text' autocomplete='off'
                value='{$_SESSION["first_name"] }'>
            </div>
          </div>

          <div class='col-md-6 mb-3'>
            <label for='memLname'>ّFamily</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-user-tag'></span>
                </span>
              </div>
              <input class='form-control' id='memLname' name='memLname' type='text' autocomplete='off'
                value='{$_SESSION["last_name"]}'>
            </div>
          </div>
        </div>


        <div class='form-row'>
          <div class='col-md-6 mb-3'>
            <label for='memPhone'>Phone Number</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-phone'></span>
                </span>
              </div>
              <input class='form-control' id='memPhone' name='memPhone' type='number' autocomplete='off'
                value='{$_SESSION["phone"]}'>
            </div>
          </div>
          <div class='col-md-6 mb-3'>
            <label for='memLocalPhone'>Internal Phone Number</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-phone-square-alt'></span>
                </span>
              </div>
              <input class='form-control' id='memLocalPhone' name='memLocalPhone' type='number' autocomplete='off'
                value='{$_SESSION["local_phone"]}'>
            </div>
          </div>
        </div>

        <div class='form-row'>
          <div class='col-md-6 mb-3'>
            <label for='memEmail'>Email</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-at'></span>
                </span>
              </div>
              <input class='form-control' id='memEmail' name='memEmail' type='email' autocomplete='off'
                value='{$_SESSION["email"]}'>
            </div>
          </div>

          <div class='col-md-6 mb-3'>
            <div class='form-group'>
              <label for='memDepGroup'>Departmant Group</label>
              <select class='form-control' id='memDepGroup' name='memDepGroup'>
                <option></option>";

                foreach ($data['res'] as $d) {
                if ($d['dep_ID'] == $_SESSION["dep_id_fk"]){
                $content .= "<option value={$d['dep_ID']} selected>{$d['dep_name']}</option>";
                }else{
                $content .= "<option value={$d['dep_ID']}>{$d['dep_name']}</option>";
                }
                }
                $content .= "
              </select>
            </div>

          </div>
        </div>

        <div class='form-row'>
          <div class='col-md-12 mb-3'>
            <label for='memAdd'>Address'</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-map-marker-alt'></span>
                </span>
              </div>
              <textarea class='form-control' rows='2' id='memAdd' name='memAdd'>{$_SESSION["address"]}</textarea>
            </div>
          </div>
        </div>

        <div class='row text-center'>
          <div class='col-6'>
            <input type='submit' id='btnItemSearch' class='btn btn-dark' value='Confirm Edit'>
          </div>
          <div class='col-6'>
            <a href='accounts' class='btn btn-light' id='cancel'>Cancle</a>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
";
$this->layoutAdmin($content);