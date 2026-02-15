<?php
/**
 * Project: truepathexpress
 * Created by: mrwayne
 * Generated: 2026-02-15
 * 
 */

session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: /pages/public/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - truepathexpress</title>
    <link rel="stylesheet" href="../../assets/css/main.css">
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
    </div>
</body>
</html>