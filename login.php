<?php
// php script
require_once("functions/function_masyarakat.php");
require_once('core/auth.php');

if (isset($_POST['submit'])) {
  if(login($_POST)) {
    header('location:index.php');
  } else {
    header('location:login.php');
  }
  exit;
}

// html
include("views/auth_header.php");
?>
  <div class="card-body">
    <p class="login-box-msg">Login untuk memulai</p>

    <form action="login.php" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-8">
          <!-- <div class="icheck-primary">
            <input type="checkbox" id="remember">
            <label for="remember">
              Remember Me
            </label>
          </div> -->
        </div>
        <!-- /.col -->
        <div class="col-4">
          <input type="hidden" name="submit" value="submit">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <p class="mb-0">
      <a href="register.php" class="text-center">Belum punya akun?</a>
    </p><br>
    <p class="mb-0">
      <a href="admin_login.php" class="text-center">Login Sebagai Admin ?</a>
    </p>
  </div>
  <!-- /.card-body -->
<?php
include("views/auth_footer.php");
?>
