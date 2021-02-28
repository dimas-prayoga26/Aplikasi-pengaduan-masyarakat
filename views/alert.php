<?php if (isset($_SESSION['error'])): ?>
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <!-- <h5><i class="icon fas fa-ban"></i> Alert!</h5> -->
  <?php
  echo $_SESSION['error'];
  unset($_SESSION['error']);
  ?>
</div>
<?php endif; ?>

<?php if (isset($_SESSION['success'])): ?>
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <!-- <h5><i class="icon fas fa-ban"></i> Alert!</h5> -->
  <?php
  echo $_SESSION['success'];
  unset($_SESSION['success']);
  ?>
</div>
<?php endif; ?>
