<?php
$password = "test123";
$hashed = password_hash($password, PASSWORD_DEFAULT);
echo "Hash for test123: <br><code>$hashed</code>";
//Sanjana - 123: $2y$10$6nQv8V12XRNeOIvUyA5zh.aqr9xcpdKrpUE9lH3YttDX51VzEdpEC
//test - test123: $2y$10$vhmYclnkepzFoXX6indeaO5JjAcQKTssMZqQVAko.4yRMNfkQuszq
?>