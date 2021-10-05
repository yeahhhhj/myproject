<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>닥터닥터</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=6juihtviug"></script>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">

  <style>
  @import url(http://fonts.googleapis.com/earlyaccess/notosanskr.css);
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }
    body {
      font-family: "Noto Sans KR";
    }
    .container {
      width: 99.9%;
      border-radius: 4px;
      border-spacing: 0;
      margin-bottom: 20px;
    }
    .container tr {
      height: 46px;
    }
    .container tr td {
      width: 33.3%;
      border-top: 1px solid #dddddd;
      border-bottom: 1px solid #dddddd;
      padding: 10px 2px;
      text-align: center;
      color: #dddddd;
      font-size:13px;
      font-weight:500;
    }
    .container tr td:first-child {
      border-top-left-radius: 3px;
      border-bottom-left-radius: 3px;
      border-left: 1px solid #dddddd;
    }
    .container tr td:last-child {
      border-right: 1px solid #dddddd;
      border-left: 1px solid #dddddd;
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px;
    }
    td.--active {
      border: 1px solid #5b7684 !important;
      color: #5b7684 !important;
    }
    .facility-image1 {
      background-size: cover;
      background-color: #dddddd;
    }

    #sidetitle{
      font-size: 14px;
      padding-top: 7px;
    }
    #sidedata1{
      font-size: 12px;
    }
    #sidedata2{
      font-size: 12px;
      padding-bottom: 7px;

    }
    button{
      width: 100%;
      color: #000;
      background: rgba(255,255,255,0.7);
      font-size:2em;
      border-radius:0.1em;
      padding:5px 20px;
      border: 1px solid #D5D5D5;
    }
 button:hover {
   background: rgba(50,50,50,0.7);
   color: #fff;
 }

 button:active{
    border: none;
    outline:none;
    }
    #null_msg{
      font-size: 15px;
      padding-bottom: 30px;
      padding-top: 30px;
      text-align: center;
      background: rgba(255,255,255,0.7);
      color: #000;
    }
    #set{
      position: absolute;
      top: 30px;
      right: 30px;
      z-index: 1;
    }
    #deleteall{
      position: absolute;
      top: 60px;
      right: 30px;
      z-index: 1;
    }
    /* 지도 관련 */
    .placeinfo_wrap {position:absolute;bottom:40px;left:-150px;width:300px;}
    .placeinfo {position:relative;width:100%;border-radius:6px;border: 1px solid #ccc;border-bottom:2px solid #ddd;padding-bottom: 10px;background: #fff;}
    .placeinfo:nth-of-type(n) {border:0; box-shadow:0px 1px 2px #888;}
    .placeinfo_wrap .after {content:'';position:relative;margin-left:-12px;left:50%;width:22px;height:12px;background:url('http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/vertex_white.png')}
    .placeinfo a, .placeinfo a:hover, .placeinfo a:active{color:#fff;text-decoration: none;}
    .placeinfo a, .placeinfo span {display: block;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;}
    .placeinfo span {margin:5px 5px 0 5px;cursor: default;font-size:13px;}
    .placeinfo .title {font-weight: bold; font-size:14px;border-radius: 6px 6px 0 0;margin: -1px -1px 0 -1px;padding:10px; color: #fff;background: #258fff url(http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/arrow_white.png) no-repeat right 14px center;}
    .placeinfo .tel {color:#0f7833;}
    .placeinfo .jibun {color:#999;font-size:11px;margin-top:0;}

.map_wrap, .map_wrap * {margin:0;padding:0;font-family:'Malgun Gothic',dotum,'돋움',sans-serif;font-size:12px;}
.map_wrap a, .map_wrap a:hover, .map_wrap a:active{color:#000;text-decoration: none;}
.map_wrap {position:relative;width:100%;height:660px;}
#menu_wrap {position:absolute;top:0;left:0;bottom:0;width:300px;margin:10px 0 30px 10px;padding:5px;overflow-y:auto;background:rgba(255, 255, 255, 0.7);z-index: 1;font-size:12px;border-radius: 10px;}
.bg_white {background:#fff;}
#menu_wrap hr {display: block; height: 1px;border: 0; border-top: 2px solid #5F5F5F;margin:3px 0;}
#menu_wrap .option{text-align: center;}
#menu_wrap .option p {margin:10px 0;}
#menu_wrap .option button {margin-left:5px;}
#pagination {margin:10px auto;text-align: center;}
#pagination a {display:inline-block;margin-right:10px;}
#pagination .on {font-weight: bold; cursor: default;color:#777;}

.info {position:relative;top:5px;left:5px;border-radius:6px;border: 1px solid #ccc;border-bottom:2px solid #ddd;font-size:12px;padding:5px;background:#fff;list-style:none;margin:0;} 
.info:nth-of-type(n) {border:0; box-shadow:0px 1px 2px #888;}    
.info .label {display:inline-block;width:50px;}
.number {font-weight:bold;color:#00a0e9;} 
</style>

</head>
<?php include "header2.php"; ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/main3.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">백신접종센터</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">홈 <i class="ion-ios-arrow-forward"></i></a></span> <span>백신접종센터<i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>
 <div class="main">
    <noscript>
    <a href="http://www.enable-javascript.com/ko/" target="_blank">
    </noscript>
<div id="App">
  <div class="map_wrap">
  <div id="map" style="width:100%;height:100%;position:relative;overflow:hidden;"></div>
  <input type="button" id="set" value="재설정" onclick="setmap();"><br>
  <input type="button" id="deleteall" value="원 삭제" onclick="removeCircles()">
<div id="menu_wrap" class="bg_white"> <hr>
  <div id="side"></div>
<div id="pagination"></div>
</div>
</div>
  </div>

<span id="lat" style="display: none;">${lat}</span>
<span id="lng" style="display: none;">${lng}</span>

<script>
  const selectBox1 = document.querySelector('.box1')
  const facilityImg1 = document.querySelector('.facility-image1')
  selectBox1.addEventListener('click', (event) => {
    selectBox1.classList.add('--active');
    selectBox2.classList.remove('--active');
    selectBox3.classList.remove('--active');
    selectBox3.style.borderLeft = '1px solid #dddddd';
  });
</script>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=b939027fe7f29f88536c5b9d9969d3b9&libraries=services"></script>

<script>
  var locPosition;
  // 위도
  var latitude = 36.62928496110638;
  // 경도,
  var longitude = 127.45624353813693;
  // 동적 위도, 경도
  var dynamicLat = document.getElementById('lat').innerText;
  var dynamicLng = document.getElementById('lng').innerText;
  var posmarker = [];


  /* 반경 그리기 변수 */
  var drawingFlag = false; // 원이 그려지고 있는 상태를 가지고 있을 변수입니다
  var centerPosition; // 원의 중심좌표 입니다
  var drawingCircle; // 그려지고 있는 원을 표시할 원 객체입니다
  var drawingLine; // 그려지고 있는 원의 반지름을 표시할 선 객체입니다
  var drawingOverlay; // 그려지고 있는 원의 반경을 표시할 커스텀오버레이 입니다
  var drawingDot; // 그려지고 있는 원의 중심점을 표시할 커스텀오버레이 입니다

  var circles = []; // 클릭으로 그려진 원과 반경 정보를 표시하는 선과 커스텀오버레이를 가지고 있을 배열입니다




  // 동적 데이터가 있으면 동적 데이터를 사용
  if (dynamicLat && dynamicLng) {
    try {
      var parseLat = parseFloat(dynamicLat);
      var parseLng = parseFloat(dynamicLng);
      if (!isNaN(parseLat) && !isNaN(parseLng)) {
        latitude = parseLat;
        longitude = parseLng;
      }
    } catch(error) {}
  }
  // 마커를 클릭했을 때 해당 장소의 상세정보를 보여줄 커스텀오버레이입니다
  var placeOverlay = new kakao.maps.CustomOverlay({zIndex:1}),
      contentNode = document.createElement('div'), // 커스텀 오버레이의 컨텐츠 엘리먼트 입니다
      sidebar = document.createElement('div'), // 커스텀 오버레이의 컨텐츠 엘리먼트 입니다
      markers = [], // 마커를 담을 배열입니다
      currCategory = 'box1'; // 현재 선택된 카테고리를 가지고 있을 변수입니다

  var mapContainer = document.getElementById('map'), // 지도를 표시할 div
      mapOption = {
        center: new kakao.maps.LatLng(latitude, longitude), // 지도의 중심좌표
        level: 4 // 지도의 확대 레벨
      };

  // 지도를 생성합니다
  window.map = new kakao.maps.Map(mapContainer, mapOption);
  // 장소 검색 객체를 생성합니다
  var ps = new kakao.maps.services.Places(map);
  /*
   * 지도에 클릭 이벤트를 등록합니다.
   *
   * 커스텀 오버레이 제거
   */
  kakao.maps.event.addListener(map, 'click', function() {
    // 커스텀 오버레이 제거
    placeOverlay.setMap(null);
  });
  // 커스텀 오버레이의 컨텐츠 노드에 css class를 추가합니다
  contentNode.className = 'placeinfo_wrap';
  sidebar.className = 'menu_wrap';

  // 커스텀 오버레이의 컨텐츠 노드에 mousedown, touchstart 이벤트가 발생했을때
  // 지도 객체에 이벤트가 전달되지 않도록 이벤트 핸들러로 kakao.maps.event.preventMap 메소드를 등록합니다
  addEventHandle(contentNode, 'mousedown', kakao.maps.event.preventMap);
  addEventHandle(contentNode, 'touchstart', kakao.maps.event.preventMap);
  // 커스텀 오버레이 컨텐츠를 설정합니다
  placeOverlay.setContent(contentNode);
  // 엘리먼트에 이벤트 핸들러를 등록하는 함수입니다
  function addEventHandle(target, type, callback) {
      if (target.addEventListener) {
          target.addEventListener(type, callback);
      } else {
          target.attachEvent('on' + type, callback);
      }
  }

  // HTML5의 geolocation으로 사용할 수 있는지 확인합니다
  if (navigator.geolocation) {

      // GeoLocation을 이용해서 접속 위치를 얻어옵니다
      navigator.geolocation.getCurrentPosition(function(position) {

          var lat = position.coords.latitude, // 위도
              lon = position.coords.longitude; // 경도
          locPosition = new kakao.maps.LatLng(lat, lon); // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성합니다
          // 지도 중심좌표를 접속위치로 변경합니다
          map.setCenter(locPosition);
          searchPlaces(locPosition);
        });
  } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
         locPosition = new kakao.maps.LatLng(33.450701, 126.570667);
  }
  function setmap(){
    map.setCenter(locPosition);
  }

  // 키워드 검색을 요청하는 함수입니다
  function searchPlaces(locPosition) {

    // 장소검색 객체를 통해 키워드로 장소검색을 요청합니다
	ps.keywordSearch(  '서울 접종', placesSearchCB);
	ps.keywordSearch(  '경기 접종', placesSearchCB);
    ps.keywordSearch(  '인천 접종', placesSearchCB);
    ps.keywordSearch(  '강원 접종', placesSearchCB);
    ps.keywordSearch(  '충북 접종', placesSearchCB);
	ps.keywordSearch(  '충남 접종', placesSearchCB);
	ps.keywordSearch(  '경북 접종', placesSearchCB);
    ps.keywordSearch(  '경남 접종', placesSearchCB);
    ps.keywordSearch(  '전북 접종', placesSearchCB);
    ps.keywordSearch(  '전남 접종', placesSearchCB);
    ps.keywordSearch(  '대전 접종', placesSearchCB);
    ps.keywordSearch(  '광주 접종', placesSearchCB);
    ps.keywordSearch(  '대구 접종', placesSearchCB);
    ps.keywordSearch(  '울산 접종', placesSearchCB);
    ps.keywordSearch(  '부산 접종', placesSearchCB);
    ps.keywordSearch(  '세종 백신접종', placesSearchCB);
	ps.keywordSearch(  '청주 백신접종', placesSearchCB);
	//ps.keywordSearch(  '제주 백신접종', placesSearchCB);

  }
  // 장소검색이 완료됐을 때 호출되는 콜백함수 입니다
  function placesSearchCB(data, status, pagination) {
    if (status === kakao.maps.services.Status.OK) {
      // 정상적으로 검색이 완료됐으면 지도에 마커를 표출합니다
      displayPlaces(data);
    } else if (status === kakao.maps.services.Status.ZERO_RESULT) {
      // 검색결과가 없는경우 해야할 처리가 있다면 이곳에 작성해 주세요
    } else if (status === kakao.maps.services.Status.ERROR) {
      // 에러로 인해 검색결과가 나오지 않은 경우 해야할 처리가 있다면 이곳에 작성해 주세요
    }
  }

  kakao.maps.event.addListener(map, 'idle', function() {
    posmarker = [];
    updateMarkers(map, markers, datainfo);
  });

  function updateMarkers(map, markers, datainfo) {
    var mapbounds = map.getBounds();
    var marker;

    for (var i = 0; i < markers.length; i++) {
        marker = markers[i];

        //영역에 포함되는 마커들만 출력
        if (mapbounds.contain(marker.getPosition()) == true) {
          marker.setMap(map); // 지도 위에 마커를 표출합니다
          posmarker.push(datainfo[i]);
}
    }
    console.log(posmarker);
    updateList(posmarker);

}
document.getElementById('menu_wrap').appendChild(sidebar);

function updateList(posmarker){
  sidebar.innerHTML = "";

  for(var i=0; i<posmarker.length; i++){

  var content = ''
  + '<div id="sideinfo">'
  + '<p id="sidetitle">' + posmarker[i].place_name + '</p>';
  if (posmarker[i].road_address_name) {
    content += ''
    + '<p id="sidedata1">' + posmarker[i].road_address_name + '</p>';
  }  else {
    content += ''
    + '<p id="sidedata1">' + posmarker[i].address_name + '</p>';
  }
  content += ''
  + '<p id="sidedata2">' + posmarker[i].phone + '</p>'
  + '</div></div>';


  btn = document.createElement('button');
  btn.innerHTML=content;

  sidebar.appendChild(btn);
  (function(place) {
    btn.addEventListener("click", function(){
    displayPlaceInfo(place);
               // 링크 클릭 이벤트
               var linkList = document.getElementsByClassName('title');
               for (var index = 0; index < linkList.length; index++) {
                 linkList[index].onclick = openPlaceUrl;
               }
  });
})(posmarker[i]);
}

if(posmarker.length==0){
  var content = '<div id="null_msg">아무것도 존재하지 않습니다.</div>';
  sidebar.innerHTML = content;
  document.getElementById('menu_wrap').appendChild(sidebar);
}
}

function addbutton(place){
  kakao.maps.event.addListener
  document.getElementById('button').addEventListener("click", function(){
  console.log(place);
  displayPlaceInfo(place);
}, false);
}
var cnt =0;
var datainfo=[];
  // 지도에 마커를 표출하는 함수입니다
  function displayPlaces(places) {
cnt++;
    var listEl = document.getElementById('placesList'),
    menuEl = document.getElementById('menu_wrap'),
    fragment = document.createDocumentFragment(),
    bounds = new kakao.maps.LatLngBounds(),
    listStr = '';
    for (i=0; i < places.length; i++) {
      // 마커를 생성하고 지도에 표시합니다
      var marker = new kakao.maps.Marker({
        position: new kakao.maps.LatLng(places[i].y, places[i].x) });
      markers.push(marker);  // 배열에 생성된 마커를 추가합니다
      if(cnt < 18){
        datainfo.push(places[i]);
      }
       (function(marker, place) {
         kakao.maps.event.addListener(marker, 'click', function() {
           displayPlaceInfo(place);

           // 링크 클릭 이벤트
           var linkList = document.getElementsByClassName('title');
           for (var index = 0; index < linkList.length; index++) {
             linkList[index].onclick = openPlaceUrl;
           }
         });
       })(marker, places[i]);
    }
    if(cnt==17){
    updateMarkers(map, markers, datainfo);
  }

  }

  // 클릭한 마커에 대한 장소 상세정보를 커스텀 오버레이로 표시하는 함수입니다
  function displayPlaceInfo (place) {
    console.log("displayPlaceInfo에 있는 place:"+place);
    var content = ''
      + '<div class="placeinfo">'
      + '  <a class="title" href="javascript:void(0)" title="' + place.place_name + '" data-url="' + place.place_url + '">'
      +      place.place_name
      + '  </a>';
    if (place.road_address_name) {
      content += ''
      + '  <span title="' + place.road_address_name + '">' + place.road_address_name + '</span>'
      + '    <span class="jibun" title="' + place.address_name + '">(지번 : ' + place.address_name + ')</span>';
    }  else {
      content += ''
      + '  <span title="' + place.address_name + '">' + place.address_name + '</span>';
    }
    content += ''
      + '  <span class="tel">' + place.phone + '</span>'
      + '</div>'
      + '<div class="after"></div>';

    contentNode.innerHTML = content;
    // 이동할 위도 경도 위치를 생성합니다

    var moveLatLon = new kakao.maps.LatLng(place.y, place.x);
    // 지도 중심을 부드럽게 이동시킵니다
    // 만약 이동할 거리가 지도 화면보다 크면 부드러운 효과 없이 이동합니다
    map.panTo(moveLatLon);
    placeOverlay.setPosition(new kakao.maps.LatLng(place.y, place.x));
    placeOverlay.setMap(map);
  }

  // 장소에 대한 상세 url 페이지를 엽니다.
  function openPlaceUrl() {
    var url = this.getAttribute('data-url');
    if (window.ReactNativeWebView) {
      window.ReactNativeWebView.postMessage(url);
    } else {
      window.open(url, '_blank');
      return;
    }
  }

/* 반경 그리기 이벤트 ==> to close Script
  1. left click event
  2. mouse move detect
  3. right click event
*/
  // 지도에 클릭 이벤트를 등록합니다
kakao.maps.event.addListener(map, 'click', function(mouseEvent) {
        
        // 클릭 이벤트가 발생했을 때 원을 그리고 있는 상태가 아니면 중심좌표를 클릭한 지점으로 설정합니다
        if (!drawingFlag) {    
            
            // 상태를 그리고있는 상태로 변경합니다
            drawingFlag = true; 
            
            // 원이 그려질 중심좌표를 클릭한 위치로 설정합니다 
            centerPosition = mouseEvent.latLng; 
    
            // 그려지고 있는 원의 반경을 표시할 선 객체를 생성합니다
            if (!drawingLine) {
                drawingLine = new kakao.maps.Polyline({
                    strokeWeight: 3, // 선의 두께입니다
                    strokeColor: '#00a0e9', // 선의 색깔입니다
                    strokeOpacity: 1, // 선의 불투명도입니다 0에서 1 사이값이며 0에 가까울수록 투명합니다
                    strokeStyle: 'solid' // 선의 스타일입니다
                });    
            }
            
            // 그려지고 있는 원을 표시할 원 객체를 생성합니다
            if (!drawingCircle) {                    
                drawingCircle = new kakao.maps.Circle({ 
                    strokeWeight: 1, // 선의 두께입니다
                    strokeColor: '#00a0e9', // 선의 색깔입니다
                    strokeOpacity: 0.1, // 선의 불투명도입니다 0에서 1 사이값이며 0에 가까울수록 투명합니다
                    strokeStyle: 'solid', // 선의 스타일입니다
                    fillColor: '#00a0e9', // 채우기 색깔입니다
                    fillOpacity: 0.2 // 채우기 불투명도입니다 
                });     
            }
            
            // 그려지고 있는 원의 반경 정보를 표시할 커스텀오버레이를 생성합니다
            if (!drawingOverlay) {
                drawingOverlay = new kakao.maps.CustomOverlay({
                    xAnchor: 0,
                    yAnchor: 0,
                    zIndex: 1
                });              
            }
        }
        });
    
    // 지도에 마우스무브 이벤트를 등록합니다
    // 원을 그리고있는 상태에서 마우스무브 이벤트가 발생하면 그려질 원의 위치와 반경정보를 동적으로 보여주도록 합니다
    kakao.maps.event.addListener(map, 'mousemove', function (mouseEvent) {
            
        // 마우스무브 이벤트가 발생했을 때 원을 그리고있는 상태이면
        if (drawingFlag) {
    
            // 마우스 커서의 현재 위치를 얻어옵니다 
            var mousePosition = mouseEvent.latLng; 
            
            // 그려지고 있는 선을 표시할 좌표 배열입니다. 클릭한 중심좌표와 마우스커서의 위치로 설정합니다
            var linePath = [centerPosition, mousePosition];     
            
            // 그려지고 있는 선을 표시할 선 객체에 좌표 배열을 설정합니다
            drawingLine.setPath(linePath);
            
            // 원의 반지름을 선 객체를 이용해서 얻어옵니다 
            var length = drawingLine.getLength();
            
            if(length > 0) {
                
                // 그려지고 있는 원의 중심좌표와 반지름입니다
                var circleOptions = { 
                    center : centerPosition, 
                radius: length,                 
                };
                
                // 그려지고 있는 원의 옵션을 설정합니다
                drawingCircle.setOptions(circleOptions); 
                    
                // 반경 정보를 표시할 커스텀오버레이의 내용입니다
                var radius = Math.round(drawingCircle.getRadius()),   
                content = '<div class="info">반경 <span class="number">' + radius + '</span>m</div>';
                
                // 반경 정보를 표시할 커스텀 오버레이의 좌표를 마우스커서 위치로 설정합니다
                drawingOverlay.setPosition(mousePosition);
                
                // 반경 정보를 표시할 커스텀 오버레이의 표시할 내용을 설정합니다
                drawingOverlay.setContent(content);
                
                // 그려지고 있는 원을 지도에 표시합니다
                drawingCircle.setMap(map); 
                
                // 그려지고 있는 선을 지도에 표시합니다
                drawingLine.setMap(map);  
                
                // 그려지고 있는 원의 반경정보 커스텀 오버레이를 지도에 표시합니다
                drawingOverlay.setMap(map);
                
            } else { 
                
                drawingCircle.setMap(null);
                drawingLine.setMap(null);    
                drawingOverlay.setMap(null);
                
            }
        }     
    });     
    
    // 지도에 마우스 오른쪽 클릭이벤트를 등록합니다
    // 원을 그리고있는 상태에서 마우스 오른쪽 클릭 이벤트가 발생하면
    // 마우스 오른쪽 클릭한 위치를 기준으로 원과 원의 반경정보를 표시하는 선과 커스텀 오버레이를 표시하고 그리기를 종료합니다
    kakao.maps.event.addListener(map, 'rightclick', function (mouseEvent) {
    
        if (drawingFlag) {
    
            // 마우스로 오른쪽 클릭한 위치입니다 
            var rClickPosition = mouseEvent.latLng; 
    
            // 원의 반경을 표시할 선 객체를 생성합니다
            var polyline = new kakao.maps.Polyline({
                path: [centerPosition, rClickPosition], // 선을 구성하는 좌표 배열입니다. 원의 중심좌표와 클릭한 위치로 설정합니다
                strokeWeight: 3, // 선의 두께 입니다
                strokeColor: '#00a0e9', // 선의 색깔입니다
                strokeOpacity: 1, // 선의 불투명도입니다 0에서 1 사이값이며 0에 가까울수록 투명합니다
                strokeStyle: 'solid' // 선의 스타일입니다
            });
            
            // 원 객체를 생성합니다
            var circle = new kakao.maps.Circle({ 
                center : centerPosition, // 원의 중심좌표입니다
                radius: polyline.getLength(), // 원의 반지름입니다 m 단위 이며 선 객체를 이용해서 얻어옵니다
                strokeWeight: 1, // 선의 두께입니다
                strokeColor: '#00a0e9', // 선의 색깔입니다
                strokeOpacity: 0.1, // 선의 불투명도입니다 0에서 1 사이값이며 0에 가까울수록 투명합니다
                strokeStyle: 'solid', // 선의 스타일입니다
                fillColor: '#00a0e9', // 채우기 색깔입니다
                fillOpacity: 0.2  // 채우기 불투명도입니다 
            });
            
            var radius = Math.round(circle.getRadius()), // 원의 반경 정보를 얻어옵니다
                content = getTimeHTML(radius); // 커스텀 오버레이에 표시할 반경 정보입니다
    
            
            // 반경정보를 표시할 커스텀 오버레이를 생성합니다
            var radiusOverlay = new kakao.maps.CustomOverlay({
                content: content, // 표시할 내용입니다
                position: rClickPosition, // 표시할 위치입니다. 클릭한 위치로 설정합니다
                xAnchor: 0,
                yAnchor: 0,
                zIndex: 1 
            });  
    
            // 원을 지도에 표시합니다
            circle.setMap(map); 
            
            // 선을 지도에 표시합니다
            polyline.setMap(map);
            
            // 반경 정보 커스텀 오버레이를 지도에 표시합니다
            radiusOverlay.setMap(map);
            
            // 배열에 담을 객체입니다. 원, 선, 커스텀오버레이 객체를 가지고 있습니다
            var radiusObj = {
                'polyline' : polyline,
                'circle' : circle,
                'overlay' : radiusOverlay
            };
            
            // 배열에 추가합니다
            // 이 배열을 이용해서 "모두 지우기" 버튼을 클릭했을 때 지도에 그려진 원, 선, 커스텀오버레이들을 지웁니다
            circles.push(radiusObj);   
        
            // 그리기 상태를 그리고 있지 않는 상태로 바꿉니다
            drawingFlag = false;
            
            // 중심 좌표를 초기화 합니다  
            centerPosition = null;
            
            // 그려지고 있는 원, 선, 커스텀오버레이를 지도에서 제거합니다
            drawingCircle.setMap(null);
            drawingLine.setMap(null);   
            drawingOverlay.setMap(null);
        }
    });    
        
    // 지도에 표시되어 있는 모든 원과 반경정보를 표시하는 선, 커스텀 오버레이를 지도에서 제거합니다
    function removeCircles() {         
        for (var i = 0; i < circles.length; i++) {
            circles[i].circle.setMap(null);    
            circles[i].polyline.setMap(null);
            circles[i].overlay.setMap(null);
        }         
        circles = [];
    }
    
    // 마우스 우클릭 하여 원 그리기가 종료됐을 때 호출하여 
    // 그려진 원의 반경 정보와 반경에 대한 도보, 자전거 시간을 계산하여
    // HTML Content를 만들어 리턴하는 함수입니다
    function getTimeHTML(distance) {
    
        // 도보의 시속은 평균 4km/h 이고 도보의 분속은 67m/min입니다
        var walkkTime = distance / 67 | 0;
        var walkHour = '', walkMin = '';
    
        // 계산한 도보 시간이 60분 보다 크면 시간으로 표시합니다
        if (walkkTime > 60) {
            walkHour = '<span class="number">' + Math.floor(walkkTime / 60) + '</span>시간 '
        }
        walkMin = '<span class="number">' + walkkTime % 60 + '</span>분'
    
        // 자전거의 평균 시속은 16km/h 이고 이것을 기준으로 자전거의 분속은 267m/min입니다
        var bycicleTime = distance / 227 | 0;
        var bycicleHour = '', bycicleMin = '';
    
        // 계산한 자전거 시간이 60분 보다 크면 시간으로 표출합니다
        if (bycicleTime > 60) {
            bycicleHour = '<span class="number">' + Math.floor(bycicleTime / 60) + '</span>시간 '
        }
        bycicleMin = '<span class="number">' + bycicleTime % 60 + '</span>분'
    
        // 거리와 도보 시간, 자전거 시간을 가지고 HTML Content를 만들어 리턴합니다
        var content = '<ul class="info">';
        content += '    <li>';
        content += '        <span class="label">총거리</span><span class="number">' + distance + '</span>m';
        content += '    </li>';
        content += '    <li>';
        content += '        <span class="label">도보</span>' + walkHour + walkMin;
        content += '    </li>';
        content += '    <li>';
        content += '        <span class="label">자전거</span>' + bycicleHour + bycicleMin;
        content += '    </li>';
        content += '</ul>'
    
        return content;
    }
</script>

<?php include_once 'footer.php'; ?>

</body>
</html>