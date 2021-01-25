 <?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title of the document</title>
    <link rel = "stylesheet type = "text/css href = "style.css"> 
</head>
<body>
<ul>
<li><a href = "index.php">Home</a></li>
<li><a href = "contact.php">contact</a></li>
</ul>
    <?php
    echo $_SESSION['username'] 
    ?>
</body>
</html>