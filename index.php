<?php
  session_start();

include('functions.php');

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	  <link href="css/finalProject_Layout.css" rel="stylesheet" type="text/css">

		<link href="css/home.css?version=1" rel="stylesheet" type="text/css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script src="scripts/radioSearch.js"></script>
		<script src="scripts/search-home.js"></script>


	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


	<title>Roto Help</title>

</head>


<?php include('final/server3.php'); ?>

<div id="wrapper">
<div class="header-container">
 <header>
	<div class="top-header" style="display: block;">
		<div id="rightLogo">


<form action="" method="post" id="player-search">
	<button type ="submit" id="search_button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-search"></span> Submit</button>
	<div class="search-box">

				<input type="text" id="searchbar" autocomplete="off" placeholder="Search Player..." />

				<div class="result">
						</div>
</div>
</form>

				<form action="" method="post" id="position-search">
					<button type ="submit" id="search_button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-search"></span> Submit</button>

<div class="search-box">

			<input type="text" id="searchbar" autocomplete="off" placeholder="Search Pitcher..." />

			<div class="result">
					</div>
</div>


</form>

		 </div>
		<div class="leftLogo" class="column">
			<a href="index.php" target="_top">
				<div class="leftLogo-img">
					<img src="image/miami.png" width="350px" height="150px" style="padding:10px;"/>
		</div></a>

	 </div>
	 </div>








 <nav class="navbar navbar-inverse">
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
		 <li><a href="final/league_leaders.php">Leaders </a>

		 </li>
	<li><a href="final/newOpt2.php">Lineup Builder </a>

		 </li>

	 <li><a href="final/diamond.php">The Diamond</a></li>
	 <li><a href="final/hall.php">Hall Of Fame</a></li>
	 </ul>


	 <ul class="nav navbar-nav navbar-right">

	<li><a href="final/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

		 <li><a href="final/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	 </ul>

	 </div>
	 </div>
	 </nav>
	 </header>
	 </div>


</div>

	<body>

<div id="wrapper_home">


     <div id="trending"><h1>Trending Players</h1></div>
     <div class="player-container">
	 <div class="player-row player-row-core">
	 <div class="player col-xs-12 col-lg-4">

		<img src="image/aaron.jpg" alt="judgeswing" class="action img-rounded" id="judge" />
					 <img class="head" src="image/judge.png" alt="aaron" />
					 <div class="player-name">
						 <?php  while($results2 = mysqli_fetch_assoc($result2)) {
						 	//echo '<a href="id_search.php?playerID='.$results["playerID"].'">';
						 	echo '<a href="final/id_search.php?playerID='.$results2["playerID"].'">';
				echo		 'Aaron Judge</a>';}$db2->close();?></div>
			 </div>

		 <div class="player col-xs-12 col-lg-4">

    <img src="image/mike-trout-angels.jpg" alt="troutswing" class="action img-rounded" />
		<img class="head" src="image/trout_head.jpg" alt="trout_head" />

        <div class="player-name">
		<?php  while($results = mysqli_fetch_assoc($result)) {

			echo '<a href="final/id_search.php?playerID='.$results["playerID"].'">';

      echo  'Mike Trout</a>'; }$db->close();?>
				 </div>
		 </div>

		 <div class="player col-xs-12 col-lg-4">
		 <img src="image/mookie_swing.jpg" alt="mookie_swing" class="action img-rounded" />
		<img class="head" src="image/mookie_head.jpg" alt="mookie_head" />
			 <div class="player-name">
         <?php  while($results3 = mysqli_fetch_assoc($result3)) {

           echo '<a href="final/id_search.php?playerID='.$results3["playerID"].'">';

           echo  'Mookie Betts</a>'; }$db3->close();?></div>
		 </div>

     <div class="player col-xs-12 col-lg-4">
     <img src="image/kershaw_throw.jpg" alt="kershaw_throw" class="action img-rounded" />
    <img class="head" src="image/kershaw_head.jpg" alt="kershaw_head" />
       <div class="player-name">
         <?php  while($results4 = mysqli_fetch_assoc($result4)) {

           echo '<a href="final/id_search-pitcher.php?playerID='.$results4["playerID"].'">';

           echo  'Clayton Kershaw</a>'; }$db4->close();?></div>
       </div>



     <div class="player col-xs-12 col-lg-4">
     <img src="image/cole.jpg" alt="cole_throw" class="action img-rounded" />
    <img class="head" src="image/cole_head.png" alt="cole_head" />
       <div class="player-name">
         <?php  while($results5 = mysqli_fetch_assoc($result5)) {

           echo '<a href="final/id_search-pitcher.php?playerID='.$results5["playerID"].'">';

           echo  'Gerrit Cole</a>'; }$db5->close();?></div>
       </div>


      <div class="player col-xs-12 col-lg-4">
     <img src="image/degrom.jpg" alt="degrom_throw" class="action img-rounded" />
    <img class="head" src="image/degrom_head.png" alt="degrom_head" />
       <div class="player-name">
         <?php  while($results6 = mysqli_fetch_assoc($result6)) {

           echo '<a href="final/id_search-pitcher.php?playerID='.$results6["playerID"].'">';

           echo  'Jacob deGrom</a>'; }$db6->close();?></div>
       </div>


		 </div>
	 </div>





<?php get_footer(); ?>
	</div>

	<script src="scripts/subScript.js"></script>
	</body>


</div>


</html>
