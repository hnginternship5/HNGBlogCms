<?php
$title = "Timeline";
include 'header.php'; ?>

<div class="row">

    <!-- Sidebar Starts -->
    <div class="col-sm-3 side-info p-4">
        <div class="logo-area mb-5 mx-4">
            <a href="timeline.php">
                <img src="assets/img/zikilogo.png" alt="" class="logo" />
        </div>
        </a>

        <div class="profile-pic-area mx-auto mt-5">
            <img src="assets/img/dp.png" alt="" class="profile-pic" />
        </div>

        <div class="personal-info text-center ">
            <h1><?php echo $name ?></h1>
            <div class="font-weight-bold skillset">
                <?php echo $email ?>
            </div>
            <div class="shortbio">
                I'm kinda weird in a good way..... I design for survival
            </div>
        </div>

        <div class="sidebar-icons text-center my-3">
            <a href="https://github.com"><i class="fab fa-github social"></i></a>
            <a href="https://dribble.com"><i class="fab fa-dribbble social"></i></a>
            <a href="https://rss.com"><i class="fas fa-rss social"></i></a>
        </div>

        <ul class="nav flex-column p-5 my-5 text-center">
            <li class="nav-item">
                <a class="nav-link" href="#">My Blogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Insights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user-profile-setting.php">Settings</a>
            </li>
        </ul>
    </div>
    <!-- Sidebar Ends -->
    <div class="col-md-9">
        <div class="row justify-content-end">
            <?php if (isset($name)) {
                // code...
            } ?>
            <a href="/Authentication\logout.php" class="btn align-self-end px-5 font-weight-bold">
                Log out</a>
        </div>

        <!-- Post Box Begins -->
        <div class="mx-auto mt-5 mb-2 px-5">
            <div class="post-box p-2">
                <form action="">
                    <div class="form-group px-3">
                        <textarea name="" id="" rows="3" class="form-control post-text" placeholder="What's Happening"></textarea>
                        <div class="toolbars row my-4 ">
                            <div class="col">
                                <img src="assets/img/timeline_icons/type.png" alt="" />
                                <img src="assets/img/timeline_icons/italic.png" alt="" />
                                <img src="assets/img/timeline_icons/attachment2.png" alt="" />
                                <img src="assets/img/timeline_icons/underline.png" alt="" />
                                <img src="assets/img/timeline_icons/bold.png" alt="" />
                            </div>
                            <div class="col text-right">
                                <img src="assets/img/timeline_icons/attachment.png" alt="" />
                                <img src="assets/img/timeline_icons/attachment2.png" alt="" />
                                <img src="assets/img/timeline_icons/mic.png" alt="" />
                                <button type="submit" class="btn btn-publish">
                                    Publish
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- Feature not needed now
                        <div class="row mx-0 d-flex flex-row align-items-center  justify-content-between">
                        <div class="col-md-8 line ml-md-5"></div>
                        <div class="col d-inline-flex mr-md-5 flex-row justify-content-between">
                            <p class="post-filter"><span class="post-filter-title">Sort by:</span> Most Recent Posts</p>
                            <img src="assets/img/caret.svg">
                        </div>
                    </div> -->

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
                                <a href="/blog-detail.php">
                                    <p class="blog-item-more_action ">Read More</p>
                                </a>
                            </div>


                        </div>
                        <p class="blog-item-date">3rd, April 2019 </p>
                    </div>
                </div>
            </div>

        </div>


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
                                    <p class="blog-item-tag text-center">Tech</p>
                                </div>
                                <div class="blog-item-tag-wrapper">
                                    <p class="blog-item-tag text-center">Hotels</p>
                                </div>
                                <a href="/blog-detail.php">
                                    <p class="blog-item-more_action ">Read More</p>
                                </a>
                            </div>


                        </div>
                        <p class="blog-item-date">3rd, April 2019 </p>
                    </div>
                </div>
            </div>

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
                                    <p class="blog-item-tag text-center">Tech</p>
                                </div>
                                <div class="blog-item-tag-wrapper">
                                    <p class="blog-item-tag text-center">Hotels</p>
                                </div>
                                <a href="/blog-detail.php">
                                    <p class="blog-item-more_action ">Read More</p>
                                </a>
                            </div>


                        </div>
                        <p class="blog-item-date">3rd, April 2019 </p>
                    </div>
                </div>
            </div>

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
                                    <p class="blog-item-tag text-center">Tech</p>
                                </div>
                                <div class="blog-item-tag-wrapper">
                                    <p class="blog-item-tag text-center">Hotels</p>
                                </div>
                                <a href="/blog-detail.php">
                                    <p class="blog-item-more_action ">Read More</p>
                                </a>
                            </div>


                        </div>
                        <p class="blog-item-date">3rd, April 2019 </p>
                    </div>
                </div>
            </div>

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
                                    <p class="blog-item-tag text-center">Tech</p>
                                </div>
                                <div class="blog-item-tag-wrapper">
                                    <p class="blog-item-tag text-center">Hotels</p>
                                </div>
                                <a href="/blog-detail.php">
                                    <p class="blog-item-more_action ">Read More</p>
                                </a>
                            </div>


                        </div>
                        <p class="blog-item-date">3rd, April 2019 </p>
                    </div>
                </div>
            </div>

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
                                    <p class="blog-item-tag text-center">Tech</p>
                                </div>
                                <div class="blog-item-tag-wrapper">
                                    <p class="blog-item-tag text-center">Hotels</p>
                                </div>
                                <a href="/blog-detail.php">
                                    <p class="blog-item-more_action ">Read More</p>
                                </a>
                            </div>


                        </div>
                        <p class="blog-item-date">3rd, April 2019 </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- </div> -->

    </div>

</div>

</div>

<script>
    const toggleThemeBtn = document.querySelector('.toggle-theme');
    toggleThemeBtn.addEventListener('click', e => document.querySelector('body').classList.toggle('dark'));
</script>
</body>

</html>