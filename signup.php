<!--Splitting the header and footer into separate documents makes things easier!-->
<?php
  include_once 'header.php';
?>

<section class="signup-form">
   <h2>Sign up</h2>
   <div class = "signup-form-form">
   <form action = "includes/signup.inc.php" method = "post">
    <input type = "text" name = "name" placeholder = "Full name...">
    <input type = "text" name = "email" placeholder = "Email...">
    <input type = "text" name = "uid" placeholder = "Username...">
    <input type = "password" name = "pwd" placeholder = "password..."> 
    <input type = "password" name = "pwdrepeat" placeholder = "Repeat password ...">
   <button  type = "submit" name = "submit">Sign up</button>
</form>
</div>
</section>


<?php
  include_once 'footer.php';
?>
