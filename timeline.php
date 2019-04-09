<!-- mylo carson 2019-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Task</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Josefin+Sans:300|B612:700|Source+Sans+Pro:900" rel="stylesheet">

    <!-- jquery -->
    <script src="assets/js/jquery-331.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/light-theme.css">
</head>
<body>
    <div class="container-fluid">
        <!-- This is where the header image is placed.. -->
        <div class="row page-head">
            <div class="col-md-12">
                <div class="row">
                    <!-- <div class="col-md-3"></div> -->
                    <div class="col-md-12 text-center header-caption">
                        <h1 class="ziki-post">Ziki</h1>
                        <h3 class="ziki-post">Seamless blogging Experience <br> Constant, Timely update....</h3>
                    </div>
                    <!-- <div class="col-md-5"></div> -->
                </div>
            </div>
        </div>

        <!-- From here onward you will find the codes that generate the body section of 
        this page. -->
        <div class="row page-body">
            <?php include'includes/side_nav.php';?>

            <div class="col-md-9 posts-area">
                <!-- WYSIWYG Editor starts here -->
                <?php include'includes/wysiwyg.php';?>
                <!-- WYSIWYG Editor ends here -->

                <!-- This is the code for posts on card-like view 
                    note that we would only need one of this file
                    when the real project code starts running to generate
                    feeds from backend. Hence the content of the 
                    included file would be dynamic and the rest for
                    includes below would be deleted leaving just one.-->
                <?php include'includes/post_feeds.php';?>
                <?php include'includes/post_feeds.php';?>
                <?php include'includes/post_feeds.php';?>
                <?php include'includes/post_feeds.php';?>
                <?php include'includes/post_feeds.php';?>
                <!-- The code for posts on card-like view ends here -->

                <!-- Pagination code -->
                <div class="row pagination-section">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                            <nav aria-label="Page navigation example">
                              <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#">Next</a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>