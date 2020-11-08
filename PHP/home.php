<?php include('headerr.php')?>
<?php include('../HTML/footer.html')?>
<?php 
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php?direction=home');
	}
?>

<body class="bkhome">


<section>
  <div class="container">
    <div class="background-img3">
        <div class="box">
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