<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud Simples em PHP</title>

  <!-- Bootstrap CDN
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  -->

  <!-- Optional theme
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  -->

  <!-- METRO DESIGN by cosmo bootswatch http://bootswatch.com/cosmo/ -->
  <link href="metro/bootstrap.min.css" rel="stylesheet"/>

  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <?php
      include 'menu.php';
      ?>
      <div class="container" style="margin-top:60px;">

        <?php
        if ($_SESSION['messagem']!=null){
          echo "<div class='col-md-10 col-md-offset-1'>
          <p class='alert alert-success'><span class='glyphicon glyphicon-ok'></span> {$_SESSION['messagem']}</p>
        </div>";
        $_SESSION['messagem']=null;
        }
        
