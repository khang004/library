<?php
include_once "../include/common.php";
session_start();

if (is_post_method()) {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    $sql = "SELECT username, password FROM users WHERE username = ?";
    $data = db_select($sql, [$username]);

    if (count($data) > 0) {
        $data = $data[0];
        $hash = $data["password"];
        if (password_verify($password, $hash) === true) {
            // Mật khẩu đúng => gắn tên đăng nhập vào session
            $_SESSION["username"] = $data["username"];
            redirect_to("/admin");
        } else {
            // Mật khẩu sai
            js_alert("Mật khẩu không đúng!");
        }
    } else {
        // Sai tên đăng nhập
        js_alert("Tên đăng nhập không đúng!");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
        font-family: Arial, sans-serif;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    form {
        background-color: rgba(0, 0, 0, 0.38); 
        padding: 30px;
        border-radius: 15px;
        backdrop-filter: blur(10px);
        width: 350px;
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #0dff00ff;
    }
    label {
        display: block;
        margin-bottom: 5px;
        color: #0c34f9ff;
        font-weight: bold;
    }
    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: 1px solid #ccc;
        transition: 0.3s;
    }
    input:focus {
        border-color: #6B73FF;
        box-shadow: 0 0 5px rgba(107, 115, 255, 0.5);
        outline: none;
    }
    button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 8px;
        background: #00cdf2ff;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }
    button:hover {
        background: #ffff0080;
    }
    </style>
</head>
<body>
    <form method="POST">
        <div>
            <h2>Login</h2>
        </div>
        <div>
            <label>UserName</label>
            <input type="text" name="username" />
        </div>
        <div>
            <label>PassWord</label>
            <input type="password" name="password" />
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>