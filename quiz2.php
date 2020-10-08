
<!doctype html>
<html lang="fr">
<?php include('headerr.html')?>
<?php include('footer.html')?>
<head>
  <meta charset="utf-8">
  <title>Quiz2</title>
  <link rel="stylesheet" href="style.css"/>
</head>



<body>




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









<form>
  <h3  ><br><br> Question Numéro 1 !<br><br>  </h3>
  <p> Quelle est la couleur du cheval blanc d'Henri 4 ? </p>
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



<h3> <br><br>Question Numéro 2 !<br><br>  </h3>
<label >Que fait une tortue le matin ? <br><br>
<input type="checkbox" name="question3" id="q3answer1" value ="answer1" checked="checked" />Elle range sa chambre
<input type="checkbox" name="question3" id="q3answer2" value ="answer2" />Elle se lave 
<input type="checkbox" name="question3" id="q3answer3" value ="answer3" />Elle continue de dormir</label>




<h3> <br><br>Question Numéro 3 !<br><br>  </h3>
<label for="Question-select"> Quand est-ce que les poules auront des dents ?</label>
<select name="Question" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="1">2020</option>
    <option value="2">2026</option>
    <option value="1">2027</option>
    <option value="1">2031</option>
    <option value="1">42</option>

</select>


<h3> <br><br>Question Numéro 4 !<br><br>  </h3>
<form >
  <label for="quantity">Quelle est la réponse ? (entre 20 et 70)</label>
  <input type="number" id="quantity" name="quantity" min="20" max="70">
  <input type="submit">
</form>

</body>


<a href="reponsequizz2.php" class="border-button"> CORRECTION </a>

</html>




