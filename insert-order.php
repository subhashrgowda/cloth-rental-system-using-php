<!DOCTYPE php>
<php lang="en">
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

        $Order_image = $_FILES["order_image"]["name"];
        $tempname = $_FILES["order_image"]["tmp_name"];   
        $folder = "image/".$Order_image;
 
        $Order_code = $_POST['order_code'];
        $Payment_method= $_POST['payment_method'];
        $Delivery_status = $_POST['delivery_status'];
        $Amount = $_POST['amount'];
       
        $image=base64_encode(file_get_contents($tempname));


        $sql = "INSERT INTO orderlist (Order_Image,Order_Code,Payment_Method,Delivery_Status,Amount) VALUES ('$image',' $Order_code','$Payment_method','$Delivery_status','$Amount') ";
        if (mysqli_query($conn, $sql)) {
            echo "<p style='margin-top: 25px;font-size: 1.2em;text-align: center'>New Record inserted successfully ! </p>";   
        } 
        else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }

        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }

		$sql = "SELECT id,Order_Image,Order_Code,Payment_Method,Delivery_Status,Amount FROM orderlist ORDER BY id DESC LIMIT 1";
		
        $result = $conn->query($sql);

        mysqli_close($conn);
    }
    else{
      echo "Error";
    }

    ?>

<br>
<br>	
<a href="insert-order.php">
<button>Back</button>
</a>

</center>
</body>
</html>