<?php

$content = 
"
<strong class='card-header text-center'>
  <span class='fas fa-search pr-2'></span>{$data['lang']['search_conditions']}
</strong>
<div class='card-body'>

  <div class='row justify-content-center'>
    <div class='col-11 border rounded py-3'>

      <form action='result' method='get'>
        <div class='form-row'>
          <div class='col-md-6 mb-3'>
            <label for='memFname'>{$data['lang']['name']}</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-user'></span>
                </span>
              </div>
              <input class='form-control' id='memFname' name='memFname' type='text' tabindex='1' autofocus>
            </div>
          </div>

          <div class='col-md-6 mb-3'>
            <label for='memLname'>{$data['lang']['family']}</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-user-tag'></span>
                </span>
              </div>
              <input class='form-control' id='memLname' name='memLname' type='text' tabindex='2'>
            </div>
          </div>

        </div>

        <div class='form-row'>
          <div class='col-md-6 mb-3'>
            <label for='memPhone'>{$data['lang']['phone_num']}</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-phone'></span>
                </span>
              </div>
              <input class='form-control' id='memPhone' name='memPhone' type='text' tabindex='3'>
            </div>
          </div>
          <div class='col-md-6 mb-3'>
            <label for='memLocalPhone'>{$data['lang']['local_phone_num']}</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-phone-square-alt'></span>
                </span>
              </div>
              <input class='form-control' id='memLocalPhone' name='memLocalPhone' type='text'
                title='شماره 3 رقمی وارد کنید' pattern=\"^[0-9]{3,3}$\" tabindex='4'>
            </div>
          </div>
        </div>

        <div class='form-row'>
          <div class='col-md-6 mb-3'>
            <label for='memEmail'>{$data['lang']['email']}</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-at'></span>
                </span>
              </div>
              <input class='form-control' id='memEmail' name='memEmail' type='email' tabindex='5'>
            </div>
          </div>
          <div class='col-md-6 mb-3'>
            <div class='form-group'>
              <label for='memDepGroup'>{$data['lang']['departmant_group']}</label>
              <select class='form-control' id='memDepGroup' name='memDepGroup' tabindex='6'>
                <option>&#45;&#45;</option>";
                foreach ($data['res'] as $d) {
                $content .= "<option value={$d['dep_ID']}>{$d['dep_name']}</option>";
                }

                $content .= "
              </select>
            </div>

          </div>
        </div>
        <div class='form-row'>
          <div class='col-md-12 mb-3'>
            <label for='memAdd'>{$data['lang']['address']}</label>
            <div class='input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'>
                  <span class='fas fa-map-marker-alt'></span>
                </span>
              </div>
              <textarea class='form-control' rows='2' id='memAdd' name='memAdd' tabindex='7'></textarea>
            </div>
          </div>
        </div>

        <div class='row text-center'>
          <div class='col-6'>
            <input type='submit' id='btnItemSearch' class='col-6 btn btn-success' value='{$data['lang']['search']}'
              tabindex='8'>
          </div>
          <div class='col-6'>
            <input type='reset' class='col-6 btn btn-secondary' value='{$data['lang']['reset']}' tabindex='9'>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
"
;
$this->layout($content);