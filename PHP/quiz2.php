<html lang="fr">
<?php include('headerr.php')?>
<?php include('../HTML/footer.html')?>
<head>
  <title>Quiz2</title>
</head>



<body>


 <!-- Entête -->


  <section>
    <div class="container">
      <div class="background-img">
        <div class="box">
          <div class="content">
            <h2> Quizz numéro 2 </h2>
          </div>    
        </div>
      </div>
    </div>
  </section>



 <!-- Question 1 -->


<form>

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=9 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo ($results['question_id']-8); ?> !<br><br>  </h3>
  <p> <?php echo $results['question_title']; ?> <br><br></p>
  <div>
    <input type="radio" id="Choice1"
     name="q1answer" value="Bleu">
    <label for="contactChoice1">Bleu</label>

    <input type="radio" id="Choice2"
     name="q1answer" value="Blanc">
    <label for="contactChoice2">Blanc</label>

    <input type="radio" id="Choice3"
     name="q1answer" value="Rouge">
    <label for="contactChoice3">Rouge</label>
  </div>


  <!-- Question 2 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=10 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo ($results['question_id']-8); ?> !<br><br>  </h3>
  <label ><?php echo $results['question_title']; ?><br><br>
  <input type="checkbox" name="q2answer1" value ="Elle range sa chambre" />Elle range sa chambre
  <input type="checkbox" name="q2answer2" value ="Elle se lave" />Elle se lave 
  <input type="checkbox" name="q2answer3" value ="Elle continue de dormir" />Elle continue de dormir</label>


 <!-- Question 3 -->

 <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=11 " ); $results = $response->fetch() ?>
 <h3> <br><br>Question Numéro <?php echo ($results['question_id']-8); ?> !<br><br>  </h3>
 <label for="Question-select"> <?php echo $results['question_title']; ?></label>
 <select name="q3answer" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="2020">2020</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2031">2031</option>
    <option value="42">42</option>
 </select>


  <!-- Question 4 -->


  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=12 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo ($results['question_id']-8); ?> !<br><br>  </h3>
  <form >
    <label for="quantity"> <?php echo $results['question_title']; ?> </label>
    <input type="number" name="q4answer" min="20" max="70">


  <!-- Question 5 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=13 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo ($results['question_id']-8); ?> !<br><br>  </h3>
  <p> <?php echo $results['question_title']; ?> </p>
  <div>
    <input type="radio" id="Choice1"
     name="q5answer" value="Bleu">
    <label for="contactChoice1">Bleu</label>

    <input type="radio" id="Choice2"
     name="q5answer" value="Jaune">
    <label for="contactChoice2">Jaune</label>

    <input type="radio" id="Choice3"
     name="q5answer" value="Rouge">
    <label for="contactChoice3">Rouge</label>
  </div>

  <!-- Question 6 -->

  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=14 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo ($results['question_id']-8); ?> !<br><br>  </h3>
  <label ><?php echo $results['question_title']; ?> <br><br>
  <input type="checkbox" name="q6answer1" value ="Ronde" /> Ronde
  <input type="checkbox" name="q6answer1" value ="Plate" /> Plate
  <input type="checkbox" name="q6answer1" value ="Cubique" /> Cubique </label>


 <!-- Question 7 -->


  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=15 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo ($results['question_id']-8); ?> !<br><br>  </h3>
  <label for="Question-select"> <?php echo $results['question_title']; ?> </label>
  <select name="q7answer" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="I">I</option>
    <option value="II">II</option>
    <option value="III">III </option>
    <option value="IV">IV</option>
    <option value="V">V </option>
  </select>


  <!-- Question 8 -->


  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=16 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo ($results['question_id']-8); ?> !<br><br>  </h3>

  <label for="quantity"> <?php echo $results['question_title']; ?> </label>
  <input type="number" name="q8answer" min="0" max="20">

  <br /><br /><br /> <button type="submit" name="validerQuizz2"> Valider vos réponses !</button>

</form>

</body>

<a href="reponsequizz2.php" class="border-button"> CORRECTION </a>

</html>
