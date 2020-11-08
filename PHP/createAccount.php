<?php include('headerr.php')?>
<?php include('../HTML/footer.html')?>

<body  class="bkcreate">

    <form id="signup-form" action="index.php?direction=home" method="post">
        <h2>Create your account</h2>

        <div id="container-form">

            <div class="form-input">
                <label>
                    <input id="input_username" type="text" name="input_username" placeholder="Username" pattern="[A-Za-z0-9\-]+" title="Please enter letters and numbers only" autocomplete="off" required>
                </label>
            </div>
            <div class="form-input">
                <label>
                    <input id="input_nom" type="text" name="input_nom" placeholder="LastName" pattern="[A-Za-z\- ]+" title="Please enter letters only" autocomplete="off" required>
                </label>
            </div>
            <div class="form-input">
                <label>
                    <input id="input_prenom" type="text" name="input_prenom" placeholder="FirstName" pattern="[A-Za-z\- ]+" title="Please enter letters only" autocomplete="off" required>
                </label>
            </div>
            <div class="form-input">
                <label>
                    <input id="input_adresse" type="text" name="input_adresse" placeholder="adress"  autocomplete="off" required>
                </label>
            </div>
            <div class="form-input">
                <label>
                    <input id="input_numero" type="text" name="input_numero" placeholder="number" pattern="[0-9\-]+" title="Please enter numbers only" autocomplete="off" required>
                </label>
            </div>
            <div class="form-input">
                <label id="birthday-label"> Birthdate<br />
                    <input id="input_date_naissance" type="date" name="input_date_naissance" autocomplete="off" required>
                </label>
            </div>
            <div class="form-input">
                <label>
                    <input id="input_mdp" type="password" name="input_mdp" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Please enter a password containing at least one uppercase, lowercase, number and at least 8 characters" autocomplete="off" required>
                </label>
            </div>
            <div class="form-input">
                <input type="submit" name="signup_user" value="Validate">
            </div>
        </div>
    </form>
</body>
