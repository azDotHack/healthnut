<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Healthy Habits</title>
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
  </style>
  <script>

  </script>
</head>
<body>
  <div id="head">
    <div id="login">
      <form action="#" method="post">
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
          </tr>
        </table>
      </form>
    </div>
    <img src="" alt=""> <!-- TODO add a logo -->
    <h3>Don't have an account?</h3>
    <h1><a href="register.php">HEALTHY HABITS START HERE</a></h1>
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
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porttitor neque ligula, quis feugiat nisl tincidunt eu. Phasellus elementum libero eget justo sodales, congue porta leo placerat. Etiam dapibus, lacus sit amet ultricies bibendum, purus tellus vestibulum diam, quis convallis turpis mauris et nulla. In a gravida sem, non blandit lorem. Mauris hendrerit dapibus rhoncus. Nulla facilisi. Nulla efficitur egestas dolor ut maximus. Integer consequat nulla eget blandit accumsan.
    </p>
  </div>
</body>
</html>
