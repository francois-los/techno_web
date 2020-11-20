<?php include('data.php') ?>


<body class="bkq2">


 <!-- Entête-->


<section>
  <div class="container">
    <div class="background-img2">
      <div class="box">
        <div class="content">
          <h2> Réponses Quizz numéro <?php echo $quizzid ?> </h2>
        </div>    
      </div>  
    </div>
  </div>
</section>


  <!-- Question 1 -->

 <?php

$quizzid= $_GET['id'];
  
  $listereponses=array();


  $request = $bdd->prepare("SELECT user_id FROM user WHERE username =?");
  $request->execute([$_SESSION['username']]);
  $user_id = $request->fetch();

  $request2 = $bdd->prepare("SELECT is_valid_answer,answer_question_id FROM answer INNER JOIN user_answer ON answer.answer_id = user_answer.answer_id WHERE user_id=?");
  $request2->execute([$user_id[0]]);

   while ($results=$request2->fetch()){

    $listereponses[$results['answer_question_id']]=$results['is_valid_answer'];

  }

  for ($i = 0; $i < sizeof($listereponsesnumber); $i++){
  	 $listereponses[$listereponsesnumber[$i]['answer_question_id']] = strval($listereponsesnumber[$i][ 'is_valid_answer']);
  }

?>

  <?php


    

    $questionarray = array();

    if (isset($quizzid)) {
      $request = $bdd->query("SELECT * FROM question WHERE question_quizz_id = $quizzid");
      while ($results=$request->fetch()){

        $questionarray[$results[0]] = array('Question' => $results[1], 'Question_id' => $results[0]);

      }
    }


    if (isset($quizzid)) {
      $request = $bdd->query("SELECT question_id FROM question WHERE question_quizz_id = $quizzid");
      $results=$request->fetch();
      $questionarraystart = $results[0];
    }

    if (isset($quizzid)) {
        $request = $bdd->query("SELECT question_id FROM question WHERE question_quizz_id = $quizzid ORDER BY question_id DESC LIMIT 1" );
        while ($results=$request->fetch()){

           $questionarrayend = $results[0];

        }
    }
  


    for ($idx = $questionarraystart; $idx <= $questionarrayend; $idx++) {
    	
        if (isset($listereponses[$idx])){

	        $question = $questionarray[$idx]['Question'];
	        $questionid =$questionarray[$idx]['Question_id'];


	        $reponseid[] = $results[0]; 
	        ?>

	        <div class="bk<?php echo $quizzid ?>noir">
	          <h3  ><br><br> Question Numéro <?php echo $questionid; ?> !<br><br>  </h3>
	          <label ><?php echo $question; ?> <br><br></label>
	          <?php


	          $request2 = $bdd->prepare("SELECT answer_text FROM answer WHERE answer_question_id = ? AND is_valid_answer=1");
	          $request2 ->execute([$idx]);
	          $results=$request2->fetch();

	          
	          if ( $listereponses[$idx] == 1) {
	            {?> <p id="qtrue" > <br> [VRAI] <?php echo $results[0]; ?> </p> <?php } 
	          }
	          else{
	           ?> <p id="qfalse" > <br> [FAUX] <?php echo $results[0]; ?> </p> 
	       
	            <?php
	          }

	    }
      else {

            $question = $questionarray[$idx]['Question'];
            $questionid =$questionarray[$idx]['Question_id'];

            ?>

            <div class="bk<?php echo $quizzid ?>noir">
            <h3  ><br><br> Question Numéro <?php echo $questionid; ?> !<br><br>  </h3>
            <label ><?php echo $question; ?> <br><br></label>
            <?php


            $request2 = $bdd->prepare("SELECT answer_text FROM answer WHERE answer_question_id = ? AND is_valid_answer=1");
            $request2 ->execute([$idx]);
            $results=$request2->fetch();


             ?> <p id="qfalse" > <br> [FAUX] <?php echo $results[0]; ?> </p> 
         
              <?php
            }

}




 ?>



<br /><br /><br /><br />


</body>
