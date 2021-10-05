<?php
include "../db.php";
if($_POST["name"] == "" || $_POST["email"] == ""){
		echo '<script> alert("Please enter an entry"); history.back(); </script>';
	}else{

	$username = $_POST['name'];
	$email = $_POST['email'].'@'.$_POST['emaddress'];


$sql = mq("select * from member where name = '{$username}' && email = '{$email}'");
$result = $sql->fetch_array();

if($result["name"] == $username){
	echo "<script>alert('Your ID is: ".$result['id']."'); history.back();</script>";
}else{
echo "<script>alert('This account does not exist.'); history.back();</script>";
}
}
?>
