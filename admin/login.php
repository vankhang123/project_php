<?php

session_start();
// Create connection
$mysqli = new mysqli("localhost", "root", "", "web_device");


// Check connection

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password ='$password' ";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No user found with that username.";
    }
}

// if (isset($_POST['dangnhap'])) {
//     $taikhoan = $_POST['username'];
//     $matkhau = md5($_POST['password']);
//     $sql = "SELECT * FROM tbl_admin WHERE username = '" .$taikhoan. "' AND password = '" .$matkhau. "'  LIMIT 1";
//     $row = mysqli_query($mysqli, $sql);
//     $count = mysqli_num_rows($row);
//     if ($count > 0) {
//         $_SESSION['dangnhap'] = $taikhoan;
//         header("Location:index.php");
//     } else {
//         echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại.")</script>';
//         header("Location:login.php");
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <style type="text/css">
        body {
            background: #f2f2f2;
        }

        .wrapper-login {
            width: 15%;
            margin: 0 auto;
        }

        table.table-login {
            width: 100%;
        }

        table.tablle-login tr td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="wrapper-login">
        <form action="login.php"  method="POST">
            <table border="1" class="table-login" style="text-align: center;border-collapse:collapse; ">

                <tr>
                    <td colspan="2">
                        <h3>Đăng nhâp Admin</h3>
                    </td>
                </tr>

                <tr>
                    <td>Tài khoản</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Mật khẩu </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>

                    <td colspan="2">
                        <input type="submit" name="dangnhap" value="Đăng nhập">
                    </td>

                </tr>

            </table>
        </form>

    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>