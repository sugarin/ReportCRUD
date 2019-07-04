<?php

include('konek.php');
$msg = "";
if (isset($_POST['simpanform'])) {
  $name = $_POST['nama'];
  $email = $_POST['email'];
  $telephone = $_POST['phone'];
  $datefound=strtotime($_POST['datefound']); 
  $datefound=date("Y-m-d",$datefound);
  $animal_type = $_POST['animaltype'];
  $deskripsi = $_POST['description'];
  $location = $_POST['location'];



  $image = $_FILES['image']['name'];

  $target = "images/uploaded/".basename($image);


  $query = "INSERT INTO laporanhilang (name, email, telephone, datefound, animal_type, deskripsi, location, image) VALUES ('$name', '$email', '$telephone', '$datefound','$animal_type','$deskripsi','$location', '$image')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
   // execute query
    mysqli_query($conn, $query);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }


  $_SESSION['message'] = 'Report Successfully Post!';
  $_SESSION['message_type'] = 'ada kesalahan';
  header('Location: index.php');
}

   // if (move_uploaded_file($_FILES['image'], $target)) {
   //    $msg = "Image uploaded successfully";
   //  }else{
   //    $msg = "Failed to upload image";
   //  }



?>
