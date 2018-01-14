<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Healthy Habits -- Register</title>
    <link rel="stylesheet" href="style.css">
    <meta type="robots" charset="noindex, nofollow">
    <link type="image/icon" rel="icon" href="icon.png" />
    <style>
    html, body {   height: 100%;  }

    h1, form, input, select {
      margin: 25px;
      font-size: 2em;
    }

    input[type='submit'], select {
      padding: 10px;
    }

    h1 {
      margin-top: 175px;
    }
    </style>
    <script>

    </script>
  </head>
  <body>
    <h1>Let's Begin a Goal!</h1>
    <form action="goal_specific.php" method="get">
      <div>
        <label>What are you trying to accomplish?</label>
        <br>
        <select name="goal">
          <option value="lose weight">Lose Weight</option>
          <option value="gain weight">Gain Weight</option>
        </select>
        <br>
        <input type="submit" value="Start Goal">
      </div>
    </form>
  </body>
</html>
