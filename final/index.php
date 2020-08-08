<?php
  session_start();
include('../functions.php');

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>

	 <link href="../css/finalProject.css" rel="stylesheet" type="text/css">
		<link href="../css/finalProject_Layout.css" rel="stylesheet" type="text/css">
  <link href="../css/playerLayout.css" rel="stylesheet" type="text/css">


</head>

  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>

	<title>Roto Help</title>

</head>


<?php include('server3.php'); ?>

	 <?php get_header_logged(); ?>

	<body>

<div id="wrapper_home">


     <div id="trending"><h1>Trending Players</h1></div>
     <div class="player-container">
	 <div class="player-row player-row-core">
	 <div class="player col-xs-12 col-lg-4">

		<img src="../image/aaron.jpg" alt="judgeswing" class="action img-rounded" id="judge" />
					 <img class="head" src="../image/judge.png" alt="aaron" />
					 <div class="player-name">
						 <?php  while($results2 = mysqli_fetch_assoc($result2)) {

						 	echo '<a href="id_search.php?playerID='.$results2["playerID"].'">';
				echo		 'Aaron Judge</a>';}$db2->close();?></div>
			 </div>

		 <div class="player col-xs-12 col-lg-4">

    <img src="../image/mike-trout-angels.jpg" alt="troutswing" class="action img-rounded" />
		<img class="head" src="../image/trout_head.jpg" alt="trout_head" />

        <div class="player-name">
		<?php  while($results = mysqli_fetch_assoc($result)) {

			echo '<a href="id_search.php?playerID='.$results["playerID"].'">';

      echo  'Mike Trout</a>'; }$db->close();?>
				 </div>
		 </div>

		 <div class="player col-xs-12 col-lg-4">
		 <img src="../image/mookie_swing.jpg" alt="mookie_swing" class="action img-rounded" />
		<img class="head" src="../image/mookie_head.jpg" alt="mookie_head" />
			 <div class="player-name">
         <?php  while($results3 = mysqli_fetch_assoc($result3)) {

           echo '<a href="id_search.php?playerID='.$results3["playerID"].'">';

           echo  'Mookie Betts</a>'; }$db3->close();?></div>
		 </div>

		 <div class="player col-xs-12 col-lg-4">
		 <img src="../image/kershaw_throw.jpg" alt="kershaw_throw" class="action img-rounded" />
		<img class="head" src="../image/kershaw_head.jpg" alt="kershaw_head" />
			 <div class="player-name">
         <?php  while($results4 = mysqli_fetch_assoc($result4)) {

           echo '<a href="id_search-pitcher.php?playerID='.$results4["playerID"].'">';

           echo  'Clayton Kershaw</a>'; }$db4->close();?></div>
       </div>



		 <div class="player col-xs-12 col-lg-4">
		 <img src="../image/cole.jpg" alt="cole_throw" class="action img-rounded" />
		<img class="head" src="../image/cole_head.png" alt="cole_head" />
			 <div class="player-name">
         <?php  while($results5 = mysqli_fetch_assoc($result5)) {

           echo '<a href="id_search-pitcher.php?playerID='.$results5["playerID"].'">';

           echo  'Gerrit Cole</a>'; }$db5->close();?></div>
       </div>


		  <div class="player col-xs-12 col-lg-4">
		 <img src="../image/degrom.jpg" alt="degrom_throw" class="action img-rounded" />
		<img class="head" src="../image/degrom_head.png" alt="degrom_head" />
			 <div class="player-name">
         <?php  while($results6 = mysqli_fetch_assoc($result6)) {

           echo '<a href="id_search-pitcher.php?playerID='.$results6["playerID"].'">';

           echo  'Jacob deGrom</a>'; }$db6->close();?></div>
       </div>



		 </div>
	 </div>





	<?php get_footer(); ?>
	</div>
	<script src="../scripts/subScript.js"></script>
	</body>

    <?php endif ?>
</div>


</html>
