<html lang="fr">
<?php include('../HTML/headerr.html')?>
<?php include('../HTML/footer.html')?>
<head>
  <title>Quiz1</title>
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



<!-- Question 1 -->



<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=1 " );

while ($results = $response->fetch() ){
 ?>
  <form>
  <h3  ><br><br> Question Numéro  <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <p> <?php echo $results['question_title']; ?><br><br>  </p>
  <div>
    <input type="radio" id="Choice1"
     name="contact" value="1"> 
    <label for="contactChoice1">18 juin 1815</label>

    <input type="radio" id="Choice2"
     name="contact" value="2">
    <label for="contactChoice2">18 juillet 1815</label>

    <input type="radio" id="Choice3"
     name="contact" value="3">
    <label for="contactChoice3">18 juillet 1816</label>
  </div>
  <div>
    <h2>  </h2>
    <button type="submit">     Valider !</button>
  </div>
</form>

<?php
}
$response->closeCursor() ;
?>



<!-- Question 2 -->



<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=2" );

while ($results = $response->fetch() ){
 ?>
  <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
<label ><?php echo $results['question_title']; ?><br><br>
<input type="checkbox" name="question3" id="q3answer1" value ="answer1" checked="checked" />14 janvier 800
<input type="checkbox" name="question3" id="q3answer2" value ="answer2" />06 septembre 800
<input type="checkbox" name="question3" id="q3answer3" value ="answer3" />25 décembre 800</label>


<?php
}
$response->closeCursor() ;
?>


<!-- Question 3 -->


<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=3" );

while ($results = $response->fetch() ){
 ?>
 
  <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
<label for="Question-select"><?php echo $results['question_title']; ?></label>
<select name="Question" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="1">1924</option>
    <option value="2">1926</option>
    <option value="1">1927</option>
    <option value="1">1928</option>
    <option value="1">1931</option>

</select>

<?php
}
$response->closeCursor() ;
?>





<!-- Question 4 -->



<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=4" );

while ($results = $response->fetch() ){
 ?>

 <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
<form >
  <label for="quantity"><?php echo $results['question_title']; ?></label>
  <input type="number" id="quantity" name="quantity" min="20" max="70">
  <input type="submit">
</form>
</select>

<?php
}
$response->closeCursor() ;
?>





<!-- Question 5 -->


<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=5" );

while ($results = $response->fetch() ){
 ?>

<form>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
  <p> <?php echo $results['question_title']; ?><br><br>  </p>
  <div>
    <input type="radio" id="Choice1"
     name="contact" value="1">
    <label for="contactChoice1">1214</label>

    <input type="radio" id="Choice2"
     name="contact" value="2">
    <label for="contactChoice2">1514</label>

    <input type="radio" id="Choice3"
     name="contact" value="3">
    <label for="contactChoice3">1914</label>
  </div>
  <div>
    <h2>  </h2>
    <button type="submit"> Valider !</button>
  </div>
</form>

<?php
}
$response->closeCursor() ;
?>





<!-- Question 6 -->

<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=6" );

while ($results = $response->fetch() ){
 ?>

 <h3> <br><br>Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
<label ><?php echo $results['question_title']; ?> <br><br>
<input type="checkbox" name="question3" id="q3answer1" value ="answer1" checked="checked" />Khéops 
<input type="checkbox" name="question3" id="q3answer2" value ="answer2" />Ramsès II
<input type="checkbox" name="question3" id="q3answer3" value ="answer3" />Toutânkhamon </label>


<?php
}
$response->closeCursor() ;
?>





<!-- Question 7 -->

<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=7" );

while ($results = $response->fetch() ){
 ?>

<h3> <br><br>Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
<label for="Question-select"> <?php echo $results['question_title']; ?> </label>
<select name="Question" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="1">100</option>
    <option value="2">200</option>
    <option value="1">300</option>
    <option value="1">400</option>
    <option value="1">500</option>

</select>

<?php
}
$response->closeCursor() ;
?>






<!-- Question 8 -->

<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=8" );

while ($results = $response->fetch() ){
 ?>

<h3> <br><br>Question Numéro <?php echo $results['question_id']; ?>  !<br><br>  </h3>
<form >
  <label for="quantity"><?php echo $results['question_title']; ?> </label>
  <input type="number" id="quantity" name="quantity" min="20" max="100">
  <input type="submit">
</form>

</body>



<?php
}
$response->closeCursor() ;
?>





<a href="reponsequizz.php" class="border-button"> CORRECTION </a>

</html>






