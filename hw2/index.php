

<html>
  <head>
    <title>Register</title>
  </head>
  <body>
    <div class = "header">
      <h1>Login Page</h1>
    </div>
    <form method = "post" action = "process.php">
      <table>
        <tr>
          <td>Username:</td>
          <td><input type = "text" name = "username" class = "textInput"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type = "password" name = "password" class = "textInput"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type = "submit" name = "register_btn" value = "Register"></td>
        </tr>
      </table>
    </form>
    <form method = "post" action = "admin.php">
      <table>
        <h3>Already have an account? Click here to login:</h3>
        <td></td>
        <td><input type = "submit" name = "login_btn" value = "Login"></td>
      </table>
    </form>
    <video width="320" height="240" controls>
      <source src="BackendVideo.mp4" type="video/mp4">
      <source src="BackendVideo.ogg" type="video/ogg">
    </video>
  </body>
  </html>
