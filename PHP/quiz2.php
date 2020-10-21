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



 <!-- Question 1 -->


<form>
  <h3  ><br><br> Question Numéro 1 !<br><br>  </h3>
  <p> Quelle est la couleur du cheval blanc d'Henri 4 ? <br><br></p>
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


 <!-- Question 2 -->


<h3> <br><br>Question Numéro 2 !<br><br>  </h3>
<label >Que fait une tortue le matin ? <br><br>
<input type="checkbox" name="question3" id="q3answer1" value ="answer1" checked="checked" />Elle range sa chambre
<input type="checkbox" name="question3" id="q3answer2" value ="answer2" />Elle se lave 
<input type="checkbox" name="question3" id="q3answer3" value ="answer3" />Elle continue de dormir</label>


 <!-- Question 3 -->


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


 <!-- Question 4 -->

<h3> <br><br>Question Numéro 4 !<br><br>  </h3>
<form >
  <label for="quantity">Quelle est la réponse ? (entre 20 et 70)</label>
  <input type="number" id="quantity" name="quantity" min="20" max="70">
  <input type="submit">
</form>


 <!-- Question 5 -->


<form>
  <h3  ><br><br> Question Numéro 5 !<br><br>  </h3>
  <p> De quel couleur est le soleil la nuit  ? </p>
  <div>
    <input type="radio" id="Choice1"
     name="contact" value="1">
    <label for="contactChoice1">Bleu</label>

    <input type="radio" id="Choice2"
     name="contact" value="2">
    <label for="contactChoice2">Jaune</label>

    <input type="radio" id="Choice3"
     name="contact" value="3">
    <label for="contactChoice3">Rouge</label>
  </div>
  <div>
    <h2>  </h2>
    <button type="submit">        Valider !</button>
  </div>
</form>


 <!-- Question 6 -->


<h3> <br><br>Question Numéro 6 !<br><br>  </h3>
<label > De quelle forme est la terre ? <br><br>
<input type="checkbox" name="question3" id="q3answer1" value ="answer1" checked="checked" /> Ronde
<input type="checkbox" name="question3" id="q3answer2" value ="answer2" /> Plate
<input type="checkbox" name="question3" id="q3answer3" value ="answer3" /> Cubique </label>


 <!-- Question 7 -->


<h3> <br><br>Question Numéro 7 !<br><br>  </h3>
<label for="Question-select">  Quam multa enim I + II ? </label>
<select name="Question" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="1">I</option>
    <option value="2">II</option>
    <option value="1">III </option>
    <option value="1">IV</option>
    <option value="1">V </option>

</select>


 <!-- Question 8 -->

<h3> <br><br>Question Numéro 8 !<br><br>  </h3>
<form >
  <label for="quantity"> Combien y-a-t'il de "u" dans Jacque Chirac ?</label>
  <input type="number" id="quantity" name="quantity" min="0" max="20">
  <input type="submit">
</form>



</body>


<a href="reponsequizz2.php" class="border-button"> CORRECTION </a>

</html>
