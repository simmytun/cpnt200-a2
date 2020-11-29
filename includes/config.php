<?php 

$conn = mysqli_connect('localhost', 'root', '', 'aviano-db');

?>

<?php

// check connection
if(!$conn){
    header("Location: error.php");
  }

  $site_title = "customer-admin"

?>