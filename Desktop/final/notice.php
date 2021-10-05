<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>공지사항</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

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
  </head>
  <style>
  th{
    padding-top: 7px;
    padding-bottom: 7px;
    padding-left: 20px;
    padding-right: 25px;
    font-size: 22px;
  }
  tr{
     border-collapse:collapse;
     border:1px   #F5F5F5 solid;
  }
  #text{
    padding: 12px;
    padding-left: 8px;
    font-size: 15px;
  }
  #text1{
    padding-left: 30px;
    font-size: 15px;
  }
  .main{
    padding-top: 50px;
    padding-bottom: 50px;
  }
  thead {
    background-color:    #F5F5F5;
  }
.wbtn{
  padding: 15px;
  color:#fff;
  font-size: 20px;
  background-color: #000;
  width: 100px;
  height: 50px;
}
.wbtn:hover{
color:  #000;
background-color:  #C0C0C0;
text-decoration: none;
}
  </style>
  <?php include "header2.php"; ?>


    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/sky.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">공지사항</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">홈 <i class="ion-ios-arrow-forward"></i></a></span> <span>공지사항 <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

       <div class="container">
        <div class="main">
        <table class="list-table">
           <thead>
               <tr>
                     <th style="text-align:center"; width="500">Title</th>
                     <th style="text-align:center"; width="200">Writer</th>
                     <th style="text-align:center"; width="200">Date</th>
                     <th style="text-align:center"; width="200">View</th>
                 </tr>
             </thead>
             <?php
              $sql = mq("select * from board");
              $row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
              $list = 10; //한 페이지에 보여줄 개수
              $sql2 = mq("select * from board order by num desc limit $list");
                           while($board = $sql2->fetch_array()){
                           $title=$board["title"];

             ?>
             <tbody>
       <tr>
         <td id="text" style="text-align:center"; width="600"><?php
             $boardtime = $board['data']; //$boardtime변수에 board['date']값을 넣음
             $timenow = date("Y-m-d"); //$timenow변수에 현재 시간 Y-M-D를 넣음
 ?>
       <a href='/read.php?num=<?php echo $board["num"]; ?>'><?php echo $title;?>

         <td id="text" style="text-align:center"; width="200"><?php echo $board['author']?></td>
         <td id="text" style="text-align:center"; width="200"><?php echo $board['data']?></td>
         <td id="text" style="text-align:center"; width="200"><?php echo $board['view']?></td>
       </tr>
     </tbody>
     <?php } ?>
           </table>     <br><br>
           <?php
           if (isset($_SESSION['userid'])){
                $userid = $_SESSION['userid'];
                       if($userid == "admin"){?>
                         <div align="right" >
                         <a class = "wbtn" href="/write.php">Write</a>
                         </div>
                     <?php } }?>
         </div>

       </div>

  <?php include_once 'footer.php'; ?>
