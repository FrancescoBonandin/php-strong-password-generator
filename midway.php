<?php

    require __DIR__.'./functions.php';

    session_start();

    $_SESSION['get']=$_GET;

    $passwordLength = $_GET['length'];

    $noQueryParam=false ;

    if(isset($_GET ['length'])){

        if($passwordLength <= 0 || (
            !isset($_GET['numbers']) &
            !isset($_GET['lowercase']) &
            !isset($_GET['uppercase'])&
            !isset($_GET['symbols']))){
    
            $noQueryParam=true;
    
            $_SESSION['noparam']=$noQueryParam ;

            $_SESSION['noparamtext']='<em>None of the options, has been selected.
            Please, chose at least 1 option </em>';
            
            header('Location: ./index.php');
        }
    
        else{
        
            // $returnedPassword=generatePassword($passwordLength);
            $returnedPassword=generatePassword($_GET);
        
            $_SESSION['password'] = $returnedPassword;
        
            header('Location: ./landing.php');
    
        }

    }

    else{

        $_SESSION['noparamtext']='<em> please, write a valid value for password length </em>';

    }

?>