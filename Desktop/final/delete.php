<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

$bno = $_GET['num'];
$sql = mq("delete from board where num='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");
location.href='notice.php';</script>
