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
  <nav class="quizzresume">
    <ul class="navigationListe">
    	<li class="deroulant"><a href="">Quizz resume</a>
    		<ul class="sous">
    			<?php foreach ($quizzidarray as $quizzKey => $quizzValue) {?>
            		<li><a href="../PHP/index.php?direction=resumequizz&id=<?php echo $quizzValue ?>" title="Resume page Quizz <?php echo $quizzValue ?>">Quizz <?php echo $quizzValue ?></a></li>
                <?php }?>
    		</ul>
    	</li>
    </ul>
   </nav>
</section>
</body>
