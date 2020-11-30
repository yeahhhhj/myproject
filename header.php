
<?php 
    session_start();
    ?>


<style>
.collapse navbar-collapse justify-content-between navbar-nav ml-auto
{ padding: 40px 20px; margin-left: 10px; }   
</style>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>1 DAY CNASS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link rel="stylesheet" href = "css/style.css">
        <link rel="stylesheet" href = "css/hf.css">

    <body class="page">

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">1 DAY CNASS</a>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                  <div class="navbar-nav ml-auto">
                      <li><a href="ABOUT.php">About</a></li>
                      <li><a href="mainclass.php">1Day Class</a></li>
                      <?php 
                        if (isset($_SESSION["username"])){
                          echo "<li><a href='mypage.php'>mypage</a></li>";
                          echo "<li><a href='logout.php'>Logout</a></li>";
                        }
                        else{
                          echo "<li><a href='login.php'>Login</a></li>";
                          echo "<li><a href='register.php'>Sign up</a></li>";
                        }
                          
                          ?>
                      
                  </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
