<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>

<?php include_once('layouts/header.php'); ?>

<div class="container">
  <div class="row-sm-6">
    <div class="col-sm-6 centered-col">
      <div class="text-center">
        <h1>Welcome</h1>
        <p>Kindly sign in to start your session</p>
      </div>
      <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
          <label for="text" class="control-label">Username</label>
          <input type="name" class="form-control" name="username" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label for="Password" class="control-label">Password</label>
          <input type="password" name= "password" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>   
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>