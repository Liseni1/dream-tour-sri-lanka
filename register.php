<?php include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
  <script src="validation.js"></script>
</head>
<body>
<section class="box">
<h2>Visitor Registration</h2>

<form method="post" onsubmit="return validateRegister();">
  <input type="text" name="name" id="name" placeholder="Full Nmae">
  <input type="email" name="email" id="email" placeholder="Email">
  <input type="password" name="password" id="password" placeholder="Password">

  <button type="submit" name="register" class="btn">Register</button>
</form>

<?php
if (isset($_POST["registter"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = password_hash($_POST["passwpord"], PASSWORD_DEFAULT);

  mysqli_query($conn,
      "INSERT INTO users(name,email,password,role)
       VALUES('$name','$email','$password','visitor'"

  );

  echo "<p class='success'>Registration Successful!</p>";


  
}

?>

</section>
  
</body>
</html>