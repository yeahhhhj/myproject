<?php
    include_once 'header.php';
    
?>


        <br>

        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img class="main_img" src="img/MAIN1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img class="main_img" src="img/MAIN2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img class="main_img" src="img/MAIN3.jpg" style="width:100%">
        </div>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
        <div class="container">
          <div>
            <h2 class="ranking">One Day Class All Courses</h2>
          </div>
          <div class="row">
              <div class="col-sm-3">
                <div class="class-item">
                    <div class="class-img">
                        <img src="img/list1.jpg" alt="Image">
                    </div>
                    <div class="class-text">
                      <a href="class_detail.html" class="kindsub">
                      <h2 class="kind">[원데이]디저트</h2>
                      <p class="kindsub">[망원동] 왕초보 도전! 스콘 2종(플레인/커피 초코칩)</p>
                      </a>
                    </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="class-item">
                    <div class="class-img">
                        <img src="img/list1.jpg" alt="Image">
                    </div>
                    <div class="class-text">
                      <a href="class_detail.html" class="kindsub">
                      <h2 class="kind">[원데이]디저트</h2>
                      <p class="kindsub">[망원동] 왕초보 도전! 스콘 2종(플레인/커피 초코칩)</p>
                      </a>
                    </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="class-item">
                    <div class="class-img">
                        <img src="img/list1.jpg" alt="Image">
                    </div>
                    <div class="class-text">
                      <a href="class_detail.html" class="kindsub">
                      <h2 class="kind">[원데이]디저트</h2>
                      <p class="kindsub">[망원동] 왕초보 도전! 스콘 2종(플레인/커피 초코칩)</p>
                      </a>
                    </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="class-item">
                    <div class="class-img">
                        <img src="img/list1.jpg" alt="Image">
                    </div>
                    <div class="class-text">
                      <a href="class_detail.html" class="kindsub">
                      <h2 class="kind">[원데이]디저트</h2>
                      <p class="kindsub">[망원동] 왕초보 도전! 스콘 2종(플레인/커피 초코칩)</p>
                      </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        <script>
          var slideIndex = 0;
          showSlides();

          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 1500); // Change image every 2 seconds
          }
        </script>
    
  <?php include_once 'footer.php';
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
