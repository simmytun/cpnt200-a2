<?php
include('includes/config.php');

$page_title = "Home Page";

?>



<?php


// write query for all customers
$sql = 'SELECT * FROM customer';

// get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$site_title - $page_title"; ?></title>
</head>
<body>

<div id="wrapper">


<header>
<h1>customer admin</h1>
</header>
      <main>
        <h1>Home</h1>

        <?php foreach($customers as $customer) { ?> 

        <!-- turning each result into a link to the next page -->
          <a href="customer.php?id=<?php echo $customer['id']; ?>">
            <h2>
            
              <?php echo $customer['last_name'] . " "; ?>
              <?php echo $customer['first_name']; ?>
            </h2>
            </a>
          <p>Phone number: <?php echo $customer['phone']; ?> </p>
          <p>E-mail address: <?php echo $customer['email']; ?> </p>
          <?php  } ?>
         

        </main>

        </div>


    
</body>
</html>