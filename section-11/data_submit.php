<?php
require("lib/validation.php");
if (isset($_POST['btn_login'])) {
    $errors = array(); // phat co
    if (!empty($_POST['username'])) {
        // Ha co
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $errors["username"] = "Username yeu cau tu 6 den 32 ky tu";
        } else {
            if (!isUsername($_POST['username'])) {
                $errors["username"] = "Username cho phep su dung ki tu chu so dau cham";
            } else {
                $username = $_POST['username'];
            }
        }
    } else {
        $errors['username'] = "Khong duoc de trong truong username";
    }

    if (!empty($_POST['password'])) {
        if (!isPassword($_POST['password'])) {
            $errors["password"] = "Password cho phep su dung ki tu chu so dau ch";
        } else {
            $password = $_POST['password'];
        }
    } else {
        $errors['password'] = "Khong duoc de trong truong password";
    }

    // ket luan
    if (empty($error)) {
        // xu ly khong co loi
        echo "Username: {$username} <br> Password: {$password}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuan hoa du lieu form dang nhap</title>
</head>

<body>
    <style>
        p.error {
            color: red;
        }
    </style>
    <h1>Dang Nhap</h1>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php if (!empty($username)) echo $username ?>" /><br>
        <p class="error"><?php if (!empty($errors["username"])) echo $errors["username"] ?></p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="<?php if (!empty($password)) echo $password ?>" /><br>
        <p class="error"><?php if (!empty($errors["password"])) echo $errors["password"] ?></p>
        <input type="submit" name="btn_login" value="Login" />
    </form>
</body>

</html>