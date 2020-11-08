<!doctype html>
<html lang="fr">

<head>
  <title>Quiz2</title>
</head>


<body class="bkq1">

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





<form action ="./?p=reponse" method="post">

    <!-- Question 1 -->


  <div class="bk1noir">
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
  </div>
 


  <!-- Question 2 -->


  <div class="bk1noir">
  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=2 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <label ><?php echo $results['question_title']; ?> <br><br>
  <input type="checkbox" name="q2answer1" value ="14 janvier 800" />14 janvier 800
  <input type="checkbox" name="q2answer2" value ="06 septembre 800" />06 septembre 800
  <input type="checkbox" name="q2answer3" value ="25 decembre 800" />25 decembre 800</label>
  </div>

  <!-- Question 3 -->


  <div class="bk1noir">
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
  </div>

  <!-- Question 4 -->


  <div class="bk1noir">
  <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=4 " ); $results = $response->fetch() ?>
  <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <form >
    <label for="quantity"><?php echo $results['question_title']; ?></label>
    <input type="number" name="q4answer" min="20" max="70">
  </div>

  <!-- Question 5 -->


  <div class="bk1noir">
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
  </div>

  <!-- Question 6 -->


  <div class="bk1noir">
    <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=6 " ); $results = $response->fetch() ?>
    <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
    <label > <?php echo $results['question_title']; ?>  <br><br>
    <input type="checkbox" name="q6answer1" value ="Kheops" />Kheops 
    <input type="checkbox" name="q6answer2" value ="Ramses II" />Ramses II
    <input type="checkbox" name="q6answer3" value ="Toutankhamon" />Toutankhamon </label>
  </div>

  <!-- Question 7 -->


  <div class="bk1noir">
    <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=7 " ); $results = $response->fetch() ?>
    <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
    <label for="Question-select"> <?php echo $results['question_title']; ?></label>
    <select name="q7answer" id="Question-select">
        <option value=" ">--choissiez...-</option>
        <option value="100">100</option>
        <option value="200">200</option>
        <option value="300">300</option>
        <option value="400">400</option>
        <option value="500">500</option>
    </select>
  </div>


  <!-- Question 8 -->


  <div class="bk1noir">
    <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=8 " ); $results = $response->fetch() ?>
    <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
    <form >
      <label for="quantity"><?php echo $results['question_title']; ?> </label>
      <input type="number" name="q8answer" min="20" max="100">
  </div> 
  <div class="bk1noir">  
      <br /><br /><br /> <button type="submit" name="validerQuizz1"> Valider vos réponses !</button><br /><br /><br /><br /><br />
  </div> 


</form>

</body>

</html> 
