<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

$bno = $_GET['num'];
$title = $_POST['title'];
$content = $_POST['content'];
$sql = mq("update board set title='".$title."',content='".$content."' where num='".$bno."'"); ?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=read.php?num=<?php echo $bno; ?>">
