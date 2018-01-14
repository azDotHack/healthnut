<link rel="stylesheet" href="style.css">
<style>
@keyframes animSlide {
  0% {
    left: 0%;
  }
  10% {
    left: 0%;
  }
  12% {
    left: -100%;
  }
  22% {
    left: -100%;
  }
  24% {
    left: -200%;
  }
  34% {
    left: -200%;
  }
  36% {
    left: -300%;
  }
  46% {
    left: -300%;
  }
  48% {
    left: -400%;
  }
  58% {
    left: -400%;
  }
  60% {
    left: -300%;
  }
  70% {
    left: -300%;
  }
  72% {
    left: -200%;
  }
  82% {
    left: -200%;
  }
  84% {
    left: -100%;
  }
  94% {
    left: -100%;
  }
  96% {
    left: -0%;
  }
}

#login {
  float: right;
  margin-top: 20px;
}

#img_slide {
  clear: left;
  overflow: hidden;
  height: 350px;
}

#img_slide figure div {
  width: 20%;
  float: left;
}

#img_slide figure img {
  width: 100%;
  float: left;
}

#img_slide figure {
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  animation: 20s animSlide infinite;
}

#invalid {
  color: #800;
  font-weight: bold;
  position: relative;
  bottom: 50px;
}

#logo {
  width: 33%;
  height: 33%;
  float: left;
  margin-top: -75px;
}

#register_link {
  margin-right: 350px;
}
</style>
<script>

</script>
</head>
<body>
<div id="head">
  <div id="login">
    <form action="" method="post">
      <table>
        <tr>
          <th colspan="3">Log In</th>
        </tr>
        <tr>
          <td><label>User ID</label></td>
          <td><input type="text" name="user_id"></td>
        </tr>
        <tr>
          <td><label>Password</label></td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Log In" id="login_sub"></td>
          <?php
            if (isset($_POST['user_id']) && isset($_POST['password'])) {
              require_once("constants.php");
              $id = ($_POST['user_id'] - 12345) / 127;
              $password = $_POST['password'];
              $verify_login = query("SELECT * FROM users WHERE id='$id' AND password=SHA('$password')");
              if ($row = mysqli_fetch_assoc($verify_login)) {
                $_SESSION['user_id'] = $row['first_name'] . ' ' . $row['last_name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['phone'] = $row['phone'];
                header("Refresh:0");
              } else {
                echo "<td><p id='invalid'><em>Invalid login</em></p></td>";
              }
            }
          ?>
        </tr>
      </table>
    </form>
  </div>
  <div id="register_link">
    <img src="logo.png" id="logo" alt=""> <!-- TODO add a logo alt -->
    <h3>Don't have an account?</h3>
    <h1><a href="register.php">HEALTHY HABITS START HERE</a></h1>
  </div>
</div>
<div id="img_slide">
    <figure>
      <div id="img0"><img src="stock_img0.jpg" alt=""></div> <!-- TODO insert appropriate alt description -->
      <div id="img1"><img src="stock_img1.jpg" alt=""></div> <!-- TODO insert appropriate alt description -->
      <div id="img2"><img src="stock_img2.jpg" alt=""></div> <!-- TODO insert appropriate alt description -->
      <div id="img3"><img src="stock_img3.jpg" alt=""></div> <!-- TODO insert appropriate alt description -->
    </figure>
</div>
<div id="foot">
  <h2>Our Mission</h2>
  <p>
    Here at Healthy Habits, our mission is to improve the health of the planet by personalizing daily and weekly challenges and slowly and steadily building new, healthy, habitual lifestyles planned for the long term.
  </p>
</div>
</body>
</html>
