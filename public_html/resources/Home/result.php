<?php

$content = 
"
<strong class='card-header text-center'>
  <span class='fas fa-table pr-2'></span>Search Results
</strong>
<div class='card-body'>

        <div class='table-responsive'>
          <table class='table table-hover table-bordered'>

            <thead>
              <tr class='align-center text-center'>
                <th scope='col' class=''>Name</th>
                <th scope='col' class=''>Family</th>
                <th scope='col' class='text-info'>Phone Nr.</th>
                <th scope='col' class=''>Internal Nr.</th>
                <th scope='col' class=''>Email</th>
                <th scope='col' class=''>Department group</th>
                <th scope='col' class=''>Address</th>
              </tr>
            </thead>

            <tbody>
              ";
              if (empty($data['res'])) {
              $content .= "<h5 class='border-left border-dark text-danger m-3 mb-5 pl-3 '>
                There is currently no information available about this user !
              </h5>";
              }
              foreach ($data['res'] as $d) {
              $content .= "<tr scope='row'>";
                $content .= "<td>{$d['first_name']}</td>";
                $content .= "<td>{$d['last_name']}</td>";
                $content .= "<td>{$d['phone']}</td>";
                $content .= "<td>{$d['local_phone']}</td>";
                $content .= "<td>{$d['email']}</td>";
                $content .= "<td>{$d['dep_name']}</td>";
                $content .= "<td>{$d['address']}</td>";
                $content .= "</tr>";
              }

              $content .= "
            </tbody>
          </table>
      </div>

      <div id=''>
        <a href='search' class='btn btn-success'>New Search</a>
      </div>

</div>
"
;

$this->layout($content);