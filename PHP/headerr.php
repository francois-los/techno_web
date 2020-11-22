<body>

    <header class="bkheader">

            <nav class="navigation1">
                <ul class="navigationListe">
                	<?php
                		if (empty($_SESSION['username'])) { ?>
                			<br />
                			Please connect to access quizzes
                		<?php } else { ?>
                            <?php foreach ($quizzidarray as $quizzKey => $quizzValue) {?>
                			<li><a href="../PHP/index.php?direction=quiz&id=<?php echo $quizzValue ?>" title="Go to Quiz <?php echo $quizzValue ?>">Quizz <?php echo $quizzValue ?></a></li>
                    		<?php }?>
                    	<?php } ?>
                </ul>
            </nav>
            
            <nav class="navigation2">
                <ul class="navigationListe">
                    <li><a href="index.php?direction=home" title="Go to home">Home</a></li>
                    <li><a href="index.php?direction=resume" title="Go to history">History</a></li>
                </ul>
            </nav>
            <?php
            	if (empty($_SESSION['username'])) { ?>
		            <form method="post" class="loginForm" action="index.php?direction=home">
		                <label for="identifiant"> Username :	</label>
		                <input type="text" name="username" id="UsernameId" required/>
		                <br />
		                <label for="password"> Password : </label>
		                <input type="password" name="password" id="passwordId" required/>
		                <br />
		                <button type="submit" name='login_user'>Validate</button>
		                <input type="button" value="Create account" onclick=self.location.href="index.php?direction=createAccount">
		            </form>
		       	<?php } else { ?>
		       		<a href="index.php?direction=home&logout=1" class = "logout">Logout</a>
		       	<?php } ?>
		       	<?php if (isset($error1)){?>
                    <span class = error1> Wrong username or password </span>
                <?php } ?>
        
    </header>
</body>