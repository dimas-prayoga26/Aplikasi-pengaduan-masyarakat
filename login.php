<?php
// php script
require_once("functions/function_masyarakat.php");

if (isset($_POST['submit'])) {
  login($_POST);
}

// html
include("views/header.php");
?>
    <div class="row">
        <div class="medium-6 medium-centered large-4 large-centered columns">
            <div class="row log-in-form">
                <form action="login.php" method="POST">
                    <div class="row column">
                        <h4 class="text-center">Login</h4>
                        <label>Username
                        <input type="text" name="username" placeholder="Username">
                        </label>
                        <label>Password
                        <input type="password" name="password" placeholder="Password">
                        </label>
                        <input id="show-password" type="checkbox"><label for="show-password">Show password</label>
                        <p><input type="submit" name="submit" class="button expanded" value="MASUK"/></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include("views/footer.php");
?>
