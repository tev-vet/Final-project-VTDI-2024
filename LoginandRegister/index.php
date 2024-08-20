<!DocType html> 
<html>
   <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="landingpage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Register&Login</title>
   </head>
   <body> 
    <!--Sign up form-->
    <div class="container" id="signup" style="display: none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <!--Group for first name-->
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type=text name="fName" id="fName" autocomplete="off" placeholder="First Name" required>
          
        </div>
        <!--Group for last name-->
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="lName" id="lName" autocomplete="off"placeholder="Last Name" required>
          
        </div>
        <!--Group for Email-->
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" id="email" autocomplete="off" placeholder="Email" required>
          
        </div>
        <!--Group for Password-->
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" autocomplete="off" placeholder="Password" required>
          
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
        --------------Or--------------
      </p>
      <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already have an account?</p>
        <button id="signInButton">Sign In</button> 
      </div> 
    </div>

    <!--Section for Log in Form-->
    <div class="container" id="signin">
      <h1 class="form-title">Sign In</h1>
      <form method="post" action="register.php">
        <!--Group for Email-->
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" id="email" autocomplete="off" placeholder="Email" required>
         
        </div>
        <!--Group for Password-->
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" autocomplete="off" placeholder="Password" required>
          
        </div>
        <p class="recover">
          <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
      </form>
      <p class="or">
        --------------Or--------------
      </p>
      <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Don't have an account?</p>
        <button id="signUpButton">Sign Up</button> 
      </div> 
    </div>
    <script src="Scriptlog.js"></script>
   </body>
</html>