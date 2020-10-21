$bdd = new PDO('mysql:host=localhost;dbname=quizzsite','root','');
$response = $bdd->query("SELECT * from 'question'");
while ($result=$response->fetch()){

	var_dump($results);
	
}
$response->closeCursor()

