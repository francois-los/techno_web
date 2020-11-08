<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Quizz</title>
    <link href="../CSS/cssProjetSite.css" rel="stylesheet" />
</head>
<body>

<?php

    error_reporting(E_ALL);
    include('data.php');
    include('headerr.php');
    include('../HTML/footer.html');
    // include('');  page des fonctions, si créée

    if(isset($_GET['p']))
    {
        $page = $_GET['p'];
        switch ($page) 
    {
        case "quizz":
            include('quiz1.php'); // regroupement des 2 quizz
            break;
        case "reponse":
            include('reponsequizz1.php'); // regrouprement des 2 réponses
            break;
        case "create":
            include('createAccount.php'); 
            break; 
        case "home":
            include('home.php'); 
            break; 
        default:
            echo"La page n'a pas été trouvée";
        	break;
        
    }
    }
    else
    {	$page = '';
        include("home.php");
       	
    }

    
?>

</body>
</html>
