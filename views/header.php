<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CSS-->
        <link href="assets/css/foundation.css" rel="stylesheet">
        <link href="assets/css/app.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">

    </head>
    <body>

    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <a href="tambah_pengaduan.php">Pengaduan</a>
        </nav>
    </header>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="row">
        <div data-alert class="alert-box" style="">
          <?php
          echo $_SESSION['error'];
          unset($_SESSION['error']);
          ?>
          <a href="#" class="close">&times;</a>
        </div>
      </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
      <div class="row">
        <div data-alert class="alert-box" style="">
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
          <a href="#" class="close">&times;</a>
        </div>
      </div>
    <?php endif; ?>
