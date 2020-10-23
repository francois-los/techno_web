<!doctype html>
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
          <h2> Quizz numéro 1 </h2>
        </div>    
      </div>
    </div>
  </div>
</section>


<?php $bdd = new PDO('mysql:host=localhost;dbname=quizzsite','root',''); ?>


<form action ="reponsequizz.php" method="post">

    <!-- Question 1 -->


  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=1 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <p> <?php echo $results['question_title']; ?> <br><br>  </p>
  <div>
    <input type="radio" id="Choice1"
     name="q1answer" value="18 juin 1815">
    <label for="contactChoice1">18 juin 1815</label>

    <input type="radio" id="Choice2"
     name="q1answer" value="18 juillet 1815">
    <label for="contactChoice2">18 juillet 1815</label>

    <input type="radio" id="Choice3"
     name="q1answer" value="18 juillet 1816">
    <label for="contactChoice3">18 juillet 1816</label>
  </div>


  <!-- Question 2 -->


  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=2 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <label ><?php echo $results['question_title']; ?> <br><br>
  <input type="checkbox" name="q2answer1" value ="14 janvier 800" checked="checked" />14 janvier 800
  <input type="checkbox" name="q2answer2" value ="06 septembre 800" />06 septembre 800
  <input type="checkbox" name="q2answer3" value ="25 décembre 800" />25 décembre 800</label>


  <!-- Question 3 -->


  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=3 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <label for="Question-select"> <?php echo $results['question_title']; ?></label>
  <select name="q3answer">
      <option value="">--choissiez...-</option>
      <option value="1924">1924</option>
      <option value="1926">1926</option>
      <option value="1927">1927</option>
      <option value="1928">1928</option>
      <option value="1931">1931</option>
  </select>


  <!-- Question 4 -->


  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=4 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <form >
    <label for="quantity"><?php echo $results['question_title']; ?></label>
    <input type="number" name="q4answer" min="20" max="70">


  <!-- Question 5 -->


  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=5 " ); $results = $response->fetch() ?>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <p> <?php echo $results['question_title']; ?><br><br>  </p>
  <div>
    <input type="radio" id="Choice1"
     name="q5answer" value="1214">
    <label for="contactChoice1">1214</label>

    <input type="radio" id="Choice2"
     name="q5answer" value="1514">
    <label for="contactChoice2">1514</label>

    <input type="radio" id="Choice3"
     name="q5answer" value="1914">
    <label for="contactChoice3">1914</label>
  </div>


  <!-- Question 6 -->


  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=6 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <label > <?php echo $results['question_title']; ?>  <br><br>
  <input type="checkbox" name="q6answer1" value ="Khéops" checked="checked" />Khéops 
  <input type="checkbox" name="q6answer2" value ="Ramsès II" />Ramsès II
  <input type="checkbox" name="q6answer3" value ="Toutânkhamon" />Toutânkhamon </label>


  <!-- Question 7 -->


  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=7 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <label for="Question-select"> <?php echo $results['question_title']; ?></label>
  <select name="q7answer" id="Question-select">
      <option value="">--choissiez...-</option>
      <option value="100">100</option>
      <option value="200">200</option>
      <option value="300">300</option>
      <option value="400">400</option>
      <option value="500">500</option>
  </select>


  <!-- Question 8 -->


  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=8 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <form >
    <label for="quantity"><?php echo $results['question_title']; ?> </label>
    <input type="number" name="q8answer" min="20" max="100">
    
    <br /><br /><br /> <button type="submit" name="validerQuizz1"> Valider vos réponses !</button>

</form>

</body>

<a href="reponsequizz.php" class="border-button"> CORRECTION </a>

</html> 
