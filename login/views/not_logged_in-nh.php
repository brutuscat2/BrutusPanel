<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An Minecraft Control Panel">
    <meta name="author" content="brutuscat2">
    <link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">

    <title>BrutusPanel</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <style type="text/css" id="holderjs-style"></style></head>
</head>
<body>

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
</tr>
</td>
</table>
<?php
// include html footer
include('footer.php');

