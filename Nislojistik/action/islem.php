<?php
ob_start();
session_start();
require 'baglan.php';

if (isset($_POST['SignUp'])) {

    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $isAdminRegister = isset($_POST['admin_register']);

    if (!$enteredUsername) {
        $_SESSION['register_error'] = "Kullanıcı adı boş olamaz";
        header("Location: ../page/client/SignUp.php");
        exit();
    }

    if (!$enteredPassword) {
        $_SESSION['register_error'] = "Şifre boş olamaz";
        header("Location: ../page/client/SignUp.php");
        exit();
    }

    if ($enteredPassword !== $confirmPassword) {
        $_SESSION['register_error'] = "Şifreler eşleşmiyor. Lütfen şifreleri aynı şekilde girin.";
        header("Location: ../page/client/SignUp.php");
        exit();
    }

    $hashedPassword = password_hash($enteredPassword, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT kul_id FROM kullanicilar WHERE kul_adi = ?");
    $stmt->bind_param("s", $enteredUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['register_error'] = "Bu kullanıcı adı zaten kullanılıyor. Lütfen farklı bir kullanıcı adı seçin.";
        header("Location: ../page/client/SignUp.php");
        exit();
    } else {
        $role = $isAdminRegister ? 'admin' : 'kullanici';
        $stmt = $conn->prepare("INSERT INTO kullanicilar (kul_adi, kul_sifre, rol) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $enteredUsername, $hashedPassword, $role);
        $stmt->execute();

        $_SESSION['kul_id'] = $stmt->insert_id;

        if ($role === 'admin') {
            header("Location: ../page/admin/listAdmin.php");
        } else {
            header("Location: ../page/client/SignIn.php");
        }
        exit();
    }
}

if (isset($_POST['SignIn'])) {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    if (!$enteredUsername) {
        $_SESSION['error'] = "Kullanıcı adı boş olamaz";
        header("Location: ../page/client/SignIn.php");
        exit();
    }

    if (!$enteredPassword) {
        $_SESSION['error'] = "Şifre boş olamaz";
        header("Location: ../page/client/SignIn.php");
        exit();
    }

    $stmt = $conn->prepare("SELECT kul_id, kul_adi, kul_sifre, rol FROM kullanicilar WHERE kul_adi = ?");
    $stmt->bind_param("s", $enteredUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPasswordFromDatabase = $row['kul_sifre'];
        $userRole = $row['rol'];

        if (password_verify($enteredPassword, $hashedPasswordFromDatabase)) {
            $_SESSION['kullanici'] = $enteredUsername;
            $_SESSION['kul_id'] = $row['kul_id'];
            $_SESSION['rol'] = $userRole;

            if ($userRole === 'admin') {
                header("Location: ../page/admin/listAdmin.php");
            } else {
                header("Location: ../page/client/index.php");
            }
            exit();
        } else {
            $_SESSION['error'] = "Kullanıcı adı veya şifre yanlış";
            header("Location: ../page/client/SignIn.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Kullanıcı adı veya şifre yanlış";
        header("Location: ../page/client/SignIn.php");
        exit();
    }
}
$conn->close();
