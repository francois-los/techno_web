<?php
if (isset($_GET['id'])){
    $quizzid= $_GET['id'];
} else {
    include 'home.php';
    die;
}
$_SESSION['quizzid'] = $quizzid;

$request = $bdd->prepare("SELECT user_id FROM user WHERE username =?");
$request->execute([$_SESSION['username']]);
$user_id = $request->fetch();

if (isset($_GET['del'])){
	$request1 = $bdd->prepare("DELETE FROM user_answer WHERE user_id = ?");
	$request1->execute([$user_id[0]]);

  $request2 = $bdd->prepare("DELETE FROM score WHERE score_user_id = ? AND score_quizz_id = ?");
  $request2->execute([$user_id[0], $quizzid]); ?>

  <br /><br />
	<span class=successDel>Your answers to this quizz have been deleted with success !</span>
<?php } ?>


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

		<nav class="navigation3">
            <ul class="navigationListe">
            	<li><a href="../PHP/index.php?direction=resultatquizzgeneral&id=<?php echo $quizzid ?>" title="Go to Quiz <?php echo $quizzid ?> results">Access the results</a></li>
            	<li><a href="../PHP/index.php?direction=choice&id=<?php echo $quizzid ?>&del=1" title="Delete quizz <?php echo $quizzid ?> answers>">Delete results</a></li>
            	<li><a href="../PHP/index.php?direction=quiz&id=<?php echo $quizzid ?>" title="Go to Quiz <?php echo $quizzid ?>">Do the quizz</a></li>
            </ul>
	    </nav>

</body>
