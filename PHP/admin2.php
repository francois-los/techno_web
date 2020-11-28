<?php
if (isset($_GET['id'])){
    $quizzid= $_GET['id'];
} else {
    include 'home.php';
    die;
}

if (isset($_GET['deletequestion'])){
    $deleteid= $_GET['deletequestion'];
} else {
    $deleteid=0;
}

$_SESSION['quizzid'] = $quizzid;

$request = $bdd->prepare("SELECT user_id FROM user WHERE username =?");
$request->execute([$_SESSION['username']]);
$user_id = $request->fetch();


if (isset($_GET['del'])){
	$request1 = $bdd->prepare("DELETE FROM question WHERE question_id = ?");
	$request1->execute([$deleteid]);
	$request2 = $bdd->prepare("DELETE FROM answer WHERE answer_question_id = ?");
	$request2->execute([$deleteid]);
	?>

  
<?php } 

?>



<body class="temp">

			
		

	        
        <section>
          <div class="container">
            <div class="background-img4">
              <div class="box">
                <div class="content">
                  <h2> Quizz <?php echo $quizzid ?> </h2>
                </div>    
              </div>
            </div>
          </div>
        </section>
        <br><br>




        <?php

          $request2 = $bdd->prepare("SELECT question_title,question_id FROM question WHERE question_quizz_id=?");
		  $request2->execute([$quizzid]);

		   while ($results=$request2->fetch()){
		   	?>

	

		   	<div class="bknoir">
		   		<br><br>
			    <p id="" > <br> Question <?php echo $results[1]; ?> : <?php echo $results[0]; ?> </p> 
			    <br><br>
			    <nav class="navigation4">
		            <ul class="navigationListe">
		            	<li><a href="../PHP/index.php?direction=admin2&id=<?php echo $quizzid ?>&del=1&deletequestion=<?php echo $results[1]; ?>" title="Delete quizz <?php echo $quizzid ?> answers>">Delete question</a></li>
		            </ul>
		        </nav>



		        <nav class="navigation5">
		            <ul class="navigationListe">
		            	<li><a href="../PHP/index.php?direction=modifquestion&id=<?php echo $results[1] ?>" title="Modifquizz <?php echo $quizzid ?> answers"> Modifier la question</a></li>
		            </ul>
		        </nav>
			<br>
	        </div> 

	        
	         
		     <?php

		  }

        ?>

		<br><br><br><br><br><br>

</body>