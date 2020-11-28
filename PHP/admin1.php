
<?php

if (isset($_GET['del'])){
 
  $request4 = $bdd->prepare("DELETE FROM score WHERE score_quizz_id = ?");
  $request4->execute([$_GET['del']]);


  $request3 = $bdd->prepare("DELETE FROM question WHERE question_quizz_id = ?");
  $request3->execute([$_GET['del']]);

  $request1 = $bdd->prepare("DELETE FROM quizz WHERE quizz_id = ?");
  $request1->execute([$_GET['del']]);
} 
?>




<body class="temp">
    <br>

        <nav class="navigation3">
              <ul class="navigationListe">
                <li><a href="../PHP/index.php?direction=addquizz" title="Créer votre question">Ajouter un quizz</a></li>
              </ul>
          </nav>


<br><br> <br> <br> <br>
        <?php  
        $request = $bdd->query("SELECT quizz_name,quizz_id FROM quizz ");

        while ($results=$request->fetch()){   

          ?>

           <nav class="navigation3">
              <ul class="navigationListe">
                <li><a href="../PHP/index.php?direction=addquizz" title="Créer votre Quizz">Créer votre question</a></li>
              </ul>
          </nav>

          <section>
            <div class="container">
              <div class="background-img4">
                <div class="box">
                  <div class="content">
                    <h2> <?php echo $results[0]?> </h2>
                  </div>    
                </div>
              </div>
            </div>
          </section>

           <br> 
        
            <nav class="navigation4">
                  <ul class="navigationListe">
                    <li><a href="../PHP/index.php?direction=admin1&del=<?php echo $results[1]?>" title="Créer votre question">Supprimer Quizz</a></li>
                  </ul>
              </nav>
           <br> <br>  
          <?php 

        }

        ?>
        

           <br> <br>   
      

		

</body>