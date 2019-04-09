<?php
require '../includes/config.php';

session_destroy();

unset($_SESSION);
//print_r($_SESSION);
header("Location: ../index.php");
?>
