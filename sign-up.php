<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","cloth");
if(isset($_POST['sign-up']))
{
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);  
    $query = "SELECT * FROM admin_user1 WHERE name = '$name'";
    $result=mysqli_query($db,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
        
          else
          {
            
            if($password==$password2)
            {           //Create User
                $password=md5($password); //hash password before storing for security purposes
                $sql="INSERT INTO admin_user1(name, email, password ) VALUES('$name','$email','$password')"; 
                mysqli_query($db,$sql);  
                $_SESSION['message']="You are now logged in"; 
                $_SESSION['name']=$name;
                header("location:index.php
                ");  //redirect home page
            }
            else
            {
                $_SESSION['message']="The two password do not match";   
            }
          }
      }
}
?>


<!DOCTYPE php>
<php lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Digipix - sign up</title>

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

    <!-- Feather icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <!-- Sign Up Section Start -->
                <div class="login-section">
                    <div class="materialContainer">
                        <div class="box">
                            <div class="login-title">
                                <h2>Register</h2>
                            </div>
                            <?php
                                 if(isset($_SESSION['message']))
                                {
                                      echo "<div id='error_msg'>".$_SESSION['message']."</div>";
                                     unset($_SESSION['message']);
                                 }
                            ?>

                            <form method="post" action="sign-up.php">
                            <div class="input">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name">
                                   <span class="spin"></span>
                            </div>

                            <div class="input">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email">
                                <span class="spin"></span>
                            </div>

                            <div class="input">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">
                                <span class="spin"></span>
                            </div>

                            <div class="input">
                                <label for="password2">Confirm Password</label>
                                <input type="password" name="password2" id="password2">
                                <span class="spin"></span>
                            </div>

                            <div class="button login" >
                                <input type ="submit" name="sign-up">
                            </div>
                            </form>
                            <p class="sign-category">
                                <span>Or sign up with</span>
                            </p>

                            <div class="row gx-md-3 gy-3">
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <div class="social-media fb-media">
                                            <img src="assets/images/facebook.png" class="img-fluid blur-up lazyload"
                                                alt="">
                                            <h6>Facebook</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <div class="social-media google-media">
                                            <img src="assets/images/google.png" class="img-fluid blur-up lazyload"
                                                alt="">
                                            <h6>Google</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <p>
                                <a href="login.php" class="theme-color">Already have an account?</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Sign Up Section End -->
            </div>
        </div>
    </div>
    <!-- login page End -->

    <!-- latest js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>

</html>