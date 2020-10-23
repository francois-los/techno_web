<html lang="fr">
<?php include('headerr.php')?>
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


  <!-- Question 1 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=9 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo ($results['question_id']-8); ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=9 " ); $results = $response->fetch() ?>
  <?php if ((isset($q9bool)) && ($q9bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q9answer; ?> </p> <?php } ?>

  <!-- Question 2 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=10 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo ($results['question_id']-8); ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=10 " ); $results = $response->fetch() ?>
  <?php if ((isset($q10bool)) && ($q10bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q10answer; ?> </p> <?php } ?>

  <!-- Question 3 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=11 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo ($results['question_id']-8); ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=11 " ); $results = $response->fetch() ?>
  <?php if ((isset($q11bool)) && ($q11bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q11answer; ?> </p> <?php } ?>

  <!-- Question 4 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=12 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo ($results['question_id']-8); ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=12 " ); $results = $response->fetch() ?>
  <?php if ((isset($q12bool)) && ($q12bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q12answer; ?> </p> <?php } ?>

  <!-- Question 5 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=13 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo ($results['question_id']-8); ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=13 " ); $results = $response->fetch() ?>
  <?php if ((isset($q13bool)) && ($q13bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q13answer; ?> </p> <?php } ?>

  <!-- Question 6 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=14 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo ($results['question_id']-8); ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=14 " ); $results = $response->fetch() ?>
  <?php if ((isset($q14bool)) && ($q14bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q14answer; ?> </p> <?php } ?>

  <!-- Question 7 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=15 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo ($results['question_id']-8); ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=15 " ); $results = $response->fetch() ?>
  <?php if ((isset($q15bool)) && ($q15bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q15answer; ?> </p> <?php } ?>

  <!-- Question 8 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=16 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo ($results['question_id']-8); ?>  !<br><br>  </h3>
  <p>  <?php echo $results['question_title']; ?> </p>

  <?php $response = $bdd->query("SELECT * FROM `answer` WHERE answer_id=16 " ); $results = $response->fetch() ?>
  <?php if ((isset($q16bool)) && ($q16bool== true)) {?> <p id="qtrue" > <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <?php } 
  else {?> <p id ="qtrue"> <br> [VRAI] <?php echo $results['answer_text']; ?> </p> <p id ="qfalse"> <br> [FAUX] <?php echo $q16answer; ?> </p> <?php } ?>




</body>
</html>
