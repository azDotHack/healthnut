<?php
function select($name, $min, $max) {
  echo "<select name='$name'>\n";
  for ($i = $min; $i < $max; ++$i) {
    echo "<option value='$i'>$i</option>\n";
  }
  echo "</select>\n";
}
?>

<form action="index.php">
  <div>
    <label>How often do you go to the gym per week?</label>
    <?php select("gym_freq", 0, 8); ?>
    <br>
    <label>How long are you typically at the gym for?</label>
    <?php select("gym_length", 0, 8); ?>
    hours
    <br>
    <label>How many times per week do you drink protein shakes?</label>
    <?php select("ff_freq", 0, 15); ?>
    <br>
    <label>How many hours of sleep do you get per day?</label>
    <?php select("sleep_freq", 0, 8) ?>
    <br>
    <input type="submit" value="Create Goal">
  </div>
</form>
