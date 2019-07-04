<?php
include("konek.php");
$msg = "";

$name = '';
$email= '';
$telephone= '';
$datefound= '';
$animal_type= '';
$deskripsi= '';
$location= '';
$image= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM laporanhilang WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $email = $row['email'];
    $telephone = $row['telephone'];
    $datefound = $row['datefound'];
    $animal_type = $row['animal_type'];
    $deskripsi = $row['deskripsi'];
    $location = $row['location'];
    $image = $row['image'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $datefound=strtotime($_POST['datefound']); 
  $datefound=date("Y-m-d",$datefound);
  $animal_type = $_POST['animal_type'];
  $deskripsi = $_POST['deskripsi'];
  $location = $_POST['location'];
  $image = $_FILES['image']['name'];
  $target = "images/uploaded/".basename($image);

  $query = "UPDATE laporanhilang set name = '$name', email = '$email', telephone = '$telephone', datefound= '$datefound', animal_type = '$animal_type', deskripsi = '$deskripsi', location = '$location', image = '$image' WHERE id=$id";


  mysqli_query($conn, $query);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }

  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>

<!DOCTYPE HTML>
<html>

<head>
  <title>We found your pet!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Found Pet Details Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
  <script type="application/x-javascript">
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- Custom Theme files -->
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <link href="css/formstyle.css" rel='stylesheet' type='text/css' />
  <!--fonts-->
  <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

  <!--//fonts-->
</head>

<body>
  <!--background-->
  <h1>EDIT YOUR FORM</h1>
  <div class="main-w3layouts-content">
    <div class="top-section">
      <h2 class="sub-hdng-agileits-w3layouts">Editing your post</h2>
      <p>Please fill the form below if you find a lost pet and we will try and get it back to the owner.</p>
    </div>
    <div class="w3-agile-login-form">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
        <h3 class="inner-hdng-agileinfo">Contact information</h3>
        <div class="top-fields-wthree">
          <div class="input-fields-w3ls">
            <input type="text" name="name" placeholder="Name" value= "<?php echo $name; ?>" required="true" />
          </div>
          <div class="input-fields-w3ls">
            <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required="true" />
          </div>
          <div class="input-fields-w3ls">
            <input type="text" name="telephone" placeholder="Phone" value="<?php echo $telephone; ?>" required="true" />
          </div>
        </div>
        <!-- About PET -->
        <h3 class="inner-hdng-agileinfo">About Found Pet</h3>
        <div class="mid-fields-agileits-w3layouts">
          <div class="input-fields-w3ls2">
            <input id="datepicker" name="datefound" type="text" placeholder="Date found" value="<?php echo $datefound; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
                required="true" />
          </div>
          <div class="input-fields-w3ls2">
            <input type="text" name="animal_type" placeholder="Animal type" value="<?php echo $animal_type; ?>" required="true" />
          </div>
        </div>
        <textarea name="deskripsi" placeholder="Description of animal" required="true"><?php echo $deskripsi;?></textarea>
        <textarea name="location" placeholder="Where found" required="true"><?php echo $location;?></textarea>
        <!-- BUTTONS -->
        <div class="mid-fields-agileits-w3layouts">
        <div class="input-fields-w3ls2">
          <div class="custom-upload"> 
          <button class="btn-upload">Upload Picture</button>
          <input type="file" name="image" value="">
          </div>
        </div>
        </div>
        <input type="submit" name="update" value="Update Post">
      </form>
      <!-- FORM ENDS -->
    </div>
  </div>
  <div class="clear"></div>
  <div class="copy-right-w3l">
    <p>All Rights Reserved</p>
  </div>
  <!-- JavaScript plugins -->
  <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

  <!-- Calendar -->
  <script src="js/jquery-ui.js"></script>
  <script>
    $(function () {
      $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
    });
  </script>
  <!-- //Calendar -->
  <!--// JavaScript plugins -->
</body>

</html>