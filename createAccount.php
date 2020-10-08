<!DOCTYPE html>
<html lang="FR">
<?php include('headerr.html')?>
<head>
    <title>Create your account</title>
    <link href="cssProjetSite.css" rel="stylesheet" />
    <meta charset="utf-8">
</head>
<body>

    <form id="signup-form" action="/" method="post">
        <h2>Create your account</h2>

        <div id="container-form">

            <div class="form-input">
                <label>
                    <input id="input_id" type="text" name="input_id" placeholder="Username" pattern="[A-Za-z0-9\-]+" title="Please enter letters or numbers only" autocomplete="off" required>
                </label>
            </div>
            <div class="form-input">
                <label>
                    <input id="input_mdp" type="password" name="input_mdp" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Please enter a password containing at least one uppercase, lowercase, number and at least 8 characters" autocomplete="off" required>
                </label>
            </div>
            <div class="form-input">
                <label>
                    <input id="input_nom" type="text" name="input_nom" placeholder="Name" pattern="[A-Za-z\- ]+" title="Please enter letters only" autocomplete="off" required>
                </label>
            </div>
            <div class="form-input">
                <label>
                    <input id="input_prenom" type="text" name="input_prenom" placeholder="Surname" pattern="[A-Za-z\- ]+" title="Please enter letters only" autocomplete="off" required>
                </label>
            </div>
            <div class="form-input">
                <label>
                    <input id="email" type="text" name="email" placeholder="Email" onchange="checkEmail()" autocomplete="off" required>
                </label>
                <span id="check-email"></span>
            </div>
            <div class="form-input">
                <input type="submit" name="" value="Envoyer">
            </div>
            
            <div class="form-input">
                <input type="button" name="" value="Se connecter" onclick="/">
            </div>
        </div>
    </form>
    <?php include('footer.html')?>
</body>
</html>
           
