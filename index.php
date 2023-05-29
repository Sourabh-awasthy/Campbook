


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>NIT Hamirpur</title>
  <style>
    body{
      background-image: url("Peaceful-HD-Picture.jpg");
    }
  </style>
  <link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>




  <div class="container">
    <form class="form" id="login"  action="beta.php" method="post">
      <h1 class="form__title">Login</h1>
      <div class="form__message form__message--error"></div>
      <div class="form__input-group">
        <input type="text" class="form__input" autofocus placeholder="Username or email"   name="Username">
        <div class="form__input-error-message"></div>
      </div>
      <div class="form__input-group">
        <input type="password" class="form__input" autofocus placeholder="Password" name="password">
        <div class="form__input-error-message"></div>
      </div>
      <button class="form__button" type="submit">continue</button>
      <p class="form__text">
        <a href="#" class="form__link">Forgot your password</a>
      </p>
      <p class="form__text">
        <a class="form__link" href="alpha1.php" id="linkCreateAccount">Don't have an account? Create account</a>
      </p>
    </form>

</div>

</body>
</html>