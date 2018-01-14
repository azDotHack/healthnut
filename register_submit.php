<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Healthy Habits -- Register</title>
    <link rel="stylesheet" href="style.css">
    <meta type="robots" charset="noindex, nofollow">
    <link type="image/icon" rel="icon" href="icon.png" />
    <style>
      body {
        html,body { height:100%; }
      }
      h2, h3 {
        font-size: 3em;
        margin: 100px;
      }
      div a {
        font-size: 3em;
        padding: 25px;
      }
    </style>
    <script>

    </script>
  </head>
  <body>
    <?php
      require_once("constants.php");

      // gather data
      $first_name = mysqli_real_escape_string($dbc, $_POST["first_name"]);
      $last_name = mysqli_real_escape_string($dbc, $_POST["last_name"]);
      $password = mysqli_real_escape_string($dbc, $_POST["password"]);
      $email = mysqli_real_escape_string($dbc, $_POST["email"]);
      $phone = mysqli_real_escape_string($dbc, $_POST["phone"]);
      $height_feet = mysqli_real_escape_string($dbc, $_POST["height_feet"]);
      $height_inches = mysqli_real_escape_string($dbc, $_POST["height_inches"]);
      $weight = mysqli_real_escape_string($dbc, $_POST["weight"]);
      $age = mysqli_real_escape_string($dbc, $_POST["age"]);

      // calculate height as a singular number
      $height = $height_feet + ($height_inches / 12);

      // submit data to databse
      $query_post = "INSERT INTO users (first_name, last_name, password, email, phone, height, weight, age) "
        . "VALUES ('$first_name', '$last_name', SHA('$password'), '$email', '$phone', '$height', '$weight', '$age')";
      $result_post = query($query_post);

      // get unique id
      $query_get = "SELECT * FROM users ORDER BY id DESC LIMIT 0,1";
      $result_get = query($query_get);
      $id = mysqli_fetch_array($result_get)[0] or die (QUERY_ERROR  . " getting the id");
      $uid = 127 * (int)$id + 12345;

      // confirm

      echo "<h2>Thank you for joining us, $first_name $last_name!</h2>\n";
      echo "<h3>Your user id is $uid</h3>\n";
    ?>

    <div><a href="index.php">Return to Home Page</a></div>
  </body>
</html>
