<meta charset="utf-8" />
<?php

include "../db.php";
include "../password.php";

$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);

$sql = mq("UPDATE member set pw='".$userpw."' where id = '".$_SESSION['uid']."'");
session_destroy();
echo "<script>alert('You have changed your password'); location.href='/index.php';</script>";

?>
