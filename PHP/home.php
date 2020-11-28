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



    <?php
      if (!empty($_SESSION['username'])) { 
        if ($_SESSION['username']=="CompteTest"){
            ?>
        
           <nav class="quizzresume">
              <ul class="navigationListe">
                  <li><a href="index.php?direction=admin1" title="Go to home">[ADMIN] Quizz List</a></li>
              </ul>
          </nav>
 
          <nav class="quizzresume">
            <ul class="navigationListe">
              <li class="deroulant"><a href="">[ADMIN] Change Quizz</a>
                <ul class="sous">
                  <?php foreach ($quizzidarray as $quizzKey => $quizzValue) {?>
                         <li><a href="index.php?direction=admin2&id=<?php echo $quizzValue ?>" title="Go to home">Quizz <?php echo $quizzValue ?></a></li>
                        <?php }?>
                </ul>
              </li>
            </ul>
           </nav>


            <?php }
       

       
      }

   ?>
     
   



</section>
</body>
