<?php

	session_start();

	include ('data.php');
	include('headerr.php');

	//Database variable connexion is set in the 1st line of data.php

?>


<html>
<head>
	<link href="../CSS/cssProjetSite.css" rel="stylesheet" />
	<meta charset="utf-8">
	<title>Quizz site</title>
</head>


<?php

	//check_user TODO with !empty
	if (!empty($_SESSION['username'])){
		$userconnected = true;
	}
	else{
		$userconnected = false;
	}

?>


<?php

	//TODO (in the next step) control user access
	if (isset ($_GET['direction'])) {

		$direction = $_GET['direction'];

		if (file_exists($direction.'.php')) {

			if ($direction == 'quiz' OR $direction == 'reponsequizz'){
				if ($userconnected) {
					include ($direction.'.php');
				}
				else{

					include("home.php");

				}
			}
			else {
				include ($direction.'.php');
			}

    	}
    	else {

    		include('home.php');
    	}
    	
	}
	else {

		include("home.php");

	}


?>

<?php

	include('../HTML/footer.html');

?>

</html>