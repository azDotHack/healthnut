<link rel="stylesheet" href="style.css">

<style>
table.mytask {
    width: 40%;
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

div.sidebar{
  float:right;
}
</style>


<div id="head">
  <!--TODO insert img references -->
  <img id="logo" src="" alt="Healthy Habits">
  <h1>Welcome back, User!</h1>
  <img id="profile" src="" alt="Profile">
</div>

<div>
<div>
  <div id="tasks">
    <header>
      <h3>My Tasks/Habits</h3> <!-- TODO change this text -->
    </header>

    <div id="tasklist">

      <!--TODO implement PHP code to generate this HTML-->
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
      <!-- end of PHP code generation -->
    </div>

    <footer>
        <a href="tasks.php">More Details</a> <!--TODO link this correctly-->
    </footer>
  </div>

  <div id="motivators">
    <header>
      <h3>Your Motivators</h3>
    </header>
  </div>
</div>

<div id="social" class="sidebar">
  <header>
    <h3>Social</h3>
  </header>

  <div id="verifylist">
    <table>
      <tr>
        <th rowspan="2"><img id="motivatorpfp" src="" alt="James Rund"></th>
        <th>James Rund</th>
        <th>Verify:</th>
      </tr>
      <tr>
        <td class="task">Fall Asleep at Hackathon</th>
        <td class="complete">
          <form>
            <button type="button" onclick="alert('Conflagration! They winned')">Complete!</button>
          </form>
        </td>
      </tr>
    </table>
    <br>
  </div>

  <footer>
    <a href="social.php">See more</a> <!--TODO link this correctly-->
  </footer>
</div>
</div>
