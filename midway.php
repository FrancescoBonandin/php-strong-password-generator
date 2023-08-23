<?php

    require __DIR__.'./functions.php';

    session_start();
    
    $passwordLength = $_GET['length'];

    if($passwordLength <= 0){

        echo 'qualcosa è andato storto oppure hai messo un valore non valido, riprova per favore';

    }

    else{
    
        $returnedPassword=generatePassword($passwordLength);
    
        $_SESSION['password'] = $returnedPassword;
    
        header('Location: ./landing.php');

    }
?>