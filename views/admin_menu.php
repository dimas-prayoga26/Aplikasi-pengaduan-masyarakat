<?php require_once("core/init.php"); ?>

<li class="nav-item">
  <a href="index.php" class="nav-link <?php if (in_array($namaFile, ['index'])): echo 'active'; endif; ?>">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Dashboard
      <!-- <span class="right badge badge-danger">New</span>
      <span class="badge badge-info right">6</span> -->
    </p>
  </a>
</li>
<!-- Akun Admin / Akun Petugas -->
<li class="nav-item">
  <a href="petugas_index.php" class="nav-link <?php if (in_array($namaFile, ['petugas_index','petugas_create','petugas_update' ,'petugas_delete'])): echo 'active'; endif; ?>">
    <i class="nav-icon fas fa-user"></i>
    <p>
      Petugas
    </p>
  </a>
</li>
<li class="nav-item">
  <a href="tanggapan_index.php" class="nav-link <?php if (in_array($namaFile, ['tanggapan_index'])): echo 'active'; endif; ?>">
    <i class="nav-icon fas fa-edit"></i>
    <p>
      Verifikasi Tanggapan
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
