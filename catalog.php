
<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 1) {
        switch ($_GET['food']) {
            case 'taco':
                echo "<img src=\"taco.jpg\">";
                break;
            case 'pizza':
                echo "<img src=\"pizza.jpg\">";
                break;
            default:
                echo "error";
        }
    }
} else {
    header('Location: http://localhost/Laba4/login.php');
}
