<?php require_once("core/init.php"); ?>
<?php require_once("core/auth.php"); ?>
<?php require_once("core/ability.php"); ?>

<?php
  if (!in_array($namaFile, array_merge($accessMenu[$role]['dashboard']['allowMenu'], $accessMenu[$role]['masyarakat']['allowMenu'], $accessMenu[$role]['petugas']['allowMenu'], $accessMenu[$role]['pengaduan']['allowMenu']))) {
    header('location:404.php');
  }
?>

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
<?php if (count($accessMenu[$role]['masyarakat']['allowMenu'])): ?>
  <li class="nav-item">
    <a href="" class="nav-link <?php if (in_array($namaFile, $accessMenu[$role]['masyarakat']['allowMenu'])): echo 'active'; endif; ?>">
      <i class="nav-icon fas fa-user"></i>
      <p>
        Masyarkat
      </p>
    </a>
  </li>
<?php endif; ?>
<?php if (count($accessMenu[$role]['pengaduan']['allowMenu'])): ?>
  <li class="nav-item">
    <a href="" class="nav-link <?php if (in_array($namaFile, $accessMenu[$role]['pengaduan']['allowMenu'])): echo 'active'; endif; ?>">
      <i class="nav-icon fas fa-book"></i>
      <p>
        Pengaduan
      </p>
    </a>
  </li>
<?php endif; ?>
<?php if (count($accessMenu[$role]['petugas']['allowMenu'])): ?>
  <li class="nav-item">
    <a href="petugas_index.php" class="nav-link <?php if (in_array($namaFile, count($accessMenu[$role]['petugas']['allowMenu']))): echo 'active'; endif; ?>">
      <i class="nav-icon fas fa-user"></i>
      <p>
        Petugas
      </p>
    </a>
  </li>
<?php endif; ?>
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
