<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>dashborad</title>


    <link rel = "stylesheet" type = "text/css" href = "<?=base_url('assets/css/bootstrap.min.css'); ?> ">



</head>
  <body>
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dashborad</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href = <?= base_url('login/logout'); ?>>Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
