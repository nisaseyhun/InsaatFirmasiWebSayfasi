<?php
session_start();

if (!isset($_SESSION['kul_id']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../client/SignIn.php");
    exit();
}
