<?php
  include "../db.php";
  if(isset($_SESSION['userid'])){
    echo "<script>alert('It's a wrong approach.'); history.back();</script>";
  }else{ ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href = "member.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<title>Change password</title>
<style>
* {margin: 0 auto;}
.find {text-align:center; width:650px; margin-top:30px; }
</style>
</head>
<body>
  <div method="post" class="wrapper fadeInDown" action="member_ok.php" name="memform">
   <div id="formContent" class="find">
    <form method="post" action="member_pw_update_ok.php">
      <h1 class = "register">Change password</h1><br><br>
        <fieldset class="table">
          <legend></legend>
            <table>
              <tr>
                <td>Change password</td>
                <td><input type="password" size="35" name="pw" placeholder="New Password"></td>
              </tr>
            </table><br>
          <input type="submit" value="Change" />
        </fieldset>
    </form>
</div>
</div>
</body>
</html>
<?php } ?>
