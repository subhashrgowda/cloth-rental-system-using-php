<?php

include 'db_connection.php';
$conn = OpenCon();

$sql = "SELECT id, name, email, password FROM admin_user1";
$result = $conn->query($sql);


$sql = "DELETE FROM admin_user1 WHERE id='" . $_GET['id'] . "'";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    echo '<script>window.location.href = "all-users.php";</script>';

  } else {
    echo "Error deleting record: " . $conn->error;
  }

$conn->close();
?>