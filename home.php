<link rel="stylesheet" href="style.css">

<style>
.mytask, .motivatortask {
    border-collapse: collapse;
}

table {
  border-radius: 30px;
}

table, th, td {
    border: thick groove white;
}

th, td {
  padding: 10px;
}

td.complete {
  width: 10%;
  text-align: center;
}

.flex-container {
  display: flex;
}

.flex-container > div {
  margin: 20px;
}

.section {
  text-align: center;
  margin-top: 20px;
}

#logout {
  text-decoration: none;
  font-family: "Helvetica Neue", "Helvetica", sans-serif;
  color: white;
  background-color: rgba(187, 187, 255, 0.5);
  border-radius: 10px;
  padding: 10px;
  transition: background-color 0.5s ease-in-out;
  border: none;
  font-size: inherit;
}

#logout:hover {
  background-color: rgba(187, 187, 255, 1);
  transition: background-color 0.5s ease-in-out;
}

.profile {
  width: 100px;
  height: 100px;
}

#logo img {
  width: 400px;
  height: 200px;
}

div#logo, #welcome {
  display: inline-block;
}

button {
  padding: 10px;
  border-radius: 15px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.5s ease-in-out;
  transition: color 0.5s ease-in-out;
}

button:hover {
  background-color: #333;
  color: #CCC;
  transition: background-color 0.5s ease-in-out;
  transition: color 0.5s ease-in-out;
}

footer div {
  margin: 25px 0;
}
</style>

<div id="head">
  <div id="logo"><img src="logo.png" alt="Healthy Habits"></div>
  <div id="welcome">
    <h1>Welcome back, <?php echo $_SESSION['user_id']; ?>!</h1>
    <img class="profile" src="profile_pic.jpg" alt="Profile">
    <form action="index.php" method="post">
      <div><input type="hidden" name="logout" value="logout"></div>
      <div><input id="logout" type="submit" value="Log Out"></div>
    </form>
  </div>
</div>

<div class="flex-container">
  <div id="west" style="flex-grow: 6">
    <div id="tasks" class="section">
      <header>
        <h3>My Habits</h3>
      </header>

      <div id="tasklist">
          <?php
            function getDueDate($type) {
              if (strtolower($type) == 'daily') {
                $datetime = new DateTime('tomorrow');
                return $datetime->format('Y-m-d H:i:s');
              } else {
                return date("Y-m-d", strtotime("+1 week"));
              }
            }

            require_once("constants.php");
            $result = query("SELECT * FROM goals WHERE user_id='" . $_SESSION['id'] . "'");

            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<table class='mytask'>";
              echo "<tr>";
              echo "<th>" . $row['type'] . "</th>";
              echo "<th>Due: " . getDueDate($row['type']) . "</th>";
              echo "</tr>";
              echo "<td class='task'>";
              echo $row['habit_name'];
              echo "</td>";
              echo "<td class='complete'>";
              echo "<form><button type=\"button\" onclick='alert(\"Conglaturation! Your winner\")'>Complete!</button></form>";
              echo "</td>";
              echo "</tr>";
              echo "</table>";
              echo "<br>";
              ++$count;
            }
            if ($count == 0) {
              echo "<tr><th><em>You don't have any goals yet!</em></th></tr>";
            }
          ?>
      </div>
      <footer>
          <div><a href="goal.php">Start a Goal</a></div>
          <div><a href="tasks.php">More Details</a></div>
      </footer>
    </div>
  </div>

  <div id="east" style="flex-grow: 4">
    <div id="social" class="section">
      <header>
        <h3>Social</h3>
      </header>

      <div id="verifylist">
        <!-- TODO implement PHP to generate this HTML -->
        <table class="motivatortask">
          <tr>
            <th rowspan="3"><img class="profile" id="motivatorpfp" src="profile_pic.jpg" alt="James Rund"></th>
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
      <footer>
        <a href="social.php">See More</a>
      </footer>
    </div>
    <div id="motivators" class="section">
      <header>
        <h3>Your Motivators</h3>
      </header>
    </div>
  </div>
</div>
