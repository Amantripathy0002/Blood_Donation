<?php
// connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// get ID of row to delete
$id = $_GET['id'];

// delete row with specific ID
$sql = "DELETE FROM users WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  // redirect to previous page
  header("Location: index.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);
?>
