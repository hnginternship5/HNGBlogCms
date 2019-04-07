<?php
require './auth/facebookinit.php';
require './auth/googleinit.php';

if (isset($_SESSION['access_token'])) {
    ?>
    </br>
    <a href="logout.php">Logout</a>
<?php
} else if (isset($_SESSION['accesstoken'])) {
    ?>
    </br>
    <a href="logout.php">Logout</a>
<?php
} else {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/authentication.css">
        <title>Document</title>
    </head>

    <body>
        <main class="main">
            <section class="section">
                <img src="./logo.png" alt="Dragon bones Logo" class="logo">
                <p class="login_text">Login to DB</p>
                <p class="login_text_instruction">Click on the following to proceed</p>
                <div class="login_buttons">
                    <a class="facebook_login" href="<?php echo $login_url; ?>"> <img src="./fbook.svg" alt=" logo">
                        Facebook
                    </a>
                    <a class="google_login" href="<?php echo $glogin_url; ?>">
                        <img src="./Google.svg" alt="Google logo">
                        Google
                    </a>
                </div>
                <p class="privacy_policy">By logging in you agree to <span class="policy"> <a href="#">Terms & Conditions</a></span></br> and <span class="policy"><a href="#">Privacy Policy</a></span> of DB</p>

            </section>
        </main>
    </body>

    </html>


<?php
}
?>
