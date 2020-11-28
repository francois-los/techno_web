<?php
if (isset($_GET['id'])){
    $quizzid= $_GET['id'];
} else {
    include 'home.php';
    die;
}
$_SESSION['quizzid'] = $quizzid;
?>

<body class="temp">

	

	<?php
		$resumearray = array();
		$request = $bdd->prepare("SELECT user.username, score.score, score.timeQuizz FROM score INNER JOIN user ON score.score_user_id = user.user_id WHERE score_quizz_id=? ORDER BY score DESC, timeQuizz");
		$request->execute([$quizzid]);
		while ($results=$request->fetch()){
			$resumearray[] = $results;
		}
	?>

	<table class="tableresume">

		<section>
          <div class="container">
            <div class="background-img4">
              <div class="box">
                <div class="content">
                  <h2> Score Quizz <?php echo $quizzid ?> </h2>
                </div>    
              </div>
            </div>
          </div>
        </section>


		<tr>
			<th class="thgen">User</th>
			<th class="thgen">Score out of 10</th>
			<th class="thgen">Time</th>
		</tr>

		<?php

			foreach ($resumearray as $key => $value) {

				if ($value['timeQuizz'] >= 60){
					$minutes = floor($value['timeQuizz'] / 60);
					$secondes = $value['timeQuizz'] - ($minutes * 60);
				}
				else {
					$secondes = $value['timeQuizz'];
					$minutes = 0;
				}
				$formatedTime = "$minutes min $secondes s";?>
				<tr>
		
					<td class="tdgen "><?php echo $value['username'] ?></td>
					<td class="tdgen "><?php echo $value['score'] ?></td>
					<td class="tdgen "><?php echo $formatedTime ?></td>
			
				</tr>
		<?php } ?>

	</table>

</body>
