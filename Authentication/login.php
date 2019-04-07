<?php
require './auth/facebookinit.php';
require './auth/googleinit.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/home-page.css">
    <title>Login/SignUp</title>
</head>

<?php
if(isset($_SESSION['access_token'])){
    ?>
    <br/>
    <a href="logout.php">Logout</a>
<?php
} else if (isset($_SESSION['accesstoken'])) {
    ?>
    <br/>
    <a href="logout.php">Logout</a>
    <?php
}
else{
?>
    <body>
        <div class="box">
            <img class="home-logo" src="/img/DB.png" alt="FB Image">
            <h3>Login to DB</h3>
            <p>Click on the following to proceed</p>
            <div class="social-links">
                <a href="<?php echo $login_url;?>">
                    <img class="social-icon" src="/img/fb.png" alt="">Login with facebook
                </a>
                <a href="<?php echo $glogin_url;?>">
                    <img class="social-icon" src="/img/google.png" alt="">Login with Google
                </a>
            </div>
            <p class="conditions">By logging in you agree to <a href="#">Terms &amp; Conditions</a><br>and <a href="#">Privacy Policy</a> of DB.</p>
        </div>
    
    </body>
</html>
<?php
}
?>
