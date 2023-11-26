<?php

include 'db_connection.php';
$conn = OpenCon();

$sql = "SELECT id,Product_Name,Category,Brand,Unit,Price,Product_Description,Product_Image,Thumbnail_Image,Stock_Status FROM productlist";
$result = $conn->query($sql);


$sql = "DELETE FROM productlist WHERE id='" . $_GET['id'] . "'";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    echo '<script>window.location.href = "all-products.php";</script>';

  } else {
    echo "Error deleting record: " . $conn->error;
  }

$conn->close();
?>