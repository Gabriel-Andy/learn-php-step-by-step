 <?php
include_once './dbh.inc.php';
$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn,$_POST['last']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$uid = mysqli_real_escape_string($conn,$_POST['uid']);
$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
 
   $sql = "INSERT INTO users (user_first, user_last,user_email, user_uid,
   user_pwd) VALUES(?, ?,?, ?,?);";
   // create the prepared statement
     $stmt = mysqli_stmt_init($conn);
     //prepare the prepared statement
     if(!mysqli_stmt_prepare($stmt,$sql)) {
         echo "SQL error";
     }else {
          // bind paremeters to the placeholder
         mysqli_stmt_bind_param($stmt, "sssss", $first, $last,$email,$uid,$pwd);
        //Run parameters to the placeholder
         mysqli_stmt_execute($stmt);
     }

   header("Location: ../index.php?signup=success");
   ?>

<?php
if(isset($_POST['submit'])) {
include_once 'dbh.inc.php';
$first = $_POST['first'];
$last = $_POST['last$last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
if(empty($first) || $last || $email || $uid || pwd) {
    header ("Locaton: ../index.php?signup=empty");
}
else {
if(filter_var(!email,FILTER_VALIDATE_EMAIL)){
    header("Location: ../index.php?index=invalidemail");
}else {
    echo "sign up the user!";
}
}
}else {
    header("Location: ../index.php?signup = error");
}
  