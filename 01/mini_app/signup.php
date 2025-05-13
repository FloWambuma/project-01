<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App | SignUp</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <?php include 'navbar.php'; ?>
   <h2>Signup Form</h2>
  <form id="signup-form">
    <label>Username:</label>
    <input type="text" id="username" name="username" required />
    <small id="username-msg"></small>

    <label>Email:</label>
    <input type="email" id="email" name="email" required />
    <small id="email-msg"></small>

    <label>Password:</label>
    <input type="password" id="password" name="password" required />
    <small id="password-msg"></small>

    <button type="submit" id="signup-btn" enabled>Sign Up</button>
    <p id="response-msg"></p>
  </form>
 
</body>
</html>