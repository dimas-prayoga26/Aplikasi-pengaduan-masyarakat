<?php require_once("core/init.php"); ?>

<li class="nav-item">
  <a href="index.php" class="nav-link <?php if ($namaFile == 'index'): echo 'active'; endif; ?>">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Dashboard
      <!-- <span class="right badge badge-danger">New</span>
      <span class="badge badge-info right">6</span> -->
    </p>
  </a>
</li>
<li class="nav-item">
  <a href="logout.php" class="nav-link">
    <i class="nav-icon fas fa-sign-out-alt"></i>
    <p>
      Logout
    </p>
  </a>
</li>
