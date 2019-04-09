<?php
$pageTitle = 'Welcome to Ziki';
include 'includes/header.php';
?>
<body>
    <div class="container-fluid">
        <div class="row ml-md-3 d-flex flex-column landing-page-container">
            <div>
                <h2 class="landing-page-head text-left"><a href="#">The Platform </a></h2>
            </div>



            <div class="row mx-0 d-flex flex-column">
                <h5 class="landing-page-greeting">Hello Mark Essien,</h5>
                <div class="d-flex flex-row">
                    <h1 class="landing-page-main-header">Welcome to<br/>The Platform </h1>
                    <a href="/auth.php" class="landing-page-btn align-self-end">Join Now</a>
                </div>
                <p class="col-md-4 mr-auto landing-page-info">Welcome to the Utopian future, you no longer need to sign up to enjoy your favourite news sources, Just Join us now to have access and your details will be automatically generated. </p>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>

</body>
</html>