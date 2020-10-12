<?php
session_start();

require_once('config.php');


  $username 	= $_POST['username'];
  $password = md5($_POST['password']);
  
  if(@$_GET['a']=='reg'){
    $query  = "INSERT INTO user_login SET username='$username', password='$password'";
    $insert = mysqli_query($con, $query);
    echo "<script>alert('Sucessfull'); window.location = 'login.php'; </script>";
  }

  else if (!@$_GET['a']) {
  $query  = "SELECT * FROM user_login WHERE username='$username' AND password='$password'";
  $result = mysqli_query($con, $query)or die(mysqli_error());
  $num_row = mysqli_num_rows($result);
  $row     = mysqli_fetch_array($result);
  echo $query;
  if( $num_row !=0 ) {
    mysqli_query($con, "UPDATE user_login SET last_login = now() WHERE id = '$row[id]' ");
    echo "<script>alert('Sucessfull'); window.location = 'index.php'; </script>"; // log in

    $_SESSION['logged_in'] = $row['username'];
    $_SESSION['time'] = now();

  }
}
 ?>