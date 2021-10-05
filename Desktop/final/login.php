<?php   include "/db.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href = "member/login.css">
</head>

<body>
	<div class="wrapper fadeInDown">
			<div id="formContent">
			<form method="post" action="/member/login_ok.php">
				<br><br>
				<input type="text" class="fadeIn second" name="userid" placeholder="userid"><br>
				<input type="password" class="fadeIn third" name="userpw" placeholder="password">
				<br><br><input type="submit" class="fadeIn fourth" value="Log In">

				<div id="formFooter">
	      <a class="underlineHover" href="/member/member.php">Would you like to sign up as a member?</a>
				<br><br><a href="/member/member_find.php"class="underlineHover" >Find your Account?</a>
				</div>
  </form>
</div>
</div>
</body>
</html>
