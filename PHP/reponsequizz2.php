<html lang="fr">
<?php include('../HTML/headerr.html')?>
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

<?php $bdd = new PDO('mysql:host=localhost;dbname=quizzsite','root',''); ?>

 <!-- Question 1 -->



<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=9 " );

while ($results = $response->fetch() ){
 ?>
  <form>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <p> <?php echo $results['question_title']; ?> </p>
  <div>
    <input type="radio" id="Choice1"
     name="contact" value="1">
    <label for="contactChoice1">Bleu</label>

    <input type="radio" id="Choice2"
     name="contact" value="2">
    <label for="contactChoice2">Blanc</label>

    <input type="radio" id="Choice3"
     name="contact" value="3">
    <label for="contactChoice3">Rouge</label>
  </div>
  <div>
    <h2>  </h2>
    <button type="submit">        Valider !</button>
  </div>
</form>

<?php
}
$response->closeCursor() ;
?>




 <!-- Question 2 -->


<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=10 " );

while ($results = $response->fetch() ){
 ?>
<h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
<label ><?php echo $results['question_title']; ?><br><br>
<input type="checkbox" name="question3" id="q3answer1" value ="answer1" checked="checked" />Elle range sa chambre
<input type="checkbox" name="question3" id="q3answer2" value ="answer2" />Elle se lave 
<input type="checkbox" name="question3" id="q3answer3" value ="answer3" />Elle continue de dormir</label>


<?php
}
$response->closeCursor() ;
?>


 <!-- Question 3 -->


<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=11 " );

while ($results = $response->fetch() ){
 ?>
<h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
<label for="Question-select"> <?php echo $results['question_title']; ?></label>
<select name="Question" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="1">2020</option>
    <option value="2">2026</option>
    <option value="1">2027</option>
    <option value="1">2031</option>
    <option value="1">42</option>

</select>

<?php
}
$response->closeCursor() ;
?>



 <!-- Question 4 -->

 <?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=12 " );

while ($results = $response->fetch() ){
 ?>
<h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
<label for="Question-select"> <?php echo $results['question_title']; ?></label>
<select name="Question" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="2020">2020</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2031">2031</option>
    <option value="42">42</option>

</select>

<?php
}
$response->closeCursor() ;
?>


<h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
<form >
  <label for="quantity"><?php echo $results['question_title']; ?></label>
  <input type="number" id="quantity" name="quantity" min="20" max="70">
  <input type="submit">
</form>


 <!-- Question 5 -->

<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=13 " );

while ($results = $response->fetch() ){
 ?>
<form>
  <h3  ><br><br> Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
  <p> <?php echo $results['question_title']; ?> </p>
  <div>
    <input type="radio" id="Choice1"
     name="contact" value="Bleu">
    <label for="contactChoice1">Bleu</label>

    <input type="radio" id="Choice2"
     name="contact" value="Jaune">
    <label for="contactChoice2">Jaune</label>

    <input type="radio" id="Choice3"
     name="contact" value="Rouge">
    <label for="contactChoice3">Rouge</label>
  </div>
  <div>
    <h2>  </h2>
    <button type="submit">        Valider !</button>
  </div>
</form>


<?php
}
$response->closeCursor() ;
?>



 <!-- Question 6 -->

<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=14 " );

while ($results = $response->fetch() ){
 ?>
<h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
<label for="Question-select"> <?php echo $results['question_title']; ?></label>
<select name="Question" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="Ronde">Ronde</option>
    <option value="carré">carré</option>
    <option value="plate">plate</option>
    <option value="sphère">sphère</option>
    <option value="rectangle">rectangle</option>

</select>

<?php
}
$response->closeCursor() ;
?>


 <!-- Question 7 -->

<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=15 " );

while ($results = $response->fetch() ){
 ?>
<h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
<label for="Question-select"> <?php echo $results['question_title']; ?> </label>
<select name="Question" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="I">I</option>
    <option value="II">II</option>
    <option value="III">III </option>
    <option value="IV">IV</option>
    <option value="V">V </option>

</select>

<?php
}
$response->closeCursor() ;
?>




 <!-- Question 8 -->


<?php $response = $bdd->query("SELECT * FROM `question` WHERE question_id=16 " );

while ($results = $response->fetch() ){
 ?>
<h3> <br><br>Question Numéro <?php echo $results['question_id']; ?> !<br><br>  </h3>
<form >
  <label for="quantity"><?php echo $results['question_title']; ?></label>
  <input type="number" id="quantity" name="quantity" min="0" max="20">
  <input type="submit">
</form>

<?php
}
$response->closeCursor() ;
?>





</body>


<a href="reponsequizz2.php" class="border-button"> CORRECTION </a>

</html>
