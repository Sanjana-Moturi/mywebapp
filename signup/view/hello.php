<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body style="background-image: radial-gradient(rgb(11, 243, 243), rgb(93, 95, 95)); background-size:cover; background-repeat:no-repeat; height: 100vh; margin:0 ; padding:0;overflow: hidden">
    <div style="text-align:center; box-shadow: 10px 10px 5px; padding:50px; border-radius: 10px; width: 300px; margin: 120px auto; background-color:rgb(216, 244, 244);">
        <h2>Hello, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
    </div>    
</body>
</html>
