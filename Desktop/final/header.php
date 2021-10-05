<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>닥터닥터</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


  </head>
  <body>
     <div class="container" style="padding-top : 20px;">
      <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
          <div class="col-md pr-4 d-flex topper align-items-center" style='text-align: right;'>
            <span style='text-align: right;' class='text' >
            <?php
              if (isset($_SESSION['userid'])){
                echo "<a style='color: black;' href='/member/mypage.php'>mypage &nbsp </a>";
                echo "<a style='color: black;' href='/member/logout.php'>Logout</a>";
              }
              else{
                echo "<a style='color: black;' href='login.php'>Login &nbsp </a>";
                echo "<a style='color: black;'  href='/member/member.php'>Sign up</a>";
              }
                ?>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
              <hr>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar" style="height : 70px; padding-bottom : 10px;">
       <div class="container d-flex align-items-center">
         <a class="navbar-brand" href="index.php">DoctorDoctor</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="oi oi-menu"></span> Menu
         </button>
         <div class="collapse navbar-collapse" id="ftco-nav">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item"><a href="about.php" class="nav-link pl-0">소개</a></li>
             <li class="nav-item"><a href="hospital.php" class="nav-link">병원</a></li>
             <li class="nav-item"><a href="public.php" class="nav-link">국민안심병원</a></li>
             <li class="nav-item"><a href="covid.php" class="nav-link">선별진료소</a></li>
			 <li class="nav-item"><a href="vaccine.php" class="nav-link">백신접종센터</a></li>
             <li class="nav-item"><a href="drug.php" class="nav-link">약국</a></li>
             <li class="nav-item"><a href="notice.php" class="nav-link">공지사항</a></li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">응급처치</a>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="emergency.php">응급처치 개요</a>
                 <a class="dropdown-item" href="emergency_situation.php">응급상황 대처요령</a>
                 <a class="dropdown-item" href="emergency_basic.php">기본 응급처치</a>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </nav>
      <!-- END nav -->
