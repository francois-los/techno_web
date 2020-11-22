<?php

$bdd = new PDO('mysql:host=localhost;dbname=quizzsite','root','');

//On récupère tous les quizzs id
$quizzidarray = array();
$request = $bdd->query("SELECT quizz_id FROM quizz ");
while ($results=$request->fetch()){

	array_push($quizzidarray, $results[0]);
	
}

$questionarray = array();

if (isset($quizzid)) {
	$request = $bdd->query("SELECT * FROM question WHERE question_quizz_id = $quizzid");
	while ($results=$request->fetch()){

		$questionarray[$results[0]] = array('Question' => $results[1], 'Type de question' => $results[3], 'Question id' => $results[0]);

	}
}

//CREATE AN ACCOUNT

if (isset($_POST['signup_user'])) {
	$userarray = array();
	$unicityUsername = true;
	$username = $_POST['input_username'];
	$name = $_POST['input_nom'];
	$firstname = $_POST['input_prenom'];
	$adress = $_POST['input_adresse'];
	$number = $_POST['input_numero'];
	$birthdate = $_POST['input_date_naissance'];
	$password = md5($_POST['input_mdp']);

	$request = $bdd->query("SELECT username FROM user");
	while ($results = $request->fetch()){
		$userarray[] = $results[0]; 
	}
	for ($i = 0; $i < sizeof($userarray); $i++){
		if ($userarray[$i] == $username) { $unicityUsername = false; }
	}
	if ($unicityUsername == true){
		$request2 = $bdd->query("INSERT INTO user (username, user_last_name, user_first_name, user_adress, user_phone, user_birthdate, user_password) VALUES ('$username', '$name', '$firstname', '$adress', '$number', '$birthdate', '$password')");
		$_SESSION['username'] = $username;
		header('Location: index.php?direction=home');
	}
	else{
		$errorUsername = "This username already exists";
		header('Location: index.php?direction=createAccount&retry=1');
	}
	var_dump($userarray);
}

//LOGIN A USER

if (isset($_POST['login_user'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$request = $bdd->query("SELECT username FROM user WHERE username = '$username' AND user_password = '$password'");
	if ($request->rowCount() == 1){
		$_SESSION['username'] = $username;
  	  	header('Location: index.php?direction=home');
	}
	else{
		$error1 = "Wrong username or password";
	}
}

//VALIDATION QUIZZ

if (isset($_POST['validerQuizz'])) {

	$request = $bdd->prepare("SELECT user_id FROM user WHERE username =?");
	$request->execute([$_SESSION['username']]);
	$user_id = $request->fetch();

	$array_reponse = $_POST['$reponse_user_array'];

	$request2 = $bdd->prepare("DELETE FROM user_answer WHERE user_id = ?");
	$request2->execute([$user_id[0]]);

	foreach ($array_reponse as $key => $value) {
		$request3 = $bdd->prepare("INSERT INTO user_answer (user_id,answer_id) VALUES (?,?)");
		$request3->execute([$user_id[0], $value]);
	}


	$array_number = $_POST['$reponse_number_array'];

	$liste_id_number=array();
	$quizzid= $_GET['id'];
	$request4 = $bdd->prepare("SELECT question_id FROM  question WHERE question_input_type='number' AND question_quizz_id = ?" );
	$request4->execute([$quizzid]);

	$idx = 0;


	while ($results=$request4->fetch()){

		
    	$liste_id_number[$results[0]]=$array_number[$idx];
    	$idx = $idx +1;
  	}


   	$listereponsesnumber=array();


	foreach ($liste_id_number as $question_id => $value1) {
		$request5 = $bdd->prepare("SELECT answer_text FROM  answer WHERE is_valid_answer=1 AND answer_question_id=?");

		$request5->execute([$question_id]);
		$results=$request5->fetch();

		if ($results[0]==$value1) {
			$listereponsesnumber[]=array('is_valid_answer'=>1,'answer_question_id'=>$question_id);
		}
		else{

			$listereponsesnumber[]=array('is_valid_answer'=>0,'answer_question_id'=>$question_id);
		}
	}


} 


?>