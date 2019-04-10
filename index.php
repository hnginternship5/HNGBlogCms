<?php
$title ="Welcome";
include 'header.php';
 ?>
<<<<<<< HEAD
<?php if (!isset($_SESSION['name']))
=======
 <?php if (!isset($_SESSION['name']))
>>>>>>> upstream/FE
{?>

<head>

<<<<<<< HEAD
    <style>
        .blog-item-main-content {
            margin: 0px;
        }

        .blog-item-img-wrapper {
            width: auto;
            margin: 0;
        }

        .blog-item-img {
            height: 185px;
            width: inherit;
        }

        .blog-item-author-avatar {
            position: relative;
            top: 45px;

        }

        @media (min-width: 520px) and (max-width:1100px) {
            .blog-item-author-avatar {
                position: relative;
                z-index: 1;
                margin-left: -40px;
            }

            .blog-item-more_action {
                display: block;
                width: 5em;

            }
        }

        /* media query for phones like iphones with smaller screens */

        @media (max-width:520px) {
            .blog-item-author-avatar {
                position: relative;
                z-index: 1;
            }

            .blog-item-main {
                margin-top: 45px;
            }

            .blog-item-more_action {
                display: block;
                margin-top: 7em;
                margin-left: -7em;

            }
        }
    </style>

</head>

<div class="container-fluid">
    <div class="row justify-content-between m-4">
        <div class="col-6 d-flex justify-content-start">
            <img class="img-fluid logo" src="assets/img/zikilogo.png">
        </div>

        <div class="col-6 d-flex justify-content-end">
            <a href="/auth.php" class="btn btn-primary align-self-end px-5">Login</a>
        </div>

    </div>
    <?php  }else {
      }
       ?>
    <div class="container d-flex">

        <div class="row">

            <!-- blog item beginning container -->
            <div class="blog-item-author-avatar-wrapper">
                <img class="blog-item-author-avatar" src="assets/img/naomi.png">
            </div>
=======
    <div class="container-fluid">
        <div class="row justify-content-between m-4">
            <img class="img-fluid logo" src="assets/img/logo.png">
            <button type="button" class="btn btn-primary align-self-end px-5" data-toggle="modal" data-target="#exampleModalCenter">
                Login
            </button>
        </div>
  <?php  }else {
      }
       ?>

        <div class="container justify-content-center">
            <div class="col-xs-5">

                <!-- <div class=""> -->

                <div class="row mx-0 mt-md-4 blog-item-wrapper first-child">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/naomi.png">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/wall.jpg">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">This is my first Post</h2>

                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>

                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
                        </div>
                    </div>

                </div>
>>>>>>> upstream/FE

            <div class="row d-flex justify-content-center">
                <div class="col-2">
                    <!-- empty column for spacing purpose, do not delete -->
                </div>

<<<<<<< HEAD
                <div class="blog-itemss col-10 blog-item-main">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img img-fluid align-middle mt-4" src="assets/img/wall.jpg">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="title-items d-flex justify-content-start">
                                <h2 class="blog-item-header">This is my first post</h2>
                            </div>
                            <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                            <p class="blog-item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur
                                adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                            <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="blog-item-tag-wrapper">
                                        <p class="blog-item-tag text-center">Javascript</p>
                                    </div>
                                    <div class="blog-item-tag-wrapper">
                                        <a href="#">
=======
                <div class="row mx-0 blog-item-wrapper">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/naomi.png">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/image-1.png">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">C.Ronaldo vs Messi</h2>
                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
>>>>>>> upstream/FE
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>
<<<<<<< HEAD
                                    <a href="/blog-detail.php">
                                        <p class="blog-item-more_action pl-2">Read More</p>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-end ">
                                    <a href="/auth.php">
=======
                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
>>>>>>> upstream/FE
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
<<<<<<< HEAD
                            <p class="blog-item-date mt-2">3rd, April 2019 </p>
=======
>>>>>>> upstream/FE
                        </div>

                    </div>
<<<<<<< HEAD
                </div>
            </div>
            <!-- blog item container ending -->



            <!-- blog item beginning container -->
            <div class="blog-item-author-avatar-wrapper">
                <img class="blog-item-author-avatar" src="assets/img/naomi.png">
            </div>
=======

                </div>
>>>>>>> upstream/FE

            <div class="row d-flex justify-content-center">
                <div class="col-2">
                    <!-- empty column for spacing purpose, do not delete -->
                </div>

<<<<<<< HEAD
                <div class="blog-itemss col-10 blog-item-main">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img img-fluid align-middle mt-4" src="assets/img/image-1.png">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="title-items d-flex justify-content-start">
                                <h2 class="blog-item-header">C.Ronaldo vs Messi</h2>
                            </div>
                            <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                            <p class="blog-item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur
                                adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                            <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="blog-item-tag-wrapper">
                                        <p class="blog-item-tag text-center">Javascript</p>
                                    </div>
                                    <div class="blog-item-tag-wrapper">
                                        <a href="#">
=======
                <div class="row mx-0 blog-item-wrapper">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/image-1.png">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">The effect of culture on design trends</h2>
                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
>>>>>>> upstream/FE
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>
<<<<<<< HEAD
                                    <a href="/blog-detail.php">
                                        <p class="blog-item-more_action pl-2">Read More</p>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-end ">
                                    <a href="/auth.php">
=======

                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
>>>>>>> upstream/FE
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
<<<<<<< HEAD
                            <p class="blog-item-date mt-2">3rd, April 2019 </p>
=======
>>>>>>> upstream/FE
                        </div>

                    </div>
<<<<<<< HEAD
                </div>
            </div>
            <!-- blog item container ending -->

            <!-- blog item beginning container -->
            <div class="blog-item-author-avatar-wrapper">
                <img class="blog-item-author-avatar" src="assets/img/naomi.png">
            </div>
=======

                </div>
>>>>>>> upstream/FE

            <div class="row d-flex justify-content-center">
                <div class="col-2">
                    <!-- empty column for spacing purpose, do not delete -->
                </div>

<<<<<<< HEAD
                <div class="blog-itemss col-10 blog-item-main">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img img-fluid align-middle mt-4" src="assets/img/wall.jpg">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="title-items d-flex justify-content-start">
                                <h2 class="blog-item-header">This is my first post</h2>
                            </div>
                            <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                            <p class="blog-item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur
                                adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                            <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="blog-item-tag-wrapper">
                                        <p class="blog-item-tag text-center">Javascript</p>
                                    </div>
                                    <div class="blog-item-tag-wrapper">
                                        <a href="#">
=======
                <div class="row mx-0 blog-item-wrapper">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/image-1.png">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">This is my first Post</h2>

                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
>>>>>>> upstream/FE
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>
<<<<<<< HEAD
                                    <a href="/blog-detail.php">
                                        <p class="blog-item-more_action pl-2">Read More</p>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-end ">
                                    <a href="/auth.php">
=======

                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
>>>>>>> upstream/FE
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
<<<<<<< HEAD
                            <p class="blog-item-date mt-2">3rd, April 2019 </p>
=======
>>>>>>> upstream/FE
                        </div>

                    </div>
<<<<<<< HEAD
                </div>
            </div>
            <!-- blog item container ending -->


            <!-- blog item beginning container -->
            <div class="blog-item-author-avatar-wrapper">
                <img class="blog-item-author-avatar" src="assets/img/naomi.png">
            </div>
=======

                </div>
>>>>>>> upstream/FE

            <div class="row d-flex justify-content-center">
                <div class="col-2">
                    <!-- empty column for spacing purpose, do not delete -->
                </div>

<<<<<<< HEAD
                <div class="blog-itemss col-10 blog-item-main">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img img-fluid align-middle mt-4" src="assets/img/wall.jpg">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="title-items d-flex justify-content-start">
                                <h2 class="blog-item-header">This is my first post</h2>
                            </div>
                            <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                            <p class="blog-item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur
                                adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                            <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="blog-item-tag-wrapper">
                                        <p class="blog-item-tag text-center">Javascript</p>
                                    </div>
                                    <div class="blog-item-tag-wrapper">
                                        <a href="#">
=======
                <div class="row mx-0 blog-item-wrapper">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/image-1.png">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">This is my first Post</h2>
                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
>>>>>>> upstream/FE
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>
<<<<<<< HEAD
                                    <a href="/blog-detail.php">
                                        <p class="blog-item-more_action pl-2">Read More</p>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-end ">
                                    <a href="/auth.php">
=======

                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
>>>>>>> upstream/FE
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
<<<<<<< HEAD
                            <p class="blog-item-date mt-2">3rd, April 2019 </p>
=======
>>>>>>> upstream/FE
                        </div>

                    </div>
<<<<<<< HEAD
                </div>
            </div>
            <!-- blog item container ending -->


            <!-- blog item beginning container -->
            <div class="blog-item-author-avatar-wrapper">
                <img class="blog-item-author-avatar" src="assets/img/naomi.png">
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-2">
                    <!-- empty column for spacing purpose, do not delete -->
                </div>

                <div class="blog-itemss col-10 blog-item-main">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img img-fluid align-middle mt-4" src="assets/img/wall.jpg">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="title-items d-flex justify-content-start">
                                <h2 class="blog-item-header">This is my first post</h2>
                            </div>
                            <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                            <p class="blog-item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur
                                adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                            <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="blog-item-tag-wrapper">
                                        <p class="blog-item-tag text-center">Javascript</p>
                                    </div>
                                    <div class="blog-item-tag-wrapper">
                                        <a href="#">
=======

                </div>

                <div class="row mx-0 blog-item-wrapper">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/image-1.png">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">This is my first Post</h2>
                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
>>>>>>> upstream/FE
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>
<<<<<<< HEAD
                                    <a href="/blog-detail.php">
                                        <p class="blog-item-more_action pl-2">Read More</p>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-end ">
                                    <a href="/auth.php">
=======

                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
>>>>>>> upstream/FE
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
<<<<<<< HEAD
                            <p class="blog-item-date mt-2">3rd, April 2019 </p>
=======
>>>>>>> upstream/FE
                        </div>

                    </div>
<<<<<<< HEAD
                </div>
            </div>
            <!-- blog item container ending -->

=======

                </div>
                <!-- </div> -->
            </div>
>>>>>>> upstream/FE
        </div>
    </div>

    </div>

    <script>
        const toggleThemeBtn = document.querySelector('.toggle-theme');
        toggleThemeBtn.addEventListener('click', e => document.querySelector('body').classList.toggle('dark'));
    </script>

    <?php include'auth.php' ;?>
    
</body>

</html>