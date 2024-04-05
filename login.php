<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylee.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
  </head>
  <body class="log">
    <div class="container">
      <div class="form-box">
        <form action="" name="Formfill" onsubmit="return Login()" autocomplete="off">
          <a id="btnback" href="index.php" class="bx bx-arrow-back"></a>
          <h2>Login</h2>
          <p id="result"></p>
          <div class="input-box">
            <input type="email" name="Email" placeholder="Email" />
          </div>
          <div class="input-box">
            <input type="password" name="Password" placeholder="Password" />
          </div>
          <div class="button">
            <input class="btn" type="submit" value="Login" href="index.php" />
          </div>
          <br>
          <a class="forgot" href="#">Forgot Password?</a>
          <div class="group-log">
            <span><a href="#">Don't Have Account?</a></span>
            <span><a href="regist.php">Sign Up</a></span>
          </div>
          <br>
        </form>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
