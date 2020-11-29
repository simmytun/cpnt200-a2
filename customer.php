<?php
  include('includes/config.php');

  ?>

  <?php

  // Get ID
  $id = $_GET['id'];

  // write query for all customers
  $sql = "SELECT * FROM customer Where id='$id'";

  // get the results
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en-CA">
  <head>
    <title>Customer admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  </head>

  <body>
    <header>
      <h1>Customers</h1>
    </header>
    
  <main>
        <h2><u> <?php echo $customers[0]['first_name'] . " " . $customers[0]['last_name']; ?> </u></h2>
        <ul>
          <li><p>First name: <?php echo $customers[0]['first_name']; ?> </p></li> 
          <li><p>Last name: <?php echo $customers[0]['last_name']; ?> </p></li> 
          <li><p>Date of birth: <?php echo $customers[0]['dob']; ?> </p></li>  
          <li><p>Driver license number: <?php echo $customers[0]['driver_license_number']; ?> </p></li>  
          <li><p>Phone number: <?php echo $customers[0]['phone']; ?> </p></li>  
          <li><p>E-mail address: <?php echo $customers[0]['email']; ?> </p></li>  
        </ul>
      

      <a href="index.php"><button>Back</button></a>
    </main>

  </body>
</html>