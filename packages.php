<?php
 include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Packages</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center">Available Tour Packages</h2>

<div style="text-align: center;">

<?php
$result = mysqli_query($conn, "SELECT * FROM packages");

while ($p = mysqli_fetch_assoc($result)) {
  echo "<div class='card'>";
  echo "<img src='images/".$p["image"]."' class='pkg-img'>";
  echo "<h3>".$p["title"]."</p>";
  echo "<p>".$p["description"]."</p>";
  echo "<p><b>Rs ".$p["price"]."</b></p>";
  echo "<a href='reserve.php?id=".$p["package_id"]."' class='btn'>Reserve</a>";
  echo "</div";



}

?>
</div>
  
</body>
</html>