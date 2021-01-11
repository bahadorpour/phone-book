<?php


$contentAdmin = 
"
<script src='../../public/librarys/js/jquery-3.2.1.min.js'></script>
<script src='../../public/librarys/js/sweetalert.min.js'></script>

<script>
  $(function () {
    $('[data-toggle=\'tooltip\']').tooltip();

    //delete Record with AJAX and sweet alert
    $('a.delete').on('click', function (e) {
      e.preventDefault();

      Swal.fire({
        title: 'Are you sure?',
        text: 'You will not be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: `Yes, delete it!`,
        denyButtonText: `Cancel`,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire({
            text: 'The person has been deleted.',

            icon: 'success',
            showConfirmButton: false,
            timer: 4000
          });

          $.ajax({
            url: 'del',
            method: 'get',
            data: {
              data_id: $(this).parent().parent().attr('data-id')
            },
            success: function (response) {
              $(\"tr[data-id=\"+ response +\"]\").remove();
                    }
          })

        } else if (result.isDenied) {
          Swal.fire('The person was not removed!', '', 'info')
        }
      });
    });

    //edit record with AJAX and JSON
    $('a.edit').on('click', function (e) {
      //        e.preventDefault();
      $.ajax({
        url: 'findMemberID',
        method: 'get',
        dataType: 'JSON',
        data: {
          data_id: $(this).parent().parent().attr('data-id')
        },
        success: function (response) {
        }
      })
    })

    //filter (search) records in inputbox
    $('#filter').on('keyup', function () {
      var uinp = $(this).val().toLowerCase();

      $('tbody > tr').each(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(uinp) != -1);
      })
    })

  });
</script>

<strong class='card-header text-center'>
  <div class='row d-flex align-items-center'>
    <div class='col'>
      <span class='fas fa-user-check text-warning'></span><span class='mr-3'> Search</span>
      <span class='fas fa-user-plus text-success'></span><span class='mr-3'> Add</span>
      <span class='fas fa-user-edit text-info'></span><span class='mr-3'> Edit</span>
      <span class='fas fa-user-alt-slash text-danger'></span><span class='mr-3'> Delete</span>
    </div>

    <div class='col-4 ml-auto'>
      <a href='insertMemberForm' class='col-12 btn btn-outline-success'>
        <span class='fas fa-plus'></span><span> Add New Member</span></a>
    </div>
  </div>
</strong>

<div class='card-body'>
  <div class='row justify-content-center'>
    <div class='col-11 my-3'>
      <div class='form-row'>
        <div class='col mb-3'>
          <label for='memFname'>Search Users</label>
          <div class='input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text'>
                <span class='fas fa-search text-warning'></span>
              </span>
            </div>
            <input placeholder='Search' class='form-control' id='filter' type='text'>
          </div>
        </div>
      </div>
    </div>

    <div class='table-responsive'>
      <table class='table table-hover table-bordered'>
        <thead>
          <tr class='text-center'>
            <th scope='col'>#</th>
            <th scope='col'>Name</th>
            <th scope='col'>Family</th>
            <th scope='col'>Phone Nr.</th>
            <th scope='col'>Internal Nr.</th>
            <th scope='col'>Email</th>
            <th scope='col'>Departmant Group</th>
            <th scope='col'>Address</th>
            <th scope='col'>Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
          ";
          $count = 1;
          foreach ($data['res'] as $d) {
          $contentAdmin .= "<tr scope='row' data-id={$d['mem_id']}>";
            $contentAdmin .= "<td>{$count}</td>";
            $contentAdmin .= "<td>{$d['first_name']}</td>";
            $contentAdmin .= "<td>{$d['last_name']}</td>";
            $contentAdmin .= "<td>{$d['phone']}</td>";
            $contentAdmin .= "<td>{$d['local_phone']}</td>";
            $contentAdmin .= "<td>{$d['email']}</td>";
            $contentAdmin .= "<td>{$d['dep_name']}</td>";
            $contentAdmin .= "<td>{$d['address']}</td>";
            $contentAdmin .= "
            <td class='text-center'>
              <a href='editMemberForm' class='text-info edit mr-3' data-toggle='tooltip' data-placement='bottom'
                title='Edit'>
                <span class='fas fa-pencil-alt'></span>
              </a>

              <a href='#' class='text-danger text-left delete' data-toggle='tooltip' data-placement='bottom'
                title='Delete'>
                <span class='fas fa-trash-alt text-left'></span>
              </a>
            </td>
            ";
            $contentAdmin .= "
          </tr>";
          $count++;
          }

          $contentAdmin .= "
        </tbody>
      </table>
    </div>
  </div>
</div>
"
;
$this->layoutAdmin($contentAdmin);