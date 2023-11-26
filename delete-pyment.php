<?php

include 'db_connection.php';
$conn = OpenCon();

$sql = "SELECT * FROM payment_details";
$result = $conn->query($sql);


$sql = "DELETE FROM payment_details WHERE id ='" . $_GET['id'] . "'";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    echo '<script>window.location.href = "order-detail.php";</script>';

  } else {
    echo "Error deleting record: " . $conn->error;
  }

$conn->close();
?>