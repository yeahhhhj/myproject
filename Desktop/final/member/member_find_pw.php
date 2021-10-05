<meta charset="utf-8" />
<?php
	include "../db.php";

	$phonenum = $_POST['phonenum'];
	$userid = $_POST['userid'];
	$email = $_POST['email'].'@'.$_POST['emaddress'];
if($userid == ""){
		echo '<script> alert("Please enter an entry"); history.back(); </script>';
	}else{


$sql = mq("select * from member where phonenum = '{$phonenum}' && id='{$userid}' && email = '{$email}'");
$result = $sql->fetch_array();

if($result["id"] == $userid){
	$_SESSION['uid'] = $userid;
	echo "<script>alert('Change your password.'); location.href='member_pw_update.php';</script>";

}else{
	echo "<script>alert('This account does not exist.'); history.back();</script>";

}
}
?>
