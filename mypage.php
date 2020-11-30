<?php
    include_once 'header.php'; 
?>


        <style>
        /********* mypage CSS **********/
        @import url(http://fonts.googleapis.com/css?family=Lato:400,700);
        .profile
        {
            font-family: 'Roboto', sans-serif;
            background-color: #FFFFFF;
        }
        .profile
        {
            margin-top: 2px;
            padding:1px;
            display: inline-block;
            padding-bottom: 20PX;
        }
        .divider
        {
            border-top:1px solid rgba(0,0,0,0.1);
        }
        .emphasis
        {
            border-top: 1px solid transparent;
        }
        .emphasis h2
        {
            margin-bottom:0;
        }
        .span.tags
        {
            background: #1abc9c;
            border-radius: 2px;
            color: #f5f5f5;
            font-weight: bold;
            padding: 2px 4px;
        }
        .profile strong,span,div{
            text-transform: initial;
        }
        #profile{
            background-color: #FFFFFF;
        }
        #user-name{
          font-size: 30px;
        }
        .profile_font{
          font-family: 'Nanum Gothic Coding', monospace;
          font-size: 30px;
          color:
        }

        /********* mypage Class CSS **********/
        .Class-tab {
          margin-top: 2px;
          padding-left: 30px;
          padding-right: 30px;
          padding-top: 10px;
          padding-bottom: 20px;
          margin-left: 100px;
          display: inline-block;
          background-color: #FFFFFF;
          border-radius: 16px;
          font-family: 'Roboto', sans-serif;
        }
        .tags{
          background: #007b5e;
          color: #ffffff;
        }
        .Class-tab thead{
            background: #f3f3f3;
            color: #333;
            text-align: center;
        }
        .Class-tab a{
            text-decoration: none;
            color: #333;
            font-weight: 600;
            text-align: center;
            font-size: 15px;
        }
        .classtitle{
          font-family: 'Do Hyeon', sans-serif;
          font-size: 30px;
          color: #D2691E;
        }
        .link{
          text-align: center;
        }

        .card{
          border-radius: 16px;
          margin-bottom: 15px;
          box-shadow: 0 3px 5px rgba(0,0,0,.1);
          margin-left: 170px;
          margin-right: 170px;
        }
        .table{
          font-size: 15px;
        }
        </style>
    </head>

    <body class="page">


        <br>
        <div class="container">
          <div class="row">
                <div class="col-sm-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id = "profile" style="border-radius: 16px;">
                        <div class="profile col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <figure>
                                     <img src="img/user.png" alt="" class="img-circle" style="width:75px;" id="user-img">
                                </figure>
                                <h5 style="text-align:center;">
                                  <strong id="username"><?php echo $_SESSION['username']; ?></strong>
                                </h5>
                                <p style="text-align:center; font-size: 20px; overflow-wrap: break-word;" id="email"><?php echo $_SESSION['email']; ?></p>
                                <p style="text-align:center; font-size: 20px; "class="profile_font">
                                  <strong>찜한 CLASS 수</strong>
                                  <span class="tags" id="user-status">1
                                  <br></span>
                                </p>
                          </div>
                        </div>
                    </div>
                </div>

      					<div class="col-sm-8">
                  <section id="classdate1" class="Class-tab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class=classtitle> <br>내가 신청한 CLASS </h2>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <table class="table" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th>CLASS NAME</th>
                                    <th>TIME</th>
                                    <th>CHANGE SCHEDULE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><a href="#">CLASS 1</a></td>
                                    <td>2020.11.12 14:00-17:00</td>
                                    <td><a href="CLASS.html" class="link">CHANGE</a></td>
                                  </tr>
                                  <tr>
                                    <td><a href="#">CLASS 1</a></td>
                                    <td>2020.11.12 14:00-17:00</td>
                                    <td><a href="CLASS.html" class="link">CHANGE</a></td>
                                  </tr>
                                  <tr>
                                    <td><a href="#">CLASS 1</a></td>
                                    <td>2020.11.12 14:00-17:00</td>
                                    <td><a href="CLASS.html" class="link">CHANGE</a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
  					</div>
      </div>
    </div>
    <br><br><br><br>
    <div class="row">
      <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="classtitle">내가 찜한 CLASS</h5>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">CATEGORY</th>
                      <th scope="col">CLASS</th>
                      <th scope="col">AUTHOR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>ART</td>
                      <td>DRAWING</td>
                      <td>RARA</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>ART</td>
                      <td>DRAWING</td>
                      <td>RARA</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>ART</td>
                      <td>DRAWING</td>
                      <td>RARA</td>
                    </tr>
                  </tbody>
                </table>
          </div>
        </div>
      </div>
    </div>

    <?php
    include_once 'footer.php'; 
?>



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
