<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Healthy Habits</title>
  <link type="image/icon" rel="icon" href="icon.png" />
  <?php
    session_start();
    if (isset($_SESSION['user_id'])) {
      if (array_key_exists('logout', $_POST)) {
        session_destroy();
        header("Refresh:0");
      }
      require_once("home.php");
    } else {
      require_once("new_user.php");
    }
  ?>
