<?php include('server.php');
include('../functions.php');?>
<head>
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
  <form method="post" action="login.php">

  	 <div class="title_container">
      <h2>Login</h2>
    </div>
  	<?php include('errors.php'); ?>



	   <div class="input_field"><span><i aria-hidden="true" class="glyphicon glyphicon-user"></i></span>

  	  <input type="text" name="username" placeholder="Username" >
  	</div>

  	<div class="input_field">

  	  <input type="password" name="password" placeholder="Password"><span><i aria-hidden="true" class="glyphicon glyphicon-lock"></i></span>
  	</div>

  	<div class="input_field">
  	  <button type="submit" class="button" name="login_user">Login</button>
  	</div>
  	<p>
  		Not a member? <a href="register.php">Register</a>
  	</p>

  </form>
		</div>
	  </div>
	  <?php get_footer(); ?>
	 </div>

</body>
</html>
