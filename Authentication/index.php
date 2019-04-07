<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <main class="main">
        <section class="section">
        <img src="./logo.png" alt="Dragon bones Logo" class="logo">
        <p class="login_text">Login to DB</p>
        <p class="login_text_instruction">Click on the following to proceed</p>
        <div class="login_buttons">
        <button class="facebook_login" onclick="location.href='/facebookinit.php'">
            <img src="./fbook.svg" alt=" logo">
            Facebook
        </button>
        <button class="google_login" onclick="location.href='/googleinit.php'">
            <img src="./Google.svg" alt="Google logo">
            Google
        </button>
</div>
        <p class="privacy_policy">By logging in you agree to <span class="policy"> <a href="#">Terms & Conditions</a></span></br> and <span class="policy"><a href="#">Privacy Policy</a></span> of DB</p>

    </section>
</main>
</body>
</html>
