<?php include "db.php"; ?>
<?php
	$bno = $_GET['num'];
	$sql = mq("select * from board where num='$bno';");
	$board = $sql->fetch_array();
 ?>
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
  .card {
    padding-left: 20px;
    padding-right: 20px;
  }
  .main {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  .btnback{
  position: absolute;
  bottom: 30px;
  right: 30px;
  width: 100px;
  height: 50px;
  background-color:  #C0C0C0;
  border:none;
  text-align: center;
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
background-color:  #C0C0C0;
border:none;
text-align: center;
padding-top: 7px;
color:#fff;
font-size: 20px;
float : left;
}
.btnback1:hover{
  color:  #000;
  background-color:  #C0C0C0;
  text-decoration: none;
}
#in_title{
  padding-top:40px;
  padding-left:40px;
  padding-right: 40px;
  font-size: 25px;
}
#in_content{
  padding-left:40px;
  padding-right: 40px;
  font-size: 20px;
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

  <div class="container">
    <div class="main">
      <div class="card">
        <div id="board_write">
          <div id="write_area">
            <form action="modify_ok.php?num=<?php echo $bno; ?>" method="post">
              <div id="in_title">
                <h3>제목  </h3>
                <input type="text" id="utitle" name="title" class="form-control" value="<?php echo $board['title']; ?>" maxlength="100" required>
                           </div>
              <div id="in_content">
                <h3><br>내용</h3>
                <textarea id="content" name="content" rows="10" class="form-control" placeholder="Contents" required><?php echo $board['content']; ?></textarea>
                <br><br><br>
</div>
              <a class="btnback1" href="/notice.php">cancle</a>
              <button type="submit" class="btnback">Edit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


	<?php include "footer.php"; ?>
