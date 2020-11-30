<?php
    include_once 'header.php'; 
?>

 <!-- LOGIN -->
 <?php
    
    //connet to database
    $db = mysqli_connect('localhost', 'root', '#', 'authentication'); //암호입력하세요
    if (isset($_POST['login_btn'])){
        session_start();
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $password = md5($password); //hash 함수로 암호보호
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) == 1){
            $_SESSION['message'] = "you are logged in";
            $_SESSION['email'] ='$email';
            header("location:mainclass.php");

        }else{
            $_SESSION['message'] = "이메일과 비밀번호가 맞지 않습니다.";
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
<form method="post" action="login.php">
    <table>
       
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" class="textInput"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" class="textInput"></td>
        </tr>
       
            <td></td>
            <td><input type="submit" name="login_btn" value="Login"></td>
        </tr>

    </table>


</form>
    
</body>
</html>


<!-- LOGIN -->







<?php include_once 'footer.php';  ?>


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
