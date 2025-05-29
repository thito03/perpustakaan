<?php
session_start();
session_destroy();
header("../../log/auth-login.html");
?>