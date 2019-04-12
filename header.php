<!-- mylo carson 2019-->
<?php include 'includes/config.php';
//print_r($_SESSION);
extract($_SESSION);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-331.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Hind:400,500,700|Josefin+Sans:300|B612:700|Source+Sans+Pro:900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/newtm.css">

    <!-- Markdown cdn link -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">

    <style type="text/css">
        .pagination-section{
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .padd{padding: 20px 0;}

        /*Media query*/
        @media (max-width: 576px) {
            .post-img{
                max-height: 200px;
                border-radius: 15px 15px 0 0;
            }

            .blog-item-author-avatar{
                z-index: 9999999;
                position: relative;
                top: 30px;
            }

            .posts{
                margin-top: -20px;
            }

            textarea{
                min-height: 40vh !important;
            }

            .post-section{
                min-width: 100%;
                margin: 30px 0px;
            }

            .fa, .fas, .fab{
                font-size: .9em;
                padding: 5px;
            }
        }
    </style>
</head>
<body class="">
  <div class="container-fluid">
    <!-- mylo carson 2019-->
