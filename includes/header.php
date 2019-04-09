<?php
session_start();
include_once 'functions.php';
//use currently selected theme
$theme = isset($_SESSION['themeMode']) ? $_SESSION['themeMode'] : 'light'; //TODO: Use proper theming structure from FE
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css/theme1.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>