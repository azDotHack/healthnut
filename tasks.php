<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>My Tasks</title>
  <link rel="stylesheet" href="style.css">
  <link type="image/icon" rel="icon" href="icon.png" />
  <style>
  .mytask, .motivatortask {
      border-collapse: collapse;
  }

  table, th, td {
      border: 1px solid black;
  }

  th, td{
    padding: 10px;
  }

  td.complete{
    width: 10%;
    text-align: center;
  }

  .flex-container{
    display: flex;
    flex-direction: row;
  }

  .flex-container>div{
    margin: 20px;
  }

  .section{
    margin:10px;
    padding:20px;
  }

  #logo{
    height:150px;
    weight:150px;
  }
  </style>
</head>

<body>
  <div id="head">
    <!--TODO insert img references, reorg head bar -->
    <a href="index.html">
      <img id="logo" src="logo.png" alt="Healthy Habits">
    </a>
    <h1>My Tasks</h1>
    <img id="profile" src="" alt="Profile">
  </div>

  <div id="content">
    <div class="flex-container">
      <a href="home.php" style="float:left">Return to Home</a>
      <h2 style="flex-grow:2">Goals:</h2>
      <ul style="flex-grow:1">
        <li>Lose Weight</li>
        <li>Gain Muscle</li>
      </ul>
    </div>
    <div id="tasks" class="section">
      <div id="tasklist">

        <!-- TODO implement PHP code to generate this HTML -->
        <table class="mytask">
          <tr>
            <th>Daily</th>
            <th>Due: 1/14/2018</th>
          </tr>
          <tr>
            <td class="task">Do 10 Jumping Jacks</td>
            <td class="complete">
              <form>
                <button type="button" onclick="alert('Conglaturation! Your winner')">Complete!</button>
              </form>
            </td>
          </tr>
        </table>
        <br>

        <table class="mytask">
          <tr>
            <th>Daily</th>
            <th>Due: 1/14/2018</th>
          </tr>
          <tr>
            <td class="task">Do 10 Lunges</td>
            <td class="complete">
              <form>
                <button type="button" onclick="alert('Conglaturation! Your winner')">Complete!</button>
              </form>
            </td>
          </tr>
        </table>
        <br>

        <table class="mytask">
          <tr>
            <th>Weekly: At the Gym</th>
            <th>Due: 1/19/2018</th>
          </tr>
          <tr>
            <td class="task">Run 5km on the Treadmill</td>
            <td class="complete">
              <form>
                <button type="button" onclick="alert('Conglaturation! Your winner')">Complete!</button>
              </form>
            </td>
          </tr>
          <tr>
            <td class="task">Bench Press: 5 sets of 5 reps</td>
            <td class="complete">
              <form>
                <button type="button" onclick="alert('Conglaturation! Your winner')">Complete!</button>
              </form>
            </td>
          </tr>
          <tr>
            <td class="task">Swim 200m</td>
            <td class="complete">
              <form>
                <button type="button" onclick="alert('Conglaturation! Your winner')">Complete!</button>
              </form>
            </td>
          </tr>
        </table>
        <br>
        <!-- end of PHP code generation -->
      </div>
    </div>

  </div>
</body>
</html>
