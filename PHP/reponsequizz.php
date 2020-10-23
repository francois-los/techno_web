<html lang="fr">
<?php include('../HTML/headerr.html')?>
<?php include('../HTML/footer.html')?>
<head>
  <title>Reponse Quizz</title>
</head>



<body>


 <!-- Entête-->

<section>
  <div class="container">
    <div class="background-img">
      <div class="box">
        <div class="content">
          <h2> Réponses Quizz numéro 1 </h2>
        </div>    
      </div>
    </div>
  </div>
</section>



<?php $bdd = new PDO('mysql:host=localhost;dbname=quizzsite','root',''); ?>

  <!-- Question 1 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=1 " );
      $test = $bdd->query("SELECT * FROM `user_answer` WHERE answer_id=1 " );
($results = $response->fetch() );
($ans = $test->fetch() );
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p> Quelle est la date de la Révolution française ? </p>
  <p> <?php if($ans['user_answer_text']==$results['answer_text']){
  echo"Bonne réponse";}
  else {
  echo $results['answer_text'];} ?> </p>

<?php

$response->closeCursor() ;
?>


  <!-- Question 2 -->

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=2 " );
        $test = $bdd->query("SELECT * FROM `user_answer` WHERE answer_id=2 " );
($results = $response->fetch() );
($ans = $test->fetch() );
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p> Quand s'est fait le couronnement de Charlemagne ? </p>
  <p> <?php if($ans['user_answer_text']==$results['answer_text']){
  echo"Bonne réponse";}
  else {
  echo $results['answer_text'];} ?> </p>
<?php

$response->closeCursor() ;
?>




  <!-- Question 3 -->

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=3 " );
        $test = $bdd->query("SELECT * FROM `user_answer` WHERE answer_id=3 " );
($results = $response->fetch() );
($ans = $test->fetch() );
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p>  Quelle est la date de naissance de la reine d'Angleterre ? </p>
  <p> <?php if($ans['user_answer_text']==$results['answer_text']){
  echo"Bonne réponse";}
  else {
  echo $results['answer_text'];} ?> </p>
<?php

$response->closeCursor() ;
?>




  <!-- Question 4 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=4 " );
      $test = $bdd->query("SELECT * FROM `user_answer` WHERE answer_id=4 " );
($results = $response->fetch() );
($ans = $test->fetch() );
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p> Combien y-a-t'il de pays en Afrique ? </p>
  <p><span class="lastQuestion"> <?php if($ans['user_answer_text']==$results['answer_text']){
  echo"Bonne réponse";}
  else {
  echo $results['answer_text'];} ?>  </span></p>

<?php

$response->closeCursor() ;
?>


  <!-- Question 5 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=5 " );
      $test = $bdd->query("SELECT * FROM `user_answer` WHERE answer_id=5 " );
($results = $response->fetch() );
($ans = $test->fetch() );
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p> Quelle est la date de la bataille de Bouvines ? </p>
  <p> <?php if($ans['user_answer_text']==$results['answer_text']){
  echo"Bonne réponse";}
  else {
  echo $results['answer_text'];} ?>  </p>

<?php

$response->closeCursor() ;
?>


  <!-- Question 6 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=6 " );
      $test = $bdd->query("SELECT * FROM `user_answer` WHERE answer_id=6 " );
($results = $response->fetch() );
($ans = $test->fetch() );
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p>  Qui est le pharaon de Moïse ?  </p>
  <p> <?php if($ans['user_answer_text']==$results['answer_text']){
  echo"Bonne réponse";}
  else {
  echo $results['answer_text']; }?></p>


<?php

$response->closeCursor() ;
?>

  <!-- Question 7 -->


<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=7 " );
      $test = $bdd->query("SELECT * FROM `user_answer` WHERE answer_id=7 " );
($results = $response->fetch() );
($ans = $test->fetch() );
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p>  Combien d'années ont duré les croisades ? </p>
  <p> <?php if($ans['user_answer_text']==$results['answer_text']){
  echo"Bonne réponse";}
  else {
  echo $results['answer_text']; }?> </p>

<?php

$response->closeCursor() ;
?>

  <!-- Question 8 -->


<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=8 " );

while ($results = $response->fetch() ){
 ?>

  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p> Combien y-a-t'il eu de roi en France ? </p>
  <p><span class="lastQuestion"> <?php echo $results['answer_text']; ?>  </span></p>

<?php
}
$response->closeCursor() ;
?>


</body>
</html>
