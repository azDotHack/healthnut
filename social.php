<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Motivators</title>
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

  .flex-container {
    display: flex;
    margin: 20px;
    justify-content: center;
    align-items: center;
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
    <h1>Motivator Verification</h1>
    <img id="profile" src="" alt="Profile">
  </div>

  <div id="content">
    <div>
      <a href="home.php" style="float:left">Return to Home</a>
    </div>
    <div id="social" class="section">
      <div id="verifylist" class="flex-container">
        <!-- TODO implement PHP to generate this HTML -->
        <table class="motivatortask">
          <tr>
            <th rowspan="3"><img id="motivatorpfp" src="" alt="James Rund"></th>
            <th>James Rund</th>
            <th>Verify:</th>
          </tr>
          <tr>
            <td class="task">Fall Asleep at Hackathon</td>
              <td class="complete">
                <form>
                  <button type="button" onclick="alert('Conflagration! They winned')">Complete!</button>
                </form>
              </td>
          </tr>
          <tr>
            <td class="task">Pitch Hackathon idea</td>
              <td class="complete">
                Incomplete
              </td>
          </tr>
        </table>
        <br>
        <!-- end of PHP code generation -->
      </div>
    </div>

</body>
