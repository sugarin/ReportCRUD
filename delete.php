<?php

include("konek.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM laporanhilang WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Post Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
