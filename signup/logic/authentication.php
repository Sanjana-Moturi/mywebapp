<?php
session_start();
require_once '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $stmt = $conn->prepare("SELECT password FROM registration WHERE username = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows === 1) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header("Location: ../view/hello.php");
            exit();
        } else {
            header("Location: ../view/error.php");
            exit();
        }
    } else {
        header("Location: ../view/error.php");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
