<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <style>
        body {
            margin: 0;
            font-family: "Inter", sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login {
            text-align: center;
            width: 50%;
        }

        .login-form {
            height: 400px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .login-form h1 {
            color: #3b5d50;
        }

        .login-form label {
            font-size: 16px;
            font-weight: bold;
            float: left;
            line-height: 3.0;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-radius: 10px;
            border: #3b5d50 solid 1px;
            height: 50px;
        }

        button {
            margin-top: 40px;
            font-size: 20px;
            width: 100%;
            padding: 15px;
            background-color: #3b5d50;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    // if (isset($_GET['error'])) {
    //     echo '<p style="color: red;">' . htmlspecialchars($_GET['error']) . '</p>';
    // }
    ?>
    <div class="login">
        <form class="login-form" action="kt_admin.php" method="post">
            <input type="hidden" name="action" value="registration">
            <h1>REGISTRATION</h1>
            <label for="username">Username</label>
            <br>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit">Registration</button>
        </form>
    </div>
</body>

</html>