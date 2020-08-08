<?php
function get_footer(){?>
  <hr style="margin-top:5px;" />
  <footer class="footer">
    @chrisbenzola
   </footer>
<?php
}
?>

<?php
function get_header(){?>
  <meta name="viewport" content="initial-scale=1.0">
  <link href="../css/header.css?version=1" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css?version=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<script src="../scripts/radioSearch.js"></script>

  	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="../scripts/search.js">

    </script>

   <div id="wrapper">
  	<div class="header-container">
  	 <header>
  		<div class="top-header" style="display: block;">
  			<div id="rightLogo">


  <form action="" method="post" id="player-search">

  	<div class="search-box">

  				<input type="text" id="searchbar" autocomplete="off" placeholder="Search Player..." />

  				<div class="result">
  						</div>
  	</div>
  		<button type ="submit" id="search_button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-search"></span> Submit</button>
	</form>
		</div>
  			<div class="leftLogo" class="column">
  				<a href="../index.php" target="_top">
  					<div class="leftLogo-img">
  						<img src="../image/miami.png" width="350px" height="150px" style="padding:10px;"/>
  		  </div></a>

  	   </div>
  		 </div>
     <nav class="navbar navbar-inverse ">
    <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index.php">Fantasy Roto</a>
      </div>
        <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Home</a></li>
        <li><a href="league_leaders.php">Leaders </a>

        </li>
  		<li><a href="newOpt2.php">Lineup Builder </a>

        </li>

      <li><a href="hall.php">Hall Of Fame</a></li>
      </ul>


      <ul class="nav navbar-nav navbar-right">

  		<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
        </div>
  	   </div>
  	   </nav>
  		 </header>
  		 </div>


  </div>

<?php
}
?>


<?php
function get_header_logged(){?>

  <meta name="viewport" content="initial-scale=1.0">
  	<link href="../css/header.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="../scripts/radioSearch.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="../scripts/search.js">

    </script>
   <div id="wrapper">
  	<div class="header-container">
  	 <header>
  		<div class="top-header" style="display: block;">
  			<div id="rightLogo">

  		<button type ="submit" id="search_button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-search"></span> Submit</button>

      <div class="search-box">

            <input type="text" id="searchbar" autocomplete="off" placeholder="Search Player..." />

            <div class="result">
                </div>
    </div>
	</div>
  			<div class="leftLogo" class="column">
  				<a href="index.php" target="_top">
  					<div class="leftLogo-img">
  						<img src="../image/miami.png" width="350px" height="150px" style="padding:10px;"/>
  		  </div></a>

  	   </div>

  		 </div>

  	<nav class="navbar navbar-inverse ">
    <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Fantasy Roto</a>
      </div>
        <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="league_leaders.php">Leaders </a>

        </li>
  		<li><a href="newOpt2.php">Lineup Builder </a>

        </li>
    
      <li><a href="hall.php">Hall Of Fame</a></li>
      </ul>


      <ul class="nav navbar-nav navbar-right">

  		<li><a href="#"><span class="glyphicon glyphicon-user"><?php echo $_SESSION['username']; ?></span></a></li>
  		<li><a href="index.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>

  	   </div>
  	   </div>
  	   </nav>
  		 </div>
  		 </div>

  </header>


<?php
}
?>
