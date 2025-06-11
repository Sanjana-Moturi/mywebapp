<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>
<body style="background-image: radial-gradient(rgb(11, 243, 243), rgb(93, 95, 95)); background-size:cover; background-repeat:no-repeat; height: 100vh; margin:0 ; padding:0;overflow: hidden">
    <div  style="text-align:center; background-color:rgb(216, 244, 244); box-shadow: 10px 10px 5px rgb(57, 59, 59); padding: 50px; border-radius: 10px; width: 300px; margin: 120px auto; margin-top: 100px;">
    <h2 style="font-size:xx-large; text-shadow:10px 10px 3px rgb(151, 173, 173) ">Login</h2>
    <form method="POST" action="../logic/authentication.php">
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Username" required /><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" required /><br><br>
        <input type="submit" value="Login" />
    </form>
</div>
</body>
</html>