<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App | Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
   <h2>Login Form</h2>
  <form id="login-form">
    <label>
      Username:
      <input type="username" id="username" />
      <small id="username-msg"></small>
    </label>

    <label>
      Password:
      <input type="password" id="password" />
      <small id="password-msg"></small>
    </label>

    <button type="submit" id="login-btn" enabled>Log In</button>
       <p id="response-msg"></p>
  </form>
</body>
</html>