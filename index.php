
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error handler tutorials!</title>
</head>
<body>
<h2>Sign up</h2>
<form action = "includes/signup.inc.php" method = "POST">

<input type = "text" name = "first" placeholder = "Firstname">
<br>
<input type = "text" name = "last" placeholder = "Lastname">
<br>
<input type = "text" name = "email" placeholder = "E-mail">
<br>
<input type = "text" name = "uid" placeholder = "Username">
<br>
 <input type = "password" name = "pwd" placeholder = "Password">
<br>
<button type = "submit" name = "submit">Sign up </button>
</form>
<?php
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if(strpos($fullUrl, "signup = empty") == true){
      echo "<p></p>you did not fill in all fields</p>;
  }
  
  ?>
</body>
</html>
