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

        $Product_Image = $_FILES["product_image"]["name"];
        $tempname = $_FILES["product_image"]["tmp_name"];   
        $folder = "image/".$Product_Image;
        
        $Thumbnail_Image = $_FILES["thumbnail_image"]["name"];
        $tempname = $_FILES["thumbnail_image"]["tmp_name"];   
        $folder = "image/".$Thumbnail_Image; 

        $Product_Name = $_POST['product_name'];
        $Category= $_POST['category'];
        $Brand= $_POST['brand'];
        $Unit = $_POST['unit'];
        $Price= $_POST['price'];
        $Product_Description = trim($_POST['product_description']);

        //$textareaValue = trim($_POST['content']);//

       // $Images = $_POST['images'];//
       // $Thumbnail_Image = $_POST['thumbnail_image'];//
        $Stock_Status = $_POST['stock_status'];
        
        $Product_Images=base64_encode(file_get_contents($tempname));
        
        $Thumbnail_Images=base64_encode(file_get_contents($tempname));


        $sql = "INSERT INTO productlist (Product_Name, Category, Brand, Unit, Price, Product_Description, Product_Image, Thumbnail_Image, Stock_Status) VALUES ('$Product_Name','$Category','$Brand','$Unit','$Price','$Product_Description','$Product_Images','$Thumbnail_Images','$Stock_Status') ";
        if (mysqli_query($conn, $sql)) {
            echo "<p style='margin-top: 25px;font-size: 1.2em;text-align: center'>New Record inserted successfully ! </p>";   
            echo '<script>window.location.href = "add-new-product.php";</script>';
        } 
        else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }

        if (move_uploaded_file($tempname, $folder) && move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }

		$sql = "SELECT id,Product_Name,Category,Brand,Unit,Price,Product_Description,Product_Image,Thumbnail_Image,Stock_Status FROM productlist ORDER BY id DESC LIMIT 1";
		
        $result = $conn->query($sql);

        mysqli_close($conn);
    }
    else{
      echo "Error";
    }

    ?>

<br>
<br>	
<a href="add-new-product.php">
<button>Back</button>
</a>

</center>
</body>
</html>