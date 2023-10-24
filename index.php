<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Registrazione</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
<body>
<div class= "container">
    <div class="login-title" > 
        Form di Registrazione
    </div><br>
        <form class="login-container" action="registration.php" method="post">
        <div class="login-input" >
            <label for="firstname">Firstname:</label><br>
            <input type="text" id="firstname" name="firstname" required><br>
            <label for="lastname">Lastname:</label><br>
            <input type="text" id="lastname" name="lastname" required><br>
            <label for="email"> Email: </label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="pass">Password:</label><br>
            <input type="password" id="pass"  name="pass" required><br>
            <label for="pass">Confirm password:</label><br>
            <input type="password" id="confirm"  name="confirm" required><br>
        </div>
            <div class="login-button">
            <input type="submit" value="Crea Account"><br>
            </div>
        </form>
    </div>

</div>


<div class= "container">
    <div class="login-title" > 
       Pagina di Login
    </div><br>
<form class="login-container" action="login.php" method="post">
        <div class="login-input" >
            <label for="email"> Email: </label><br>
            <input type="email" id="email-login" name="email" required><br>
            <label for="pass">Password:</label><br>
            <input type="password" id="pass-login"  name="pass" required><br>

        </div>
            <div class="login-button">
            <input type="submit" value="Effettua Login"><br>
            </div>
        </form>
    </div>
</div>

</body>
</html>