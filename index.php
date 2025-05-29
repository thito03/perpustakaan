<?php
if(isset($_SESSION['login'])) {
    header('Location: main.php');
    exit();
}