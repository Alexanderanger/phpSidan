<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/main.js"></script>
    <title>

    <?php
if(empty($title)){
echo"min sida!";
}
else{
echo $title;
}
    ?>
    
    </title>
</head>
<body>

<h1>Välkommen</h1>
<a href="index.php">Start</a> | <a href="about.php">About</a> | <a href="login.php">Login</a>
<hr />