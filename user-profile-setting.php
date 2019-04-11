<?php include 'includes/config.php';
//print_r($_SESSION);
extract($_SESSION);

if(isset($_SESSION['accesstoken'])){
  try{

  }catch(Exception $e){
    //echo "Google Auth Error:  ". $e->getMessage();
  }
} else{
  header("Location: index.php");
}
?>

<!-- =========================================================
DO NOT WORK ON THE FRONT END FOR THIS PAGE YET
========================================================== -->

<body id="setCssClass">
    <main class="motuns-main-container">
        <section class="motuns-side-bar">
        <div class="logo-area logo-profile">
	      <a href="timeline.php">
            <img src="assets/img/zikilogo.png" alt="" class="logo" />
            </a>
          </div>

            <p class="">
                Profile
            </p>
        </section>
        <div class="container">
            <section class="motuns-content-container">
                <h2>
                    Settings
                </h2>
                <div class="details">
                    <div class="d-grid update">
                    <img src="<?php echo $img ?>" alt="Not Found" onerror=this.src="assets/img/avatar-2.jpeg" class="avatar" />
                    <br/>
                        <button class="upcase user-profile-button">
                            update
                        </button>
                    </div>
                    <form class="user-profile-setting-form" action="#">
                        Full Name:<br>
                        <input class="user-profile-input" type="text" name="firstname" placeholder="<?php
                             echo $name;
                        ?>">
                        <br>

                        Email Address:<br>
                        <input class="user-profile-input" type="text" name="email" placeholder="<?php
                             echo $email;
                        ?>">
                        <br>
                        Change password:<br>
                        <input class="user-profile-input" type="text" name="lastname">

                    </form>

                </div>
                <div class="sub">
                  <div>
                    <span class="btn mb-3 user-profile-button co-red">
                        Delete account
                    </span>
                  </div>
                    <p class="lang">
                        Language
                        <span class="en">
                            en
                        </span>
                    </p>
                </div>
            </section>
            <section class="theme">
                <div>
                    <p>
                        Theme
                    </p>
                    <button class="drop user-profile-button">
                        DragonBlade Slicer Supreme 2000
                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 12L0.0717973 -6.02284e-07L13.9282 -1.81365e-06L7 12Z" fill="#9A9A9A"/>
                        </svg>
                    </button>
                </div>
                <div class="togg">
                    <p>
                        Mode
                    </p>
                    <div class="d-flx no-justify">
                        <div class="">
                        <label class="switch">
                             <input type="checkbox" class="toggleFocus" id="toggleThemeMode">
                             <span class="slider round"></span>
                        </label>
                        </div>
                        <p class="ml-1 themeModeLabel">
                            Light Mode
                        </p>
                    </div>
                </div>
            </section>
            <button  class="capitalize lang user-profile-button">
                Save changes
            </button>
        </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="SwitchTheme.js"></script>
</html>
