<?php
	include "../db.php";
	if(isset($_SESSION['userid'])){
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href = "member.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<title>My page</title>
<style>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {text-align:center; width:500px; margin-top:30px; }
</style>
</head>
<body>
	<div method="post" class="wrapper fadeInDown" action="member_ok.php" name="memform">
		<div id="formContent" class="find">
		<form method="post" action="member_update.php">
			<?php
				$sql = mq("SELECT * from member where id='{$_SESSION['userid']}'");
				while($member = $sql->fetch_array()){
					?>
				<fieldset class = "table">
					<legend class="register">My page</legend>
						<table>
							<tr>
								<td>ID</td>
								<td><input type="text" size="35" name="userid" value="<?php echo $_SESSION['userid'];?>" disabled></td>
							</tr>
							<tr>
								<td>PASSWORD</td>
								<td><input type="password" size="35" name="userpw" placeholder="PASSWORD"></td>
							</tr>
							<tr>
								<td>NAME</td>
								<td><input type="text" size="35" name="name" placeholder="NAME" value="<?php echo $member['name']; ?>"></td>
							</tr>
							<tr>
								<td>ADDRESS</td>
								<td><input type="text" size="35" name="address" placeholder="ADDRESS" value="<?php echo $member['address']; ?>"></td>
							</tr>
							<tr>
								<td>PAHONE NUMBER</td>
								<td><input type="text" name="phonenum" placeholder="PHONE NUMBER"></td>
							</tr>
							<tr>
								<td>EMAIL</td>
								<td><input type="text" name="email" placeholder="EMAIL" value="<?php echo $member['email']; ?>"></td>
							</tr>
						</table>
					<input type="submit" value="Information change" />
			</fieldset>
			<?php } ?>
			</div>
		</form>
</body>
</html>
<?php }else{
	echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
}
