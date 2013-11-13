
<?php
// include html header and display php-login message/error
include('header.php');

// login form box
?>            

 <table width="400" border="none" style="display:block;margin-left:auto;margin-right:auto;">
   <form class="form-horizontal" type="post" action="index.php" role="form">
  <div class="form-group">
    <label for="user_name" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="user_name" required placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="user_password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="user_password" placeholder="Password" autocomplete="off" required >
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" id="user_rememberme" name="user_rememberme"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10" >
      <button type="submit" class="btn btn-primary">Sign in</button>
<button type="button" class="btn btn-warning">Forgot Password?</button>
    </div>
  </div>
</form>
</table>

<?php
// include html footer
include('footer.php');
