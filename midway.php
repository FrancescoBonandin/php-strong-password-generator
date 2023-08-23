<?php

    require __DIR__.'./functions.php';

    session_start();

    $_SESSION['get']=$_GET;

    $passwordLength = $_GET['length'];

    if($passwordLength <= 0){

        echo 'qualcosa è andato storto oppure hai messo un valore non valido, riprova per favore';

    }

    else{
    
        // $returnedPassword=generatePassword($passwordLength);
        $returnedPassword=generatePassword($_GET);
    
        $_SESSION['password'] = $returnedPassword;
    
        header('Location: ./landing.php');

    }
?>