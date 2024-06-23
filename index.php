
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DICT LOGIN PAGE</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="loginContainer">
      <div class="container" id="header">
        <div id="headerLogo"><img src="./Images/DICT_Logo.png" alt="" /></div>
        <h1>Inventory Management System</h1>
      </div>


<form action="login.php" method="post">
      <div class="container" id="usernameDiv">
        <label for="username">Username:</label>
        <input type="text" name="user_email" id="usernameInput" required>
      </div>

      <div class="container" id="passwordDiv">
        <label for="password">Password:</label>
        <input type="password" name="user_pwd" id="passwordInput" required>
      </div>

      <input type="submit" name="submit" value="login">
      <a href="#" class="forgot_key">Forgot Password?</a>
    </div>
</form>

    <script src="script.js"></script>
  </body>
</html>
