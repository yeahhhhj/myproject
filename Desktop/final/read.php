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
  .postcard {
    position: absolute;
    bottom: 100px;
    right: 18px;
    width: 250px;
    font-size: 20px;
    color: black;
  }
  .card{
    padding-left:20px;
    padding-right: 20px;
  }
  .main{
    padding-top: 50px;
    padding-bottom: 50px;
  }
  #content{
    font-size: 23px;
  }
  #content_info{
    font-size: 13px;
    color: black;
  }
  .title{
    font-size: 30px;
    padding-left: 20px;
    padding-right: 20px;
  }
  .btnback{
  position: absolute;
  bottom: 30px;
  right: 30px;
  width: 100px;
  height: 50px;
  background-color:  #000;
  border:none;
  text-align: center;
  padding-top: 10px;
  color:#fff;
  font-size: 20px;
  float : left;
}
.btnback:hover{
  color:  #000;
  background-color:  #C0C0C0;
  text-decoration: none;
}
.btnback1{
position: absolute;
bottom: 30px;
left: 30px;
width: 100px;
height: 50px;
background-color:  #000;
border:none;
text-align: center;
padding-top: 10px;
color:#fff;
font-size: 20px;
float : left;
}
.btnback1:hover{
  color:  #000;
  background-color:  #C0C0C0;
  text-decoration: none;
}
.btnback2{
position: absolute;
bottom: 30px;
left: 150px;
width: 100px;
height: 50px;
background-color:  #000;
border:none;
text-align: center;
padding-top: 10px;
color:#fff;
font-size: 20px;
float : left;
}
.btnback2:hover{
  color:  #000;
  background-color:  #C0C0C0;
  text-decoration: none;
}
.c_left{
  padding-left: 20px;
  padding-right: 20px;

  float: left;
}
.c_right{
  float:right;
}
  </style>
  <?php include "header2.php"; ?>


    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/sky.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">글 보기</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">홈 <i class="ion-ios-arrow-forward"></i></a></span> <span>공지사항 <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <?php
    		$bno = $_GET['num']; /* bno함수에 idx값을 받아와 넣음*/
    		$hit = mysqli_fetch_array(mq("select * from board where num ='".$bno."'"));
        $hit = $hit['view'] + 1;
		    $fet = mq("update board set view = '".$hit."' where num = '".$bno."'");
    		$sql = mq("select * from board where num='".$bno."'"); /* 받아온 idx값을 선택 */
    		$board = $sql->fetch_array();
    	?>
    	<div class="container">
        <div class="main">
        <div class="card">
        <div id="board_read">
  	<br>
  	 <h1 class="title"><?php echo $board['title']; ?></h1>
     <hr>
  	<br>
  			<div id="content">
          <div class="c_left" >
  			  <?php echo nl2br("$board[content]"); ?>
          <br><br><br>
          <br><br><br>
          <?php
          if (isset($_SESSION['userid'])){
               $userid = $_SESSION['userid'];
                      if($userid == "admin"){?>
                        <a class="btnback1" href="/modify.php?num=<?php echo $board['num']; ?>">수정</a>
                        <a class="btnback2" href="/delete.php?num=<?php echo $board['num']; ?>">삭제</a>
                    <?php } }?>

  			</div>
        <div class="c_right">
        <div class="postcard">
       <div class="post-info card m-3 p-3">
       		  <p id="content_info">DATE : <?php echo $board['data']; ?><br>
       			Writer : <?php echo $board['author'];?><br>
            View : <?php echo $board['view'];?></p>
       			</div>
          </div>
          <br><br><br>
            <a class="btnback" href="/notice.php">≡ 목록</a>
            &nbsp;
       </div>
     	</div>
  </div>
</div>

</div>
</div>

<?php include "footer.php"; ?>
