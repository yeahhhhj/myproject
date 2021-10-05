<?php
// 채용정보 url
$url = "http://apis.data.go.kr/B551182/pubReliefHospService/getpubReliefHospList?ServiceKey=gUFkRpx9X9Z6kIOuDJXw1QpxX4SyFXT3OWXWqKQdYS9VjvCkMwu4G2F1CjMJW5mDdUY8h2CXjS6l6xWn1TgxIw%3D%3D&pageNo=1&numOfRows=10&spclAdmTyCd=A0";

// 채용정보 각각의 요청변수들 - 광주광역시, 15개불러오기, 고령자
//$var = "?authKey=gUFkRpx9X9Z6kIOuDJXw1QpxX4SyFXT3OWXWqKQdYS9VjvCkMwu4G2F1CjMJW5mDdUY8h2CXjS6l6xWn1TgxIw%3D%3DgUFkRpx9X9Z6kIOuDJXw1QpxX4SyFXT3OWXWqKQdYS9VjvCkMwu4G2F1CjMJW5mDdUY8h2CXjS6l6xWn1TgxIw%3D%3D&returnType=xml&startPage=&display=15&callTp=L&region=29000&pref=B&occupation=&education=&empTpGb=&career=&salTp=&minPay=&maxPay=&keyword=";

$data = file_get_contents($url);
$xml  = simplexml_load_string($data);


// 전체적인 내용 출력
echo "<pre>";
print_r($xml);
echo "</pre>";

// 반복되는 부분중에 그 특정내용 태그만 뽑아오기
foreach ($xml->wanted as $obj) {
    echo "시도명 : " . $obj->sidoNm . "<br>";
    echo "기관명 : " . $obj->yadmNm . "<br><br>";
}
?>
