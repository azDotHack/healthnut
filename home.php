<link rel="stylesheet" href="style.css">

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
}

.flex-container>div{
  margin: 20px;
}

.section{
  margin:10px;
  padding:20px;
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
  background-color: rgba(187, 187, 255, 1);
}
</style>


<div id="head">
  <!--TODO insert img references -->
  <img id="logo" src="" alt="Healthy Habits">
  <h1>Welcome back, <?php echo $_SESSION['user_id']; ?>!</h1>
  <img id="profile" src="" alt="Profile">
  <form action="index.php" method="post">
    <div><input type="hidden" name="logout" value="logout"></div>
    <div><input id="logout" type="submit" value="Log Out"></div>
  </form>
</div>

<div id="content" class="flex-container">
  <div id="west" style="flex-grow: 6">
    <div id="tasks" class="section">
      <header>
        <h3>My Tasks/Habits</h3> <!-- TODO change this text -->
      </header>

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

      <footer>
          <a href="tasks.php">More Details</a> <!-- TODO link this correctly -->
      </footer>
    </div>

    <div id="motivators" class="section">
      <header>
        <h3>Your Motivators</h3>
      </header>

        <!-- TODO PHP code generation -->
      <div id="motivatorlist" class="flex-container">
        <div>
          <img src="" alt="some picture">
          <h6>James Rund</h6>
        </div>

      </div>
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

      <footer>
        <a href="social.php">See more</a> <!--TODO link this correctly-->
      </footer>
    </div>
  </div>
</div>
