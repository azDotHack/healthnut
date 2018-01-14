<?php
function select($name, $min, $max) {
  echo "<select name='$name'>\n";
  for ($i = $min; $i < $max; ++$i) {
    echo "<option value='$i'>$i</option>\n";
  }
  echo "</select>\n";
}
?>

<form action="" method="post">
  <div>
    <label>How often do you go to the gym per week?</label>
    <?php select("gym_freq", 0, 8); ?>
    <br>
    <label>How long are you typically at the gym for?</label>
    <?php select("gym_length", 0, 8); ?>
    hours
    <br>
    <label>How many times per week do you eat fast food?</label>
    <?php select("ff_freq", 0, 8); ?>
    <br>
    <label>How many hours of sleep do you get per day?</label>
    <?php select("sleep_freq", 0, 24) ?>
    <br>
    <input type="submit" value="Create Goal">
  </div>
</form>

<?php
  if (isset($_POST['gym_freq'])) {
    session_start();
    $gym_freq = $_POST['gym_freq'];
    $gym_length = $_POST['gym_length'];
    $ff_freq = $_POST['ff_freq'];
    $sleep_freq = $_POST['sleep_freq'];

    $dbc = mysqli_connect("localhost", "root", "", "healthy_habits") or die("Error connecting");
    $result_goal = mysqli_query($dbc, "INSERT INTO goals (goal_name, user_id) VALUES ('lose weight', '" . $_SESSION['id'] . "')");
    $result_gym = mysqli_query($dbc, "INSERT INTO habits (habit_name, user_id, type) VALUES ('Go to the gym " . ($gym_freq + 1) . " times', " . $_SESSION['id'] . ", 'weekly')");
    $result_gym_l = mysqli_query($dbc, "INSERT INTO habits (habit_name, user_id, type) VALUES ('Stay at the gym for " . ($gym_length) . " hours', " . $_SESSION['id'] . ", 'daily')");
    $result_f = mysqli_query($dbc, "INSERT INTO habits (habit_name, user_id, type) VALUES ('Only go out to eat " . ($ff_freq - 1) . " times', " . $_SESSION['id'] . ", 'weekly')");
    $result_sleep = mysqli_query($dbc, "INSERT INTO habits (habit_name, user_id, type) VALUES ('Sleep for " . ($sleep_freq + 0.5) . " hours', " . $_SESSION['id'] . ", 'daily')");

    header("Location: http://localhost/site/hz2/index.php");
    exit();
  }
?>
