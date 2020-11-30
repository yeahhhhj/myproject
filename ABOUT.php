<?php include_once 'header.php'; ?>

        <!--introduce-->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
        <script type = "text/javascript">
          google.charts.load('current', {packages: ['corechart']});
        </script>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!------ Include the above in your HEAD tag ---------->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <style>
        .navbar {
          padding: 30px 60px;
          background: #FFBC9B	 !important;
        }
        body{
          background:	#FFEFD5;
        }
        </style>
    </head>

    <body class="page">

        <br>

        <section id="introduce" class="introduce">
          <div class="container">
          <div class="row">
            <div class = "col-sm-4">
              <img src="img/oneday.jpg" alt="oneday" class="img">
            </div>

            <div class="col-sm-8">
              <div class="section-title">
                <p class="s-section-title"> <br>Learn About Us</p>
                <h2 class="b-section-title"> what is one day class? </h2>
                <br>
              <p class="i_content">원데이 클래스란 말 그대로 하루 몇 시간 동안 일회성으로 이뤄지는 수업을 말하며<br>
                                  자신이 관심있는 강좌나 체험 활동을 직접 선택해 들을 수 있다는 장점이 있습니다.<br>
                                  장기간 동안 정기적으로 시간을 내기 힘든 바쁜 현대인들에게 긍정적으로 평가를 받으며<br>
                                  클래스에 참가 시 자신이 원하는 주제에 따라 가능한 시간에 맞춰 특별한 하루를 보낼 수 있습니다.<br></p>
              </div>
            </div>
          </div>
          </div>
          <br><br><br>
          <div class="col-sm-12">
            <div class="section-title2">
              <h2 class="b-section-title"> 1 DAY CNASS </h2>
              <br>
            <p class="i_content">그 동안 배우고 싶었던 원데이 클래스가 있었지만, 가격때문에 망설이셨나요?<br>
                                근무 시간과 맞지 않아, 망설이셨나요?<br>
                                그러면 저희 1 DAY CNASS를 선택하세요<br>
                                ZOOM과 GOOGLE MEET를 통해 무료로 진행되기에, 여러분들이 듣고 싶었던 원데이 클래스를
                                언제 어디서나 들을 수 있습니다.</p>

            </div>
          </div>

        </section>
        <br><br><br>
        <div id = "container" style = "width: 900px; height:  400px; margin: 0 auto"></div>
        <script language = "JavaScript">
            function drawChart() {
                    // Define the chart to be drawn.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'response');
                    data.addColumn('number', 'percentage');

                    data.addRows([
                      ['의향있음',  74.2],
                      ['의향없음',  19.4],
                      ['잘모름',  6.4]
                    ]);

                    // Set chart options
                    var options = {'title' : '취미활동을 전문적으로 배워보고 싶은 의향 조사',
                    hAxis: {title: 'Percentage'},
                    vAxis: {title: '사람들의 주요 응답'},
                    'height': 400,
                    colors: ['#D2691E']
                    };

                    // Instantiate and draw the chart.
                    var chart = new google.visualization.BarChart(document.getElementById('container'));
                    chart.draw(data, options);
            }
            google.charts.setOnLoadCallback(drawChart);
        </script>
        <br><br>
        <h2 class="b2-section-title"> Why do we need it? </h2>
        <br><br>
        <div id="home_quicklinks">
        <a class="quicklink link1" href="#">
          <span class="ql_caption">
            <span class="outer">
                <span class="inner">
                    <h2>다양한 강의를 통해 <br>당신만의 취미를<br> 찾을 수 있습니다.</h2>
                </span>
            </span>
          </span>
          <span class="ql_top"></span>
          <span class="ql_bottom"></span>
        </a>
              <a class="quicklink link2" href="#">
                <span class="ql_caption">
                  <span class="outer">
                    <span class="inner">
                      <h2>당신이 배우고 싶은 것들을<br> 짧은 시간동안 배울 수 있습니다.</h2>
                    </span>
                  </span>
                </span>
              <span class="ql_top"></span>
            <span class="ql_bottom"></span>
          </a>

          <a class="quicklink link3" href="#">
          <span class="ql_caption">
            <span class="outer">
              <span class="inner">
                <h2>온라인으로 효율적으로<br>취미를<br>체험할 수 있습니다.</h2>
              </span>
            </span>
          </span>
          <span class="ql_top"></span>
          <span class="ql_bottom"></span>
          </a>
        </div>
        <br><br>
        <h2 class="b3-section-title">1 DAY CNASS와 함께 당신의 취미를 쇼핑하세요</h2>

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Office</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>주소</p>
                                    <p><i class="fa fa-phone-alt"></i>전화번호</p>
                                    <p><i class="fa fa-envelope"></i>이메일</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>아직 취미를 찾지 못하셨나요?
                                        <br> 1 DAY CNASS에서 당신의 취미를 찾아보세요</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">1 Day CLASS</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By DNA</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
