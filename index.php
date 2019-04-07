<?php
include 'config.php';
if (isset($_SESSION['access_token'])) {
  echo 'Signed-in';
  echo "<br>";
  echo "<br>";
  echo "<a href='/dragonblade/'> Visit Dragonblade </a>";
  echo "<br>";
  echo "<a href='/dragonglass/'> Visit Dragonglass </a>";
  echo "<br>";
  echo "<a href='/dragonstone/'> Visit Dragonstone </a>";
  echo "<br>";
  echo "<a href='/dragonslayer/'> Visit Dragonslayer </a>";
}else {

//  print_r ($_SESSION);
  include 'landing-page.php';
}
?>
