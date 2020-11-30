<?php

// 1. DB 연결 설정
$mysql_hostname = '127.0.0.1';
$mysql_username = 'USERNAME';
$mysql_password = 'PASSWORD';
$mysql_database = 'DATABASE_NAME';
$mysql_port = '3306';
$mysql_charset = 'UTF8';

// 2. DB 연결
$connect = new mysqli("localhost","root","1819","post_board", '3306', 'UTF8');

if($connect->connect_errno){
    echo '[연결실패..] : '.$connect->connect_error.'';
}else{
    echo '[연결성공!]'.'<br>';
}

// 3. 문자셋 지정
if(!$connect->set_charset($mysql_charset)){
    echo '[문자열 변경실패..] : '.$connect->connect_error;
}else{
    echo '[문자열 변경성공!]'.'<br>';
}

echo "<pre>";
echo print_r($connect);
echo "</pre>";

// 4. 쿼리 생성
$query = "select * from 테이블명";

// 5. 쿼리 실행
$result = $connect->query($query) or die($this->_connect->error);

// 6. 결과 처리
while ($row = $result->fetch_array()){
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}

// 또는
foreach($result as $row){
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}

// 7. 연결 종료
$connect->close();
echo '[연결 종료...]';

?>
