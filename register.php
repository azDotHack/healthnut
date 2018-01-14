<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Healthy Habits -- Register</title>
    <link rel="stylesheet" href="style.css">
    <link type="image/icon" rel="icon" href="icon.png" />
    <style>
    h1 {
      margin-top: 25px;
    }

    table {
      margin: auto;
      text-align: left;
    }

    table * {
      margin: 25px;
      margin-top: -10px;
    }

    #sub {
      text-align: center;
    }

    #sub input {
      margin-left: 65px;
    }
    </style>
    <script>

    </script>
  </head>
  <body>
    <h1>Your Healthy Habits Start Now!</h1>
    <div id="form">
      <form action="register_submit.php" method="post">
        <?php
          function select($name, $min, $max) {
            echo "<select name='$name'>\n";
            for ($i = $min; $i < $max; ++$i) {
              echo "<option value='$i'>$i</option>\n";
            }
            echo "</select>\n";
          }
        ?>
        <table>
          <tr>
            <td><label>First Name</label></td>
            <td><input type="text" name="first_name"></td>
          </tr>
          <tr>
            <td><label>Last Name</label></td>
            <td><input type="text" name="last_name"></td>
          </tr>
          <tr>
            <td><label>Password</label></td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td><label>Email Address</label></td>
            <td><input type="text" name="email"></td>
          </tr>
          <tr>
            <td><label>Phone #</label></td>
            <td><input type="text" name="phone"></td>
          </tr>
          <tr>
            <td><label>Height (lbs)</label></td>
            <td>
              <?php select("height_feet", 0, 10); ?> feet and
              <?php select("height_inches", 0, 12); ?> inches
            </td>
          </tr>
          <tr>
            <td><label>Weight</label></td>
            <td><?php select("weight", 0, 2001); ?> pounds</td>
          </tr>
          <tr>
            <td><label>Age</label></td>
            <td><?php select("age", 0, 120); ?> years</td>
          </tr>
          <tr>
            <td colspan="2" id="sub"><input type="submit" value="Create an Account"></td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
