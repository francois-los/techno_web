<html lang="fr">
<?php include('../HTML/headerr.html')?>
<?php include('../HTML/footer.html')?>
<head>
  <title>Reponse Quizz</title>
</head>



<body>


  <!-- Entête -->


<section>
  <div class="container">
    <div class="background-img">
      <div class="box">
        <div class="content">
          <h2> Réponses Quizz numéro 2 </h2>
        </div>    
      </div>
    </div>
  </div>
</section>


<?php $bdd = new PDO('mysql:host=localhost;dbname=quizzsite','root',''); ?>

  <!-- Question 1 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=9 " );

while ($results = $response->fetch() ){
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p> Quelle est la couleur du cheval blanc d'Henri 4 ? </p>
  <p> <?php echo $results['answer_text']; ?>  </p>

<?php
}
$response->closeCursor() ;
?>




  <!-- Question 2 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=10 " );

while ($results = $response->fetch() ){
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p> Que fait une tortue le matin ? </p>
  <p> <?php echo $results['answer_text']; ?>  </p>
<?php
}
$response->closeCursor() ;
?>




  <!-- Question 3 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=11 " );

while ($results = $response->fetch() ){
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p>  Quand est-ce que les poules auront des dents ?</p>
  <p> <?php echo $results['answer_text']; ?>  </p>
<?php
}
$response->closeCursor() ;
?>


  <!-- Question 4 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=12 " );

while ($results = $response->fetch() ){
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p> Quelle est la réponse ? (entre 20 et 70) </p>
  <p><span class="lastQuestion"> <?php echo $results['answer_text']; ?>  </span></p>

<?php
}
$response->closeCursor() ;
?>


  <!-- Question 5 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=13 " );

while ($results = $response->fetch() ){
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p> De quel couleur est le soleil la nuit  ? </p>
  <p> <?php echo $results['answer_text']; ?>  </p>

<?php
}
$response->closeCursor() ;
?>


  <!-- Question 6 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=14 " );

while ($results = $response->fetch() ){
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p> De quelle forme est la terre ? </p>
  <p> <?php echo $results['answer_text']; ?>  </p>
<?php
}
$response->closeCursor() ;
?>



  <!-- Question 7 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=15 " );

while ($results = $response->fetch() ){
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p>   Quam multa enim I + II ? </p>
  <p> <?php echo $results['answer_text']; ?> </p>

<?php
}
$response->closeCursor() ;
?>


  <!-- Question 8 -->

<?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=16 " );

while ($results = $response->fetch() ){
 ?>
  <h3  ><br><br> Question Numéro <?php echo $results['answer_question_id']; ?> !<br><br>  </h3>
  <p> Combien y-a-t'il de "u" dans Jacque Chirac ? </p>
  <p><span class="lastQuestion"> <?php echo $results['answer_text']; ?> </span></p>

<?php
}
$response->closeCursor() ;
?>





</body>
</html>

