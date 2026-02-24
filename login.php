<?php
   include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="box">
<h2>Login</h2>

<form method="post">
  <input type="email" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Password">

  <button name="login" class="btn">Login</button>
</form>

<?php
if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $result = mysqli_query($conn,
      "SELECT * FROM users WHERE email='$email'"
  
  );

  $row = mysqli_fetch_assoc($result);

  if ($row && password_verify($password, $row["password"])) {
    $_SESSION["user_id"] = $row["user_id"];
    header("Location: packages.php");
  } else {
      echo "<p class='error'>Invalid Login!</p>";
  }


}

?>
</section>
  
</body>
</html>