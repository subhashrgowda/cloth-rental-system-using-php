<?php

include 'db_connection.php';
$conn = OpenCon();

$sql = "SELECT id, Order_Image,Order_Code,Payment_Method,Delivery_Status,Amount FROM orderlist";
$result = $conn->query($sql);


$sql = "DELETE FROM orderlist WHERE id='" . $_GET['id'] . "'";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    echo '<script>window.location.href = "order-list.php";</script>';

  } else {
    echo "Error deleting record: " . $conn->error;
  }

$conn->close();
?>