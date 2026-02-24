<?php include
 "config.php";

 if (!isset($_SESSION["user_id"])) {
  header("Location: login.php");

 }

  $pid = $_GET["id"];

  if (isset($_POST["reserve"])) {
    $uid = $_SESSION["user_id"];

    mysqli_query($conn,
        "INSERT INTO reservations(user_id,package_id,status)
         VALUES($uid,$pid,'Pending')"
    );

    echo "<p class='success'>Reservation Submitted!</p>";

  
  }
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reserve</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="box">
<h2>Confirm Reservation</h2>

<form method="post">
  <button name="reserve" class="btn">Confirm Booking</button>
</form>
</section>
  
</body>
</html>
