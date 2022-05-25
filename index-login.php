<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File System Explorer</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="title-container">
                <div class="title">
                    <h1>File System Explorer - Login</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="container">
            <div class="body-container">
                <div class="container-form">

                    <form method="post" id="form" action="./session/validate.php">

                        <h4>User Name</h4>
                        <input type="text" id="userName" name="userName" required>
                        <h4>Password</h4>
                        <input type="password" id="password" name="password" required>

                        <div>
                            <input class="btn" type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
session_start();
if (isset($_COOKIE["NotLoggedCookie"])) {
    echo $_COOKIE["NotLoggedCookie"];
    unset($_COOKIE['NotLoggedCookie']);
    setcookie('NotLoggedCookie', null, -1, '/');
} else if (isset($_COOKIE["IncorrectLoginCookie"])) {
    echo $_COOKIE["IncorrectLoginCookie"];
    unset($_COOKIE['IncorrectLoginCookie']);
    setcookie('IncorrectLoginCookie', null, -1, '/');
}
?>

</html>