<html>
<head>
    <title>Login</title>
</head>
<body>

<?php
    session_start();
    if (array_key_exists('login', $_POST)) {
        if ($_POST['login'] == "vanya" && $_POST['pass'] == "paliy"){
            $_SESSION['login'] = 1;$_SESSION['login'] = 1;
            header('Location: http://localhost/Laba4/index.php');
        } else {
          echo "Wrong login or pass";
        }
    }
?>

<form action="" method="post">
    <p>Login: <input type="text" name="login" /></p>
    <p>Password: <input type="text" name="pass" /></p>
    <input type="submit" value="Login">
</form>
</body>
</html>
