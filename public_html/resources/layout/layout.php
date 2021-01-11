<!DOCTYPE html>
<html lang='en'>

<head>
  <title>Phone Book Application</title>

  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../vendor/components/font-awesome/css/all.min.css">
  <link rel='stylesheet' href='../../public/librarys/css/layout.css'>
</head>

<body id='top_of_page'>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="../home/search">Metaco Group</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">

          <a class="nav-link" href="../home/search">
            <span class="fas fa-home pr-2"></span>Home
            <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contact/show">
            <span class="fas fa-phone pr-2"></span>Contact
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../aboutus/show">
            <span class="fas fa-info pr-2"></span>About App
          </a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../home/loginForm">
            <span class="fas fa-sign-in-alt pr-2"></span>Sign in Managment section
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main body -->
  <main class='container my-5' role="main">
    <div class='row justify-content-center'>
      <div class='col-12'>
        <div class="card ">
          {content}
        </div>
      </div>
    </div>
  </main>

  <!-- Placed at the end of the document so the pages load faster -->
  <script src="../../public/librarys/js/jquery-3.2.1.min.js" type='text/javascript'></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  </script>
</body>

</html>