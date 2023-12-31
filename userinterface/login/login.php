<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link href="/tuqb/css/login.css" rel="stylesheet" />
</head>

<body>
  <div class="mainDiv">
    <div class="innerDiv">
      <div class="logo">
        <img src="/tuqb/userinterface/login/tu_logo_approved.png" alt="TU_Logo" class="img1" id="img1" />
      </div>
      <form action="" method="POST" class="form1" id="form1">
        <div class="labelsDiv">
          <label for="userid" style="font-family: Georgia; font-weight: Bold">
            UserId
          </label>
        </div>
        <div class="inputboxDiv">
          <input type="text" name="userid" id="userid" placeholder="Enter Your UserId" style="width:80%;height: 25px;" required>
        </div>
        <div class="labelsDiv">
          <label for="password" style="font-family: Georgia; font-weight: Bold">
            Password
          </label>
        </div>
        <div class="inputboxDiv">
          <input type="password" name="password" id="password" placeholder="Enter Your Password" style="width: 80%;height: 25px;" required>
        </div>
        <div id="loginbtnDiv">
          <button type="submit" style="background-color: aqua;  border-radius: 5px;padding: 5px;" id="aloginbtn" class="loginbtn">Admin Login</button>
          <button type="submit" style="background-color: aqua;  border-radius: 5px;padding: 5px;" id="floginbtn" class="loginbtn" >Faculty Login</button>
        </div>
      </form>
      <div class="signupDiv" id="signupDiv">
        <a href="/tuqb/userinterface/forget_pwd/forget_pwd.php">Forget Password?? Click Here</a>
      </div>
      <div class="loginError" style="display: flex; justify-content: center;">
        <label id="errorMsg"></label>
      </div>
    </div>
  </div>
  <script src="/tuqb/jquery/jquery.js"></script>
  <script src="/tuqb/userinterface/login/login.js"></script>
</body>

</html>