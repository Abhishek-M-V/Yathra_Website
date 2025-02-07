 <!DOCTYPE html>
<html>
<head>
  <title>Password Recovery</title>
  <style>
    body {
      background-image: url("logwp.jpg");
      background-size: 100%;
      background-position: center;
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    
    
    /* Add basic styling to the form */
    form {
      width: 300px;
      margin: 0 auto;
     }

    input[type="email"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 100px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .logo {
      text-align: center;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      margin-bottom: 20px;
    }

    .logo img {
      width: 200px;
  </style>
</head>
<body>
  
  </div>
  <form action="password_reset.php" method="POST">
    <h2 style="color:white"><u>Password Recovery</u></h2>

    <label for="email"><b><font color="black">Email:</font></b></label>
    <input type="email" id="email" name="email" required>
    <input type="submit" value="Reset Password">
  </form>
</body>
</html>