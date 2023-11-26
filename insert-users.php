<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Insert a record</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <style>
      .homepage{
        margin-top: 25px;
        font-size: 1.2em;
        text-align: center;
      }
    </style>
  </head>
    <body>
	<center>
    <header>Cloth Rental System</header>

  <?php

include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";


    if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];
        $Confirm_Password = $_POST['confirm_password'];
        $sql = "INSERT INTO user (Name, Email, Password, Confirm_Password) VALUES ('$Name', '$Email','$Password','$Confirm_Password') ";
        if (mysqli_query($conn, $sql)) {
            echo "<p style='margin-top: 25px;font-size: 1.2em;text-align: center'>New Record inserted successfully ! </p>";
            echo '<script>window.location.href = "all-users.php";</script>';   
        } 
        else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
		$sql = "SELECT id,Name,Email, Password FROM user ORDER BY id DESC LIMIT 1";
		
        $result = $conn->query($sql);

        mysqli_close($conn);
    }
    else{
      echo "Error";
    }

    ?>

<br>
<br>	
<a href="add-new-user.html">
<button>Back</button>
</a>

</center>
</body>
</html>