<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";
//각 변수에 write.php에서 input name값들을 저장한다
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');

if($title && $content){
$sql = mq("INSERT INTO board(title, author, data, content) VALUES('".$title."','관리자','".$date."', '".$content."')");
echo "<script>
alert('글쓰기 완료되었습니다.');
location.href='notice.php';</script>";
}else{
echo "<script>
alert('글쓰기에 실패했습니다.');
history.back();</script>";
}
?>
