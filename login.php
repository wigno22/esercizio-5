<!DOCTYPE html>
<html lang="en">
<head>
   
    <title> Login </title>

    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>


<body>

<?php


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $password = $_POST["pass"];

        $fileObj = new SplFileObject('user.txt');
        while (!$fileObj->eof())
        {
            $jsonData = json_decode( $fileObj->fgets());
            if($jsonData-> $email == $email)
            {
                echo "Email corretta!";
            }
            else 
            {
                echo "Password errata!";
            }
        }



        if (password_verify($password, $hash)) {
            echo "Password corretta!";
         } else {
            echo "Password errata!";
         }
    }   





 ?>
</body>

</html>

