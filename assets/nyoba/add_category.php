<?php
  session_start();

$email = $_SESSION["email"];
  if (!isset($_SESSION["email"])) {
     header("Location: login.php"); 
  }

  include("connection.php");
  
//   $query = "SELECT * FROM user ORDER BY email ASC";

//   $category = $_POST['category'];
//   mysqli_query($connection, "INSERT INTO `category`(`id_category`, `nama_category`) VALUES ('','$category')");
// header('location : category.php');
?>