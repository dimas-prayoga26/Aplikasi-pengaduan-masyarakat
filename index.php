<?php
require_once("functions/function_masyarakat.php");

if(!isset($_SESSION['signed'])){
    header('Location: login.php');
}

$user = user($_SESSION['signed']['username']);

include("views/header.php");
?>

<h1>Halaman Profile</h1>
<p>Selamat datang, <?php echo ucwords($user['nama'])?></p>

<a href="logout.php">Logout</a>

<?php
include("views/footer.php");
?>
