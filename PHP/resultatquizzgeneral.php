<?php
if (isset($_GET['id'])){
    $quizzid= $_GET['id'];
} else {
    include 'home.php';
    die;
}
$_SESSION['quizzid'] = $quizzid;
?>

<body class="temp2">


		<section>
		  <div class="container">
		    <div class="background-img2">
		      <div class="box">
		        <div class="content">
		          <h2> Réponses Quizz numéro <?php echo $quizzid ?> </h2>
		        </div>    
		      </div>  
		    </div>
		  </div>
		</section>

	<?php

		$request = $bdd->prepare("SELECT user_id FROM user WHERE username =?");
		$request->execute([$_SESSION['username']]);
		$user_id = $request->fetch();


		$request = $bdd->prepare("SELECT score.score FROM score INNER JOIN user ON score.score_user_id = user.user_id WHERE score_user_id=? AND score_quizz_id=$quizzid" );
		$request->execute([$user_id[0]]);
		$results=$request->fetch();
		if(empty($results)){
			?>
			 <p id="qtrue" > <br> Il n'y a aucune réponse pour ce quizz </p> 
			<?php
		}
		else{

	?>

	<table class="tableresult">


		<tr>
			<th class="thgen2">Score out of 10</th>
		</tr>

		<?php

			$request = $bdd->prepare("SELECT score.score FROM score INNER JOIN user ON score.score_user_id = user.user_id WHERE score_user_id=? AND score_quizz_id=$quizzid" );
			$request->execute([$user_id[0]]);

			while ($results=$request->fetch()){
				 ?>

				<tr>
					<td class="tdgen2"><?php echo $results['score'] ?></td>
				</tr>	
		<?php 

			}

	}
			 ?>

	</table>

</body>