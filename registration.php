<!DOCTYPE html>
<html lang="en">
<head>
   
    <title> Registrazione </title>

    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>

<?php


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $firstname = $_POST["firstname"];
        $valid_firstname = htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8');
        $lastname = $_POST["lastname"];
        $valid_lastname = htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8');
        $confirm = $_POST["confirm"];
        $error_messages = [];
    
        if(strlen($password)>=4) {
           
        }
        else
        {
        $error_messages[] = "Password inserita non valida, deve essere di almeno 4 caratteri. \n";
        }

        // Esegui controlli sui dati
        if (preg_match('/^[a-zA-Z0-9_-]+$/', $firstname)) {
            
        } else
         {
        $error_messages[] = "Il nome non può contenere caratteri speciali.\n";
        }

        if (preg_match('/^[a-zA-Z0-9_-]+$/', $lastname)) {
            
        } else
         {
        $error_messages[] = "Il cognome non può contenere caratteri speciali.\n";
        }

        if (empty($email)) {
        $error_messages[] = "Il campo Email è obbligatorio.\n";
        }
       
        if (empty($password)) {
        $error_messages[] = "Il campo Password è obbligatorio.\n";
        }

        if (empty($firstname)) {
        $error_messages[] = "Il campo Firstname è obbligatorio.\n";
        }

        if (empty($lastname)) {
        $error_messages[] = "Il campo Lastname è obbligatorio. \n";
        }

        if (empty($confirm)) {
        $error_messages[] = "Il campo Confirm Password è obbligatorio. \n";
        }
    //controllo che la conferma della password sia giusta
        if ($confirm!=$password)
        {
        $error_messages[] = "Le password non sono coincidenti. \n";
        }

        $hash = password_hash($password, PASSWORD_BCRYPT);


        // Se ci sono errori, mostra i messaggi di errore
        if (!empty($error_messages)) {
            foreach ($error_messages as $error) {
                echo '<p style="color: red;">' . $error . '</p>';
                echo "<a href='index.php'> Torna alla registrazione</a>";
            }
        } else {
            
            $user = [
                "firstname"=> $firstname,
                "lastname"=> $lastname,
                "email"=> $email,
                "password"=> $hash,
                ] ;
    
// Codifica i dati come JSON
$jsonData = json_encode($user);

// Specifica il percorso del file in cui salvare i dati JSON
$filePath = 'user.txt';

// Apre il file in modalità scrittura
$file = fopen($filePath, 'a');

// Verifica se l'apertura del file è avvenuta con successo
if (!$file) {
exit ("Impossibile aprire il file per la scrittura.");
   
} else {
    echo 'File aperto correttamente';
        
                fwrite($file, $jsonData."\n");
                fclose($file);
                echo "Registrazione completata con successo!";
                echo "<a href='login.php'> Vai al Login </a>";
            
        }
}
    
    }
?>

</body>
</html>

