<?php
    
 

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
    </head>

    <body>

        <form action="./midway.php" method="get">

            <h2>
                PHP Strong Password Generator
            </h2>

            <div>
                
                <label for="pwd-length-input">
                    Inserisci la lunghezza della password da generare:
                </label>

                <div>
                    
                    <input type="number" name="length" id="pwd-length-input" value='1' min='1'>

                </div>

                <div>
                    Vuoi utilizzare caratteri ripetuti?

                    <div>

                        <label for="radio-repeat-yes">yes</label>
                        <input type="radio" name="repeat" value="true" checked id="radio-repeat-yes">

                    </div>
             
                    <div>

                        <label for="radio-repeat-no">no</label>
                        <input type="radio" name="repeat" value="false" id="radio-repeat-no">

                    </div>

                </div>

                <div>
                    <label for="checkbox-lowc-letters">Minuscole</label>
                    <input type="checkbox" id="checkbox-lowc-letters" name="lowercase">
                </div>

                <div>
                    <label for="checkbox-uppc-letters">Maiuscole</label>
                    <input type="checkbox" id="checkbox-uppc-letters" name="uppercase">
                </div>

                <div>
                    <label for="checkbox-numbers">Numeri</label>
                    <input type="checkbox" id="checkbox-numbers" name="numbers">
                </div>

                <div>
                    <label for="checkbox-special-char">Caratteri Speciali</label>
                    <input type="checkbox" id="checkbox-special-char" name="symbols">
                </div>

            </div>


            <button type="submit">
                genera
            </button>

        </form>


    </body>

</html>