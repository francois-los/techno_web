<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=quizzsite','root','');

//CREATE AN ACCOUNT

if (isset($_POST['signup_user'])) {
	$username = $_POST['input_username'];
	$name = $_POST['input_nom'];
	$firstname = $_POST['input_prenom'];
	$adress = $_POST['input_adresse'];
	$number = $_POST['input_numero'];
	$birthdate = $_POST['input_date_naissance'];
	$password = md5($_POST['input_mdp']);

	$request = $bdd->query("INSERT INTO user (username, user_last_name, user_first_name, user_adress, user_phone, user_birthdate, user_password, score_quizz1, score_quizz2) VALUES ('$username', '$name', '$firstname', '$adress', '$number', '$birthdate', '$password', 0, 0)");
	$_SESSION['username'] = $username;
	header('Location: index.php');
}

//LOGIN A USER

if (isset($_POST['login_user'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$request = $bdd->query("SELECT username FROM user WHERE username = '$username' AND user_password = '$password'");
	if ($request->rowCount() == 1){
		$_SESSION['username'] = $username;
  	  	header('Location: index.php');
	}
	else{
		$error1 = "Wrong username or password";
	}
}

//VALIDATION QUIZZ 1 

if (isset($_POST['validerQuizz1'])) {
	$score = 0;
	$username = $_SESSION['username'];
	$q1bool = false; $q2bool = false; $q3bool = false; $q4bool = false; $q5bool = false; $q6bool = false; $q7bool = false; $q8bool = false;
	if (isset($_POST['q1answer'])){
		$q1answer = $_POST['q1answer'];
	}
	else {
		$q1answer = "";
	}
	if (isset($_POST['q2answer1'])){
		$q2answer1 = $_POST['q2answer1'];
	}
	else {
		$q2answer1 = "";
	}
	if (isset($_POST['q2answer2'])){
		$q2answer2 = $_POST['q2answer2'];
	}
	else {
		$q2answer2 = "";
	}
	if (isset($_POST['q2answer3'])){
		$q2answer3 = $_POST['q2answer3'];
	}
	else {
		$q2answer3 = "";
	}
	$q2answer = $q2answer1.$q2answer2.$q2answer3;
	$q2answerfaux = $q2answer1." ".$q2answer2." ".$q2answer3;
	if (isset($_POST['q3answer'])){
		$q3answer = $_POST['q3answer'];
	}
	else {
		$q3answer = "";
	}
	if (isset($_POST['q4answer'])){
		$q4answer = $_POST['q4answer'];
	}
	else {
		$q4answer = "";
	}
	if (isset($_POST['q5answer'])){
		$q5answer = $_POST['q5answer'];
	}
	else {
		$q5answer = "";
	}
	if (isset($_POST['q6answer1'])){
		$q6answer1 = $_POST['q6answer1'];
	}
	else {
		$q6answer1 = "";
	}
	if (isset($_POST['q6answer2'])){
		$q6answer2 = $_POST['q6answer2'];
	}
	else {
		$q6answer2 = "";
	}
	if (isset($_POST['q6answer3'])){
		$q6answer3 = $_POST['q6answer3'];
	}
	else { 
		$q6answer3 = "";
	}
	$q6answer = $q6answer1.$q6answer2.$q6answer3;
	$q6answerfaux = $q6answer1." ".$q6answer2." ".$q6answer3;
	if (isset($_POST['q7answer'])){
		$q7answer = $_POST['q7answer'];
	}
	else {
		$q7answer = "";
	}
	if (isset($_POST['q8answer'])){
		$q8answer = $_POST['q8answer'];
	}
	else {
		$q8answer = "";
	}
	$request = $bdd->query("SELECT answer_text FROM answer LIMIT 8");
	$results=$request->fetch();
	if ($q1answer == $results['answer_text']){
		$q1bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q2answer == $results['answer_text']){
		$q2bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q3answer == $results['answer_text']){
		$q3bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q4answer == $results['answer_text']){
		$q4bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q5answer == $results['answer_text']){
		$q5bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q6answer == $results['answer_text']){
		$q6bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q7answer == $results['answer_text']){
		$q7bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q8answer == $results['answer_text']){
		$q8bool = true;
		$score = $score + 1;
	}
	$request2 = "UPDATE user SET score_quizz1=? WHERE username=?";
	$stmt= $bdd->prepare($request2);
	$stmt->execute([$score, $username]);
}

//VALIDATION QUIZZ 2

if (isset($_POST['validerQuizz2'])) {
	$score = 0;
	$username = $_SESSION['username'];
	$q1bool = false; $q2bool = false; $q3bool = false; $q4bool = false; $q5bool = false; $q6bool = false; $q7bool = false; $q8bool = false;
	if (isset($_POST['q1answer'])){
		$q1answer = $_POST['q1answer'];
	}
	else {
		$q1answer = "";
	}
	if (isset($_POST['q2answer1'])){
		$q2answer1 = $_POST['q2answer1'];
	}
	else {
		$q2answer1 = "";
	}
	if (isset($_POST['q2answer2'])){
		$q2answer2 = $_POST['q2answer2'];
	}
	else {
		$q2answer2 = "";
	}
	if (isset($_POST['q2answer3'])){
		$q2answer3 = $_POST['q2answer3'];
	}
	else {
		$q2answer3 = "";
	}
	$q2answer = $q2answer1.$q2answer2.$q2answer3;
	$q2answerfaux = $q2answer1." ".$q2answer2." ".$q2answer3;
	if (isset($_POST['q3answer'])){
		$q3answer = $_POST['q3answer'];
	}
	else {
		$q3answer = "";
	}
	if (isset($_POST['q4answer'])){
		$q4answer = $_POST['q4answer'];
	}
	else {
		$q4answer = "";
	}
	if (isset($_POST['q5answer'])){
		$q5answer = $_POST['q5answer'];
	}
	else {
		$q5answer = "";
	}
	if (isset($_POST['q6answer1'])){
		$q6answer1 = $_POST['q6answer1'];
	}
	else {
		$q6answer1 = "";
	}
	if (isset($_POST['q6answer2'])){
		$q6answer2 = $_POST['q6answer2'];
	}
	else {
		$q6answer2 = "";
	}
	if (isset($_POST['q6answer3'])){
		$q6answer3 = $_POST['q6answer3'];
	}
	else { 
		$q6answer3 = "";
	}
	$q6answer = $q6answer1.$q6answer2.$q6answer3;
	$q6answerfaux = $q6answer1." ".$q6answer2." ".$q6answer3;
	if (isset($_POST['q7answer'])){
		$q7answer = $_POST['q7answer'];
	}
	else {
		$q7answer = "";
	}
	if (isset($_POST['q8answer'])){
		$q8answer = $_POST['q8answer'];
	}
	else {
		$q8answer = "";
	}
	$request = $bdd->query("SELECT answer_text FROM answer LIMIT 8,8");
	$results=$request->fetch();
	if ($q1answer == $results['answer_text']){
		$q1bool = true;
	}
	$results=$request->fetch();
	if ($q2answer == $results['answer_text']){
		$q2bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q3answer == $results['answer_text']){
		$q3bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q4answer == $results['answer_text']){
		$q4bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q5answer == $results['answer_text']){
		$q5bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q6answer == $results['answer_text']){
		$q6bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q7answer == $results['answer_text']){
		$q7bool = true;
		$score = $score + 1;
	}
	$results=$request->fetch();
	if ($q8answer == $results['answer_text']){
		$q8bool = true;
		$score = $score + 1;
	}
	$request2 = "UPDATE user SET score_quizz2=? WHERE username=?";
	$stmt= $bdd->prepare($request2);
	$stmt->execute([$score, $username]);
}

?>


