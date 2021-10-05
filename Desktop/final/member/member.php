<?php
	include "/db.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href = "member.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<title>Register</title>
<script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
<script>
$(document).ready(function(e) {
	$(".check").on("keyup", function(){ //check라는 클래스에 입력을 감지
		var self = $(this);
		var userid;

		if(self.attr("id") === "userid"){
			userid = self.val();
		}

		$.post( //post방식으로 id_check.php에 입력한 userid값을 넘깁니다
			"id_check.php",
			{ userid : userid },
			function(data){
				if(data){ //만약 data값이 전송되면
					self.parent().parent().find("div").html(data); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
					self.parent().parent().find("div").css("color", "#F00"); //div 태그를 찾아 css효과로 빨간색을 설정합니다
				}
			}
		);
	});
});
</script>
</head>
<body>
		<form method="post" class="wrapper fadeInDown" action="member_ok.php" name="memform">
			<div id = "formContent">
				<h1 class="register">Register</h1>
				<fieldset class="table">
						<table frame="void">
							<tr>
								<td>ID</td>
								<td><input type="text" name="userid" id="userid" class="check" placeholder="id" required>
								<div id="id_check">Your ID will be scanned in real time.</div></td>
							</tr>
							<tr>
								<td>PASSWORD</td>
								<td><input type="password" name="userpw" placeholder="password" required></td>
							</tr>
							<tr>
								<td>NAME</td>
								<td><input type="text" name="name" placeholder="name" required></td>
							</tr>
							<tr>
								<td>ADDRESS</td>
								<td><input type="text" name="address" placeholder="address" required></td>
							</tr>
							<tr>
								<td>PHONE</td>
								<td><input type="text" name="phonenum" placeholder="PHONENUMBER" required></td>
							</tr>
							<tr>
								<td>EMAIL</td>
								<td><input type="text" name="email" placeholder="Email" required>@<select name="emaddress"><option value="naver.com">naver.com</option><option value="nate.com">gmail.com</option><option value="hanmail.com">hanmail.com</option></select></td>
							</tr>
						</table>
						<br><br>
					<input type="submit" value="JOIN MEMBERSHIP" />
			</fieldset>
			</div>
		</form>
</body>
</html>
