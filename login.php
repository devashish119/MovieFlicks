<?php

require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Account.php");
require_once("includes/classes/Constants.php");

    $account = new Account($con);

    if(isset($_POST["submitbutton"])){
        
        $username= FormSanitizer::sanitiseformUsername($_POST["username"]);
        
        $password= FormSanitizer::sanitiseformPassword($_POST["password"]);
         
        
       $success = $account->login($username, $password);

        if($success) {
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php");
        }

    }

function getInputValue($name) {
    if(isset($_POST[$name])) {
        echo $_POST[$name];
    }
}



?>



<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Moviesflicks</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css"/>
    </head>
    <body>
        <div class="signInContainer">
        
            <div class="column">

                <div class="header">
                <img src="assets/images/MovieflicksLOGO.png" title="Logo" alt="Site logo">

                <h3>Sign In</h3>
                <span>to continue to movieflicks</span>
                </div>

                <form method="POST">

                    <?php echo $account->getError(Constants::$loginFailed);  ?>
                    <input type="text" name="username" placeholder="Username" value="<?php  getInputValue("username"); ?>" required>

                
                    <input type="password" name="password" placeholder="Password" required>


                    <input type="submit" name="submitbutton" value="SUBMIT">

                </form>

                <a href="register.php" class="signInMessage"> need an account? Sign Up here</a>

            </div>
        
        </div>


    </body>
</html>