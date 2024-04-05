<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylee.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
  </head>
  <body class="reg">
    <div class="container">
      <div class="form-box">
        <form action="" name="Formfill" onsubmit="return validation()" autocomplete="off">
          <h2>Register</h2>
          <p id="result"></p>
          <div class="input-box">
            <input type="text" name="Username" placeholder="Username" />
          </div>
          <div class="input-box">
            <input type="email" name="Email" placeholder="Email" />
          </div>
          <div class="input-box">
            <input type="password" name="Password" placeholder="Password" />
          </div>
          <div class="input-box">
            <input type="password" name="Cpassword" placeholder="Confirm Password"
            />
          </div>
          <div class="button">
            <input class="btn" type="submit" value="Register" />
          </div>
          <div class="group-reg">
            <span><a >Have An Account?</a></span>
            <span><a href="login.php">Login</a></span>
          </div>
        </form>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
