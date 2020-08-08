<?php include('server.php');
include('../functions.php');?><head>
 <html>
	<head>

	 <link href="../css/finalProject.css" rel="stylesheet" type="text/css">
		<link href="../css/finalProject_Layout.css" rel="stylesheet" type="text/css">
  <link href="../css/playerLayout.css" rel="stylesheet" type="text/css">
		<link href="../css/header.css" rel="stylesheet" type="text/css">

</head>

     <?php get_header(); ?>
<body>
  <div id="wrapper">
	<div id="logo2"><img src="../image/miami.png" width="300px" height="140px"  /></div>
	<div class="reg_form">
  <div class="form_container">
  <form method="post" action="register.php">

  	 <div class="title_container">
      <h2>Register For Roto Help</h2>
    </div>
  	<?php include('errors.php'); ?>



	  <div class="input_field"><span><i aria-hidden="true" class="glyphicon glyphicon-user"></i></span>

  	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
  	</div>
	  <div class="input_field"><span> <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>

  	  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" >
  	</div>
  	<div class="input_field">

  	  <input type="password" name="password_1" placeholder="Password"><span><i aria-hidden="true" class="glyphicon glyphicon-lock"></i></span>
  	</div>
  	<div class="input_field"><span><i aria-hidden="true" class="glyphicon glyphicon-lock"></i></span>

  	  <input type="password" name="password_2" placeholder="Confirm Password">
  	</div>
  	<div class="input_field">
  	  <button type="submit" class="button" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>

  </form>
		</div>
	  </div>
	  <?php get_footer(); ?>
	 </div>

</body>
</html>
