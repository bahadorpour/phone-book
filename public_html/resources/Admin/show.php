<?php
$contentAdmin = "
<strong class='card-header text-center'>
  <span>Dear </span>
  <span style='color: hotpink;'>{$_SESSION["username"]}</span>
  <span> ,welcome to management page</span>
</strong>

<div class='card-body'>
  <div class='row justify-content-center'>
    <div class='col-lg-6 col-md-6'>
      <div class='card border-success mb-3'>
        <div class='card-body'>
          <a href='accounts' class='text-success'>
            <h5 class='card-title p-3 text-white bg-success'>
              <span class='fas fa-user-cog'></span>
              <span>Users Information & Modify </span>
            </h5>
            <p class='card-text'>
              View, edit or delete users.
            </p>
          </a>
        </div>
      </div>
    </div>

    <div class='col-lg-6 col-md-6'>
      <div class='card mb-3'>
        <div class='card-body'>
          <h5 class='card-title border p-3'>
            <span class='fas fa-laptop-code'></span>
            <span> Other features </span>
          </h5>
          <p class='card-text'>
            This section will be completed soon... :)
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
";
$this->layoutAdmin($contentAdmin);