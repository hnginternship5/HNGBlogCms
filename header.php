<!-- mylo carson 2019-->
<?php include 'includes/config.php';
//print_r($_SESSION);
extract($_SESSION);?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include 'head-tag.php'; // this is where files that all pages use are located to avoid rules overiding
                            // if you want to add anything, use "head-tag.php"
        ?>
    <!-- Markdown cdn link -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">
</head>
<body id="setCssClass">
<!-- to add the loader to every page check README.MD -->
    <div id="loader-container">
      <div id="loader"></div>
    </div>
  <div id="content" class="container-fluid">
