<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Connexion utilisateur </title>
    <link href = "./user_login_session/view/css/style.css" rel = "stylesheet" type = "text / css" />
    <script src="../Bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../Bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="vendor/Login%20Script.css" >





</head>
<body>

<div id="entente" class="bg-success">
    <img id="image1" src="../logo@2x.png"/>

</div>
<div>
    <form action="Login.php" method="post" id="frmLogin" onSubmit="return validate();">
        <div class="demo-table">

            <div class="form-head">Login</div>
            <?php
            if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php
                unset($_SESSION["errorMessage"]);
            }
            ?>
            <div class="field-column">
                <div>
                    <label for="username">Username</label><span id="user_info" class="error-info"></span>
                </div>
                <div>
                    <input name="user_name" id="user_name" type="text"
                           class="demo-input-box">
                </div>
            </div>
            <div class="field-column">
                <div>
                    <label for="password">Password</label><span id="password_info" class="error-info"></span>
                </div>
                <div>
                    <input name="password" id="password" type="password"
                           class="demo-input-box">
                </div>
            </div>
            <div class=field-column>
                <div>
                    <input type="submit" name="login" value="Login"
                           class="btnLogin"></span>
                </div>
            </div>
        </div>
    </form>
</div>


</body>


<script>
    function Loginsucces() {

    }

    function validate() {
        var $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";

        var userName = document.getElementById("user_name").value;
        var password = document.getElementById("password").value;
        if(userName === "")
        {
            document.getElementById("user_info").innerHTML = "required";
            $valid = false;
        }
        if(password === "")
        {
            document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
</script>

</html>
