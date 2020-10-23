<html lang="fr">
<?php include('headerr.php')?>
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


  <!-- Question 1 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=1 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=1 " ); $results = $response->fetch() ?>
  <?php if ((isset($q1bool)) && ($q1bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q1answer; ?> </p> <?php } ?>


  <!-- Question 2 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=2 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=2 " ); $results = $response->fetch() ?>
  <?php if ((isset($q2bool)) && ($q2bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q2answer; ?> </p> <?php } ?>

  <!-- Question 3 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=3 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=3 " ); $results = $response->fetch() ?>
  <?php if ((isset($q3bool)) && ($q3bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q3answer; ?> </p> <?php } ?>

  <!-- Question 4 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=4 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
  <p> <?php echo $results['question_title']; ?></p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=4 " ); $results = $response->fetch() ?>
  <?php if ((isset($q4bool)) && ($q4bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q4answer; ?> </p> <?php } ?>

  <!-- Question 5 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=5 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
  <p> <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=5 " ); $results = $response->fetch() ?>
  <?php if ((isset($q5bool)) && ($q5bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q5answer; ?> </p> <?php } ?>

  <!-- Question 6 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=6 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=6 " ); $results = $response->fetch() ?>
  <?php if ((isset($q6bool)) && ($q6bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q6answer; ?> </p> <?php } ?>

  <!-- Question 7 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=7 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
  <p>   <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=7 " ); $results = $response->fetch() ?>
  <?php if ((isset($q7bool)) && ($q7bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q7answer; ?> </p> <?php } ?>

  <!-- Question 8 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=8 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
  <p> <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=8 " ); $results = $response->fetch() ?>
  <?php if ((isset($q8bool)) && ($q8bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q8answer; ?><br> </p> <?php } ?>
<br /><br /><br /><br />



</body>
</html>
