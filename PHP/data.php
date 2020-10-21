$bdd = new PDO('mysql:host=localhost;dbname=quizzsite','root','');
$response = $bdd->query("SELECT * from 'recipe'");
while ($result=$response->fetch()){

	var_dump($results);
	
}