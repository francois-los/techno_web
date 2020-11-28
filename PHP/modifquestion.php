<?php
if (isset($_GET['id'])){
    $questionid= $_GET['id'];
} else {
    include 'home.php';
    die;
}
?>

<body  class="bkcreate">

    <form id="signup-form2" action="index.php?direction=home" method="post">
        <h2>Modifier votre question</h2>

        <div id="container-form">

            <div class="form-input">
                <label>
                    <input id="input_question" type="text" name="input_question" placeholder="Nom question"  autocomplete="off" >
                </label>
            </div>
    

            <input type = "hidden" name = "input_quizz" value = "<?php echo $questionid ?>" />
                
                    
            <br>
    
            
            <br><br><br>

            <h3 id="" > Modifier les réponses : </h3> 
            <br><br>

             <?php 
            $request = $bdd->query("SELECT * FROM answer WHERE answer_question_id = $questionid");
            ?>
            <?php 
              $idx=0;
              while ($results=$request->fetch()){ 
                
                ?> 
                <p id="" > Réponse <?php echo $idx?> : <?php echo $results[1]?> </p> 
                   <div class="form-input">
                        <label> 
                            <input id="input_bonne<?php echo $idx; ?>" type="text" name="input_bonne<?php echo $idx; ?>" placeholder="Bonne réponse"pattern="[A-Za-z0-9\- ]+" title="Please enter letters only" autocomplete="off" >
                        </label>
                    </div>
                <?php 
                $idx=$idx+1;
              }
              ?>
          


            <br><br>
            <h3 id="" > La nouvelle bonne réponse ? </h3> 
            <br><br>
            
            <?php 
            $request = $bdd->query("SELECT * FROM answer WHERE answer_question_id = $questionid");

              $idx=0;
              while ($results=$request->fetch()){ 
                
                ?> 
                 <input type="radio" name="radio" value="<?php echo $idx; ?>" required><?php echo $results[1]; ?>
                <?php 
                $idx=$idx+1;
              }
              ?>

              <br><br>
                 
            
             <div class="form-input">
                <input type="submit" name="modif_question" value="Validate">
            </div>

            
           <br><br><br><br>
        </div>
    </form>
    
</body>
           
