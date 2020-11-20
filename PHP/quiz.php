<?php
if (isset($_GET['id'])){
    $quizzid= $_GET['id'];
} else {
    include 'home.php';
    die;
}
$_SESSION['quizzid'] = $quizzid;
?>

<?php include('headerr.php')?>

<?php include('data.php'); ?>


<body class="bkq1">

<!-- Entête -->

<section>
  <div class="container">
    <div class="background-img">
      <div class="box">
        <div class="content">
          <h2> Quizz numéro <?php echo $quizzid ?> </h2>
        </div>    
      </div>
    </div>
  </div>
</section>


<form action ="index.php?direction=reponsequizz&id=<?php echo $quizzid ?>" method="post">

  <?php
    foreach ($questionarray as $key => $value) {
      $question = $value['Question'];
      $questiontype = $value['Type de question'];
      $questionid = $value['Question id'];
      $reponsearray = array();
      $reponseid = array();
      $reponse_user_array = array();
      $reponse_number_array = array();
      $request = $bdd->query("SELECT * FROM answer WHERE answer_question_id = $questionid");
      while ($results=$request->fetch()){

        $reponsearray[] = $results[1];
        $reponseid[] = $results[0];

      }
  ?>
  <div class="bknoir">
    <h3  ><br><br> Question Numéro <?php echo $questionid; ?> !<br><br>  </h3>
    <label ><?php echo $question; ?> <br><br></label>
    
      <?php if ($questiontype == "radio") { ?>
          <input type="radio" name="$reponse_user_array[]" value="<?php echo $reponseid[0]; ?>"><?php echo $reponsearray[0]; ?>
          <input type="radio" name="$reponse_user_array[]" value="<?php echo $reponseid[1]; ?>"><?php echo $reponsearray[1]; ?>
          <input type="radio" name="$reponse_user_array[]" value="<?php echo $reponseid[2]; ?>"><?php echo $reponsearray[2]; ?>
      <?php } ?>
      <?php if ($questiontype == "checkbox") { ?>
        <input type="checkbox" name="$reponse_user_array[]" value ="<?php echo $reponseid[0]; ?>" /><?php echo $reponsearray[0]; ?>
        <input type="checkbox" name="$reponse_user_array[]" value ="<?php echo $reponseid[1]; ?>" /><?php echo $reponsearray[1]; ?>
        <input type="checkbox" name="$reponse_user_array[]" value ="<?php echo $reponseid[2]; ?>" /><?php echo $reponsearray[2]; ?>
      <?php } ?>
      <?php if ($questiontype == "select") { ?>
        <select name="$reponse_user_array[]">
          <option value="<?php echo $reponseid[0]; ?>"><?php echo $reponsearray[0]; ?></option>
          <option value="<?php echo $reponseid[1]; ?>"><?php echo $reponsearray[1]; ?></option>
          <option value="<?php echo $reponseid[2]; ?>"><?php echo $reponsearray[2]; ?></option>
          <option value="<?php echo $reponseid[3]; ?>"><?php echo $reponsearray[3]; ?></option>
          <option value="<?php echo $reponseid[4]; ?>"><?php echo $reponsearray[4]; ?></option>
        </select>
      <?php } ?>
      <?php if ($questiontype == "number") { ?>
        <input type="number" name="$reponse_number_array[]">
      <?php } ?>
  </div> 

    <?php } ?>
  <br /><button type="submit" name="validerQuizz"> Valider vos réponses !</button><br /><br /><br /><br /><br /><br />

 
</form>


</body>
