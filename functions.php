<?php
 
    function  generatePassword ($pwLength){

        $pwString = '';

        $charactersString='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#!$%&/()=?*[]{}.,;:';
        
        $charactersArray=str_split($charactersString);


        for($index=0;$index<$pwLength;$index++){

            $randomNumber = random_int(0,count($charactersArray)-1);

            $pwString .= $charactersArray[$randomNumber];

        };

        return $pwString;
        
    };

?>