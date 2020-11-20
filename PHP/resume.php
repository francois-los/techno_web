<?php
if (isset($_GET['id'])){
    $quizzid= $_GET['id'];
} else {
    include 'home.php';
    die;
}
$_SESSION['quizzid'] = $quizzid;
?>

<?php include('headerr.php')?>
<?php include('../HTML/footer.html')?>
<?php include('data.php'); ?>

<html>
<head>
	<link href="../CSS/cssProjetSite.css" rel="stylesheet" />
	<meta charset="utf-8">
	<title>Quizz site</title>
</head>

<body>
	<h2> Quizz numéro <?php echo $quizzid ?> </h2>

		<?php

	    $quizzId=$_GET["id"];
	    $quizz = BDD::get()->query('SELECT quizz_name FROM quizz;')->fetchAll();

	    echo('Quizz numéro '); <?php echo $quizzid ?>
	    
  		?>

</body>

</html>