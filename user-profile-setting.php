<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <title>Profile Setting</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Hind:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/profile-user-setting.css">
</head>
<body>
    <main class="motuns-main-container">
        <section class="motuns-side-bar">
            <h3>
                Homepage
            </h3>
            <a class="#">
                Profile
            </a>
        </section>
        <div class="container">
            <section class="motuns-content-container">
                <h2>
                    Settings
                </h2>
                <div class="details">
                    <div class="d-grid update">
                        <img src="/assets/img/avatar-2.jpeg" alt="" class="avatar">
                        <input type="upload" value="update" class="upcase">
                    </div>
                    <form action="/action_page.php">
                        First name:<br>
                        <input type="text" name="firstname" value="Dragon">
                        <br>
                        Last name:<br>
                        <input type="text" name="lastname" value="Blade">
                        <br>
                        Email Address:<br>
                        <input type="text" name="firstname">
                        <br>
                        Change passord:<br>
                        <input type="password" name="lastname">
                        
                    </form> 
                    
                </div>
                <div class="d-flx sub">
                    <span class="co-red">
                        Delete my account
                    </span>
                </div>
            </section>
            <section class="theme">
                <div>
                    <p>
                        Theme
                    </p>
                    <select class="drop">
                        <option value="DragonBlade Slicer Supreme 2000 ">DragonBlade Slicer Supreme 2000 </option>
                        <option value="option 2">option 2</option>
                    </select>
                </div>
                <div class="togg">
                    <p>
                        Mode
                    </p>
                    <div class="d-flx no-justify">
                        <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        </label>
                        <p class="ml-1">
                            Lori Lightfoot
                        </p>
                    </div>
                </div>
            </section>
            <button  class="capitalize lang">
                Save changes
            </button>
        </div>
    </main>
</body>
</html>