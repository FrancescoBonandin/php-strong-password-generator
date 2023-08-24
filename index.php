<?php
    session_start()
 

    // function  generatePassword ($pwLength){

    //     $pwString = '';

    //     $charactersString='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#!$%&/()=?*[]{}.,;:';
        
    //     $charactersArray=str_split($charactersString);


    //     for($index=0;$index<$pwLength;$index++){

    //         $randomNumber = random_int(0,count($charactersArray)-1);

    //         $pwString .= $charactersArray[$randomNumber];

    //     };

    //     return $pwString;
        
    // };


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div class="container">


            <form action="./midway.php" method="get">
    
                
                <div>

                    <h1>
                        PHP Strong Password Generator
                    </h1>
                    
                    <?php

                        if($_SESSION['noparam']==true) {

                            echo "<div class='alert'";

                                echo '<em>None of the options, has been selected.
                                Please, chose at least 1 option </em>';
                            
                            echo "</div>";
                        }


                    ?>

                    <label for="pwd-length-input">
                        Inserisci la lunghezza della password da generare:
                    </label>
    
                    <div class="input-box">
                        
                        <input type="number" name="length" id="pwd-length-input" value='1' min='1'>
    
                    </div>
    
    
                    <div>
                        Vuoi utilizzare caratteri ripetuti?
    
                        
                        <div class="input-box">
    
                            <label for="radio-repeat-yes">yes</label>
                            <input type="radio" name="repeat" value="true" checked id="radio-repeat-yes">
    
                        </div>
                 
                        <div class="input-box">
    
                            <label for="radio-repeat-no">no</label>
                            <input type="radio" name="repeat" value="false" id="radio-repeat-no">
    
                        </div>
    
                    </div>    
    
                    <div>
                        includi nella generazione:
                    </div>
        
                    <div class="input-box">
                        <label for="checkbox-lowc-letters">Minuscole</label>
                        <input type="checkbox" id="checkbox-lowc-letters" name="lowercase">
                    </div>
    
                    <div class="input-box">
                        <label for="checkbox-uppc-letters">Maiuscole</label>
                        <input type="checkbox" id="checkbox-uppc-letters" name="uppercase">
                    </div>
    
                    <div class="input-box">
                        <label for="checkbox-numbers">Numeri</label>
                        <input type="checkbox" id="checkbox-numbers" name="numbers">
                    </div>
    
                    <div class="input-box">
                        <label for="checkbox-special-char">Caratteri Speciali</label>
                        <input type="checkbox" id="checkbox-special-char" name="symbols">
                    </div>
    
                    <button type="submit">
                        genera
                    </button>

                </div>
        
    
            </form>

        </div>


    </body>

</html>