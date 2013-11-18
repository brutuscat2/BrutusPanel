
<?php
// include html header and display php-login message/error
include('header.php');

// login form box
?>            

 <table border="none" style="border:0;text-align:center;margin-left:auto;margin-right:auto;">
   <tr style="border:0;">
   <td width="400" style="border:0;">
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
  </tr></td></table>
 <table border="none" style="border:0;text-align:center;margin-left:auto;margin-right:auto;">
   <tr style="border:0;">
   <td width="125" style="border:0;">
  <div class="form-group">
    <div>
      <div class="checkbox">
        <label for="user_rememberme" class="control-label">Remember Me
          <input type="checkbox" id="user_rememberme" name="user_rememberme">
        </label>
      </div>
    </div>
  </div>
  </tr></td></table>
   <table border="none" style="border:0;text-align:center;margin-left:auto;margin-right:auto;">
   <tr style="border:0;">
   <td width="400" style="border:0;">
  <div class="form-group">
    <div>
      <button type="submit" class="btn btn-success">Sign in</button>
<button type="button" class="btn btn-primary">Forgot Password?</button>
    </div>
  </div>
  </tr></td></table>
</form>


<?php
// include html footer
include('footer.php');
