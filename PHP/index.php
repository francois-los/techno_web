<?php

    include('data.php');
    include('headerr.php');
    include('footer.php');
    // include('');  page des fonctions, si créée

    if($_GET['direction']==NULL)
    {
        $direction = '';

    }
    else
    {
        $direction = $_GET['direction'];
    }

    switch ($direction) 
    {
        case "home":
            include('home.php');
            break;
        case "quizz":
            include('quizz.php'); // regroupement des 2 quizz
            break;
        case "reponse":
            include('reponsequizz.php'); // regrouprement des 2 réponses
            break;
        case "create":
            include('creatAccount.php'); 
            break;
            
        default:
            include('home.php');
        break;
        
    }
?>