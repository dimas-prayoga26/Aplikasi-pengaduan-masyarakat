<?php
// php script
require_once("functions/function_masyarakat.php");

if (isset($_POST['submit'])) {
  register($_POST);
}

// html
include("views/header.php");
?>
    <div class="row">
        <div class="medium-6 medium-centered large-4 large-centered columns">
            <div class="row log-in-form">
                <form action="register.php" method="POST">
                    <div class="row column">
                        <h4 class="text-center">Register</h4>
                        <label>NIK
                        <input type="text" name="nik" placeholder="" required>
                        </label>
                        <label>Nama
                        <input type="text" name="nama" placeholder="" required>
                        </label>
                        <label>Telepon
                        <input type="text" name="telp" placeholder="" required>
                        </label>
                        <label>Username
                        <input type="text" name="username" placeholder="" required>
                        </label>
                        <label>Password
                        <input type="password" name="password" placeholder="" required>
                        </label>
                        <input id="show-password" type="checkbox"><label for="show-password">Show password</label>
                        <p><input type="submit" name="submit" class="button expanded" value="DAFTAR"/></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include("views/footer.php");
?>
