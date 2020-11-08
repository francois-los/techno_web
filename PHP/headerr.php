<!DOCTYPE html>
<html>
<head>
    <link href="../CSS/cssProjetSite.css" rel="stylesheet" />
    <meta charset="utf-8">
</head>
<body>
    <header class="bkheader">

            <nav class="navigation1">
                <ul class="navigationListe">
                	<?php
                		if (empty($_SESSION['username'])) { ?>
                			<br />
                			Please connect to access quizzes
                		<?php } else { ?>
                			<li><a href="../PHP/quiz1.php" title="Go to Quiz 1" >Quizz 1</a></li>
                    		<li><a href="../PHP/quiz2.php" title="Go to Quiz 2">Quizz 2</a></li>
                    	<?php } ?>
                </ul>
            </nav>
            
            <nav class="navigation2">
                <ul class="navigationListe">
                    <li><a href="home.php" title="Go to home">Home</a></li>
                </ul>
            </nav>
            <?php
            	if (empty($_SESSION['username'])) { ?>
		            <form method="post" class="loginForm" action="home.php">
		                <label for="identifiant"> Username :	</label>
		                <input type="text" name="username" id="UsernameId" required/>
		                <br />
		                <label for="password"> Password : </label>
		                <input type="password" name="password" id="passwordId" required/>
		                <br />
		                <button type="submit" name='login_user'>Validate</button>
		                <input type="button" value="Create account" onclick=self.location.href="../PHP/createAccount.php">
		            </form>
		       	<?php } else { ?>
		       		<a href="home.php?logout=1" class = "logout">Logout</a>
		       	<?php } ?>
		       	<?php if (isset($error1)){?>
                    <span class = error1> Wrong username or password </span>
                <?php } ?>
        
    </header>
</body>
</html>