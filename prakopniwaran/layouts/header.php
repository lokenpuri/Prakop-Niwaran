<?php session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/main.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

</body>
</html>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
         <div class="navbar-brand">
            <a href="index.php" >
                <img src="assets/images/logopn.png" style="padding-bottom: 10px;" alt="">
            </a>
        </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home<span class="sr-only">(current)</span></a></li>
         <li><a href="donations.php">Donation</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Disasters<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="earthquake.php">Earthquake</a></li>
            <li><a href="flood.php">Flood</a></li>
            <li><a href="landslide.php">Landslide</a></li>
           
          </ul>
        </li>
         <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        
 </ul>
        
      <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['usr_id'])) { ?>
        <li><h5 class="navbar-text" style="color: #ffffff; padding-top: 4px;"><?php echo $_SESSION['usr_name']; ?></h5></li>
        <li><a href="logout.php">Logout</a></li>
        <?php } else { ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Sign Up</a></li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>