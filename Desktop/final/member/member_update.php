<meta charset="utf-8" />
<?php

include "../db.php";
include "../password.php";

$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$username = $_POST['name'];
$address = $_POST['address'];
$phonenum = $_POST['phonenum'];

$sql = mq("update member set pw='".$userpw."', name='".$username."', address='".$address."',phonenum='".$phonenum."',email='".$_POST['email']."' where id='".$_SESSION['userid']."'");
echo "<script>alert('The information change is complete.'); location.href='../index.php';</script>";

?>
