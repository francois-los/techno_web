<!doctype html>
<html lang="fr">
<?php include('headerr.html')?>
<?php include('footer.html')?>
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


<!-- Question 1 -->


<form>
  <h3  ><br><br> Question Numéro 1 !<br><br>  </h3>
  <p> Quelle est la date de la bataille de Waterloo ?<br><br>  </p>
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


<!-- Question 2 -->


<h3> <br><br>Question Numéro 2 !<br><br>  </h3>
<label >Quand s'est fait le couronnement de Charlemagne ? <br><br>
<input type="checkbox" name="question3" id="q3answer1" value ="answer1" checked="checked" />14 janvier 800
<input type="checkbox" name="question3" id="q3answer2" value ="answer2" />06 septembre 800
<input type="checkbox" name="question3" id="q3answer3" value ="answer3" />25 décembre 800</label>


<!-- Question 3 -->


<h3> <br><br>Question Numéro 3 !<br><br>  </h3>
<label for="Question-select"> Quelle est la date de naissance de la reine d'Angleterre ?</label>
<select name="Question" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="1">1924</option>
    <option value="2">1926</option>
    <option value="1">1927</option>
    <option value="1">1928</option>
    <option value="1">1931</option>

</select>


<!-- Question 4 -->


<h3> <br><br>Question Numéro 4 !<br><br>  </h3>
<form >
  <label for="quantity">Combien y-a-t'il de pays en Afrique ?</label>
  <input type="number" id="quantity" name="quantity" min="20" max="70">
  <input type="submit">
</form>


<!-- Question 5 -->


<form>
  <h3  ><br><br> Question Numéro 5 !<br><br>  </h3>
  <p> Quelle est la date de la bataille de Bouvines ?<br><br>  </p>
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


<!-- Question 6 -->


<h3> <br><br>Question Numéro 6 !<br><br>  </h3>
<label > Qui est le pharaon de Moïse ?  <br><br>
<input type="checkbox" name="question3" id="q3answer1" value ="answer1" checked="checked" />Khéops 
<input type="checkbox" name="question3" id="q3answer2" value ="answer2" />Ramsès II
<input type="checkbox" name="question3" id="q3answer3" value ="answer3" />Toutânkhamon </label>


<!-- Question 7 -->


<h3> <br><br>Question Numéro 7 !<br><br>  </h3>
<label for="Question-select"> Combien d'années ont duré les croisades ?</label>
<select name="Question" id="Question-select">
    <option value="">--choissiez...-</option>
    <option value="1">100</option>
    <option value="2">200</option>
    <option value="1">300</option>
    <option value="1">400</option>
    <option value="1">500</option>

</select>


<!-- Question 8 -->


<h3> <br><br>Question Numéro 8 !<br><br>  </h3>
<form >
  <label for="quantity">Combien y-a-t'il eu de roi en France ? </label>
  <input type="number" id="quantity" name="quantity" min="20" max="100">
  <input type="submit">
</form>

</body>




</body>


<a href="reponsequizz.php" class="border-button"> CORRECTION </a>

</html>







