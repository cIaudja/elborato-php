<?php
session_start();
if(isset($_SESSION['loggato'])) {
    $_SESSION = array();
    unset($_SESSION['nomeutente']);
    header('Location:home.php');
    $_SESSION['loggato']=false;
    $_SESSION['nomeutente']=null;
    exit();
} else {
    session_destroy();
    exit();
}
?>