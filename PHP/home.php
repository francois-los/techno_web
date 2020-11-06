<html lang="fr">

<?php 
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		unset($_SESSION['success']);
		header('location: home.php');
	}
?>
<head>
  <title>Home</title>
</head>

<body class="bkhome">


<section>
  <div class="container">
    <div class="background-img3">
        <div class="box3">
        <div class="content">
        	<?php  if (isset($_SESSION['username'])) : ?>
	    		<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    		<?php else : ?>
    			<h1> Welcome</h1>
    		<?php endif ?>
        </div>    
      </div>
    </div>
  </div>
</section>
</body>

</html>
