<?php
	include "../db.php";
	include "../password.php";

	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$address = $_POST['address'];
	$phonenum = $_POST['phonenum'];
	$email = $_POST['email'].'@'.$_POST['emaddress'];

$sql = mq("insert into member (id,pw,name,address,phonenum,email) values('".$userid."','".$userpw."','".$username."','".$address."','".$phonenum."','".$email."')");

?>
<meta charset="utf-8" />
<script type="text/javascript">alert('Your membership has been completed.');</script>
<meta http-equiv="refresh" content="0 url=/">
