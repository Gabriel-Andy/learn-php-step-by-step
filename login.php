<!--Splitting the header and footer into separate documents makes things easier!-->
<?php
  include_once 'header.php';
?>

<section class="signup-form">
   <h2>Log in</h2>
   <div class = "signup-form-form">
   <form action = "includes/login.inc.php" method = "post">
    <input type = "text" name = "name" placeholder = "Username/Email...">
    <input type = "password" name = "pwd" placeholder = "password...">   
    <button  type = "submit" name = "submit">Sign up</button>
</form>
</div>
</section>


<?php
  include_once 'footer.php';
?>
