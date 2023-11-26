<?php

include 'db_connection.php';
$conn = OpenCon();

$sql = "SELECT * FROM cart1";
$result = $conn->query($sql);


$sql = "DELETE FROM cart1 WHERE id ='" . $_GET['id'] . "'";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    echo '<script>window.location.href = "order-list.php";</script>';

  } else {
    echo "Error deleting record: " . $conn->error;
  }

$conn->close();
?>