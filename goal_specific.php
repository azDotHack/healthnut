<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Healthy Habits -- Register</title>
    <link rel="stylesheet" href="style.css">
    <meta type="robots" charset="noindex, nofollow">
    <link type="image/icon" rel="icon" href="icon.png" />
    <style>
    html, body {   height: 100%; }

    h1 {
      font-size: 3em;
    }

    form, select, input {
      margin: 25px;
      font-size: 2em;
    }
    </style>
    <script>

    </script>
  </head>
  <body>
    <?php
      $goal = $_GET['goal'];
      $goal = strtolower($goal);
      if ($goal == 'lose weight') {
        require_once("lose_weight.php");
      } else if ($goal == 'gain weight') {
        require_once("gain_weight.php");
      } else {
        echo "<h1>Error in backend code: the value is ($goal)</h1>";
      }
    ?>
  </body>
</html>
