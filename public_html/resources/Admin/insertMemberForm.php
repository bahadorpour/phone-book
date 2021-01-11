<?php
/**
 * insert new member view
 * Author: Mojdeh Bahadorpour
 */
$content = '
<strong class="card-header text-center">
  <span class="fas fa-user-edit text-info"></span><span class="mr-3"> Edit User</span>
</strong>

<div class="card-body">
  <div class="row justify-content-center">
    <div class="col-11 border rounded py-3">

      <form action="insertMember" method="post">

        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="memFname">Name <sup class="text-danger"> * </sup></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fas fa-user"></span>
                </span>
              </div>
              <input class="form-control" id="memFname" name="memFname" type="text" required autofocus
                autocomplete="off" tabindex="1">
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="memLname">ّFamily <sup class="text-danger"> * </sup></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fas fa-user-tag"></span>
                </span>
              </div>
              <input class="form-control" id="memLname" name="memLname" type="text" required autocomplete="off"
                tabindex="2">
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="memPhone">Phone Number</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fas fa-phone"></span>
                </span>
              </div>
              <input class="form-control" id="memPhone" name="memPhone" type="number" autocomplete="off" tabindex="3">
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="memLocalPhone">Internal Phone Number <sup class="text-danger"> * </sup></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fas fa-phone-square-alt"></span>
                </span>
              </div>
              <input class="form-control" id="memLocalPhone" name="memLocalPhone" type="text" required
                autocomplete="off" tabindex="4" title="Enter a number with 3 digits" pattern="^[0-9]{3,3}$">

            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="memEmail">Email</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fas fa-at"></span>
                </span>
              </div>
              <input class="form-control" id="memEmail" name="memEmail" type="email" autocomplete="off" tabindex="5">
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="memDepGroup">Departmant Group</label>
              <select class="form-control" id="memDepGroup" name="memDepGroup">
                <option></option>';

                foreach ($data['res'] as $d) {
                $content .= "<option value={$d['dep_ID']}>{$d['dep_name']}</option>";
                }
                $content .='
              </select>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="memAdd">Address"</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fas fa-map-marker-alt"></span>
                </span>
              </div>
              <textarea class="form-control" rows="2" id="memAdd" name="memAdd" tabindex="7"></textarea>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-4">
            <input type="submit" onclick="" id="btnItemSearch" class="col-7 btn btn-success" value="Save" tabindex="8">
          </div>
          <div class="col-4">
            <input type="reset" class="col-7 btn btn-default" value="Reset Form" tabindex="9">
          </div>
          <div class="col-4">
            <a href="accounts" class="col-7 btn btn-secondary" id="cancel" tabindex="10">Cancel</a>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
';


$this->layoutAdmin($content);