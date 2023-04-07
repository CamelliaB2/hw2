<?php
  $logged_in = false;
  if (isset($_POST["username"]) && isset($_POST["password"]))
  {
    $username = $_POST["username"];
    $password = $_POST["password"];

    //create connection
    $conn = mysqli_connect("localhost", "root", "", "users");

    //check connection
    if (!$conn)
    {
      die("Connection failed: " . mysqli_connect_error());
    }

    //register user
    $sql = "SELECT password FROM students WHERE username = '$username'";
    $results = mysqli_query($conn, $sql);
    if ($results)
    {
      $row = mysqli_fetch_assoc($results);
      if ($row["password"] === $password)
      {
        $logged_in = true;
        $sql = "SELECT * FROM students";
        $results = mysqli_query($conn, $sql);
      }
      else
      {
        echo ("The password you have entered is incorrect, please try again.");
      }
    }
    else
    {
      echo mysqli_error($conn);
    }
    mysqli_close($conn);
  }
  else
  {
    echo "Nothing was submitted.";
  }
?>

<html>
  <header>
    <title>Admin</title>
  </header>
  <body>
    <h1>Login Page</h1>
    <form method = "post" action = "admin.php">
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
          <td><input type = "submit" name = "login_btn" value = "Login"></td>
        </tr>
      </table>
      <table>
        <tbody>
          <?php
            if ($logged_in && $results)
            {
              if ($row = mysqli_fetch_assoc($results))
              {
                echo "You have successfully logged in!";
              }
            }
           ?>
        </tbody>
      </table>
  </body>
</html>
