<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Healthy Habits</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.2.1.js"></script>
    <script>

    </script>
  </head>
  <body>
    <div id="head">

    </div>
    <div id="form">
      <form action="/index.php">
        <label>Name:</label>
        <input type="text" name="name">
        <br>

        <label>Height:</label>
        <input type="number" name="feet"> feet and <input type="number" name="inches"> inches
        <br>

        <label>Weight:</label>
        <input type="number" name="weight"> lbs
        <br>

        <label>Goal:</label><br>
        <select name="goals" size="3" multiple>
          <option value="weightloss">Lose Weight</option>
          <option value="musclegain">Gain Muscle</option>
          <option value="endurancegain">Improve Aerobic Endurance</option>
        </select>
        <br>

        <input type="submit" value="Submit">
      </form>
    </div>
  </body>
