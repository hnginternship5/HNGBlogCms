<!-- this contains assets that all pages require
    include theme inside the opening and closing <head></head> tags and be sure to specify the page title
 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-331.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Hind:400,500,700|Josefin+Sans:300|B612:700|Source+Sans+Pro:900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <script>
      window.onload = function displaycontent() {
        var content = document.querySelector('#content');
        var loaderContainer = document.querySelector('#loader-container');

        setTimeout(function() {
          loaderContainer.style.display = 'none';
          content.style.opacity = 1;
          var date = new Date;
          document.querySelector("#copyright-year").textContent= date.getFullYear();
        }, 1000);
      }
    </script>
    <style>
      #loader-container {
        transition: display 0.3s;
        background: transparent;
      }
      #loader {
        position: absolute;
        top: 50%;
        left: 50%;
        border: 4px solid var(--ziki-blue);
        border-top: 4px solid transparent;
        border-bottom: 4px solid transparent;
        border-radius: 50%;
        width: 4rem;
        height: 4rem;
        animation: load 0.7s cubic-bezier(0, 0.17, 1, 1) infinite;
      }
      #content {
        transition: opacity 0.3s;
        opacity: 0;
        max-width: 90%;
        margin: auto;
      }
      @keyframes load {
        0% {
          -webkit-transform: translate(-50%, -50%) rotate(0deg);
        }
        50% {
          -webkit-transform: translate(-50%, -50%) rotate(180deg) scale(1.1);
        }
        100% {
          -webkit-transform: translate(-50%, -50%) rotate(360deg);
        }
      }
    </style>

