<?php
  include "../db.php";
  if(isset($_SESSION['userid'])){
    echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
  }else{ ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href = "memberfind.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<title>Find Member Account</title>
<style>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {text-align:center; width:650px; margin-top:30px; }
</style>
</head>
<body>
  <div class="find">
    <form method="post" action="member_find_id.php">
      <h1 class ="register">Find Member Account</h1><br><br>
        <div class="wrapper fadeInDown">
          	<div id="formContent">
          <legend class="find2"><br>Find ID</legend> <br>
            <table>
              <tr>
                <td>Name</td>
                <td><input type="text"  name="name" placeholder="NAME" required></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="Email" required>@<select name="emaddress"><option value="naver.com">naver.com</option><option value="nate.com">gmail.com</option><option value="hanmail.com">hanmail.com</option></select></td>
              </tr>
            </table> <br>
          <input type="submit" value="Submit" />
        <br><br></div>
      </div>
    </form>
  </div><br><br>
  <div class="find">
      <form method="post" action="member_find_pw.php">
        <div class="wrapper fadeInDown">
        <div id="formContent">
          <legend class="find2"><br>Find PW</legend> <br>
            <table>
              <tr>
                <td>PHONE NUMBER</td>
                <td><input type="text" name="phonenum" placeholder="PHONE NUMBER" required>
              </tr>

              <tr>
                <td>ID</td>
                <td><input type="text"  name="userid" id="userid" class="check" placeholder="ID" required></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="Email" required>@<select name="emaddress"><option value="naver.com">naver.com</option><option value="nate.com">gmail.com</option><option value="hanmail.com">hanmail.com</option></select></td>
              </tr>

            </table> <br>
          <input type="submit" value="Submit" />
        <br><br></div>
      </div><br><br>
    </form>
  </div>
</body>
</html>
<?php } ?>
