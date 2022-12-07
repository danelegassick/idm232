<?php
include __DIR__ . '/../app.php';
$page_title = 'Login';
include_once __DIR__ . '/../_components/header.php';
?>
<br>
<br>
<div class="container sign-in">
  <div>
    <h2>Sign in to your account</h2>

  </div>

  <div>
    <div>
      <form action="<?php echo site_url() . '/_includes/process-login.php' ?>" method="POST">
        <div>
          <label for="email">Email address</label>
          <div>
            <input id="email" name="email" type="text" autocomplete="email" required>
          </div>
        </div>
        
        <br>

        <div>
          <label for="password">Password</label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password" required>
          </div>
        </div>

        <br>

        <div>
          <div>
            <input id="remember-me" name="remember-me" type="checkbox">
            <label for="remember-me">Remember me</label>
          </div>

          <br>

          <div>
            <a class="link" href="#">Forgot your password?</a>
          </div>
        </div>

        <br>

        <div>
          <button class="button" type="submit">
            Sign in
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<br>
<br>
<?php include_once __DIR__ . '/../_components/footer.php';