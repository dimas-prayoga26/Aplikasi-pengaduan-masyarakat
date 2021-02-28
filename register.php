<?php
// php script
require_once("functions/function_masyarakat.php");

if (isset($_POST['submit'])) {
  register($_POST);

  header('location:register.php');
  exit;
}

// html
include("views/auth_header.php");
?>
  <div class="card-body">
    <p class="login-box-msg">Buat akun baru</p>

    <form action="register.php" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="nik" placeholder="NIK" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="telp" placeholder="Telepon" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <!-- <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Retype password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div> -->
      <div class="row">
        <div class="col-8">
        </div>
        <!-- /.col -->
        <div class="col-4">
          <input type="hidden" name="submit" value="submit">
          <button type="submit" class="btn btn-primary btn-block">Daftar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="login.php" class="text-center">Sudah punya akun?</a>
  </div>
<?php
include("views/auth_footer.php");
?>
