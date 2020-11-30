<?php include_once 'header.php'; ?>

 <!-- Register -->
 <?php
    
    //connet to database
    $db = mysqli_connect('localhost', 'root', '#', 'authentication');  //암호입력하세요
    if (isset($_POST['register_btn'])){              //만들기 버튼을 누르면
        session_start();
        $username = $_POST['username'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if($password == $password2){
            $password =md5($password);  // hash password before storing for security
            $sql = "INSERT INTO users(username,age,phone, email, password) VALUES ('$username','$age','$phone','$email','$password')";
            mysqli_query($db, $sql);
            $_SESSION['message'] = "로그인 성공 ^ㅋ^";
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            header("location:login.php") ;      //로그인화면으로
        }
        else{
            $_SESSION['message'] = "두 암호가 다름니다.";
        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Login and Logout user php mysql</title>
</head>
<body>
<?php 
    if (isset($_SESSION['message'])){
        echo "<div id='error_msg'>".$_SESSION['message']."</div>";
        unset($_SESSION['message']);
    }

?>

<style>
*{ padding:0; margin:0; }
body{font-family: 'Sarabun', sans-serif;}
a{text-decoration: none; color: inherit;}


</style>




<form method="post" action="register.php">
    <table>
        <tr>
            <td>이름:</td>
            <td><input type="username" name="username" class="textInput"></td>
        </tr>
        <tr>
            <td>나이:</td>
            <td><input type="age" name="age" class="textInput"></td>
        </tr>
        <tr>
            <td>번호:</td>
            <td><input type="phone" name="phone" class="textInput"></td>
        </tr>
        <tr>
            <td>이메일:</td>
            <td><input type="email" name="email" class="textInput"></td>
        </tr>
        <tr>
            <td>비밀번호:</td>
            <td><input type="password" name="password" class="textInput"></td>
        </tr>
        <tr>
            <td>비밀번호 확인:</td>
            <td><input type="password" name="password2" class="textInput"></td>
        </tr>
        <tr>
        
            <td></td>
            <td><input type="submit" name="register_btn" value="가입하기"></td>
        </tr>

    </table>

</form>
    
</body>
</html>



<!-- Register -->



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
