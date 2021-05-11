<!DOCTYPE html>
<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'Asset/' ?>index.css">
	<title>Invenotri</title>
</head>
<body>
    <div class="container login-container">
      <div class="row">
        <div class="col-md-6 ads">
          <h1><span id="fl">CAT</span><span id="sl">System</span></h1>
        </div>
        <div class="col-md-6 login-form">
          <div class="profile-img">
           
          </div>
          <h3>Login</h3>
          <?= form_open(base_url("auth")); ?>
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
            </div>
            <div class="form-group forget-password">
                <a href="#">Forget Password</a>
            </div>
          <?= form_close(); ?>
        </div>
      </div>
    </div>
  </body>
</html>