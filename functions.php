<?php
 
    // function  generatePassword ($pwLength){
    function  generatePassword ($queryKeys){

        $pwString = '';

        $repeat=$queryKeys['repeat'] ==='true'? true : false;

        $numbersArray=str_split('0123456789'); 

        $lowercaseArray= str_split('abcdefghijklmnopqrstuvwxyz');

        $uppercaseArray= str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');

        $symbolsArray= str_split('@#!$%&/()=?*[]{}.,;:');

        // $charactersString='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#!$%&/()=?*[]{}.,;:';
        
        // $charactersArray=str_split($charactersString);

        $charactersArray=[];

        foreach ($queryKeys as $key => $value) {

            if(isset($key)&& $value == 'on'){
                
                if($key=='numbers'){
                    array_push($charactersArray,...$numbersArray);
                }

                elseif($key=='lowercase'){
                    array_push($charactersArray,...$lowercaseArray);
                }

                elseif($key=='uppercase'){
                    array_push($charactersArray,...$uppercaseArray);
                }

                elseif($key=='symbols'){
                    array_push($charactersArray,...$symbolsArray);
                }
            }
        }



        if(count($charactersArray) > 0 ){

            // for($index=0; $index < $pwLength; $index++){

                $index=0;

                while( $index < $queryKeys['length']){
    
                    
                    $randomNumber = random_int(0,count($charactersArray)-1);
                  
                    if($repeat){
                    
                        $pwString .= $charactersArray[$randomNumber];

                        $index++;
                    }

                    else{

                        if(!str_contains($pwString, $charactersArray[$randomNumber])){

                            $pwString .= $charactersArray[$randomNumber];

                            $index++;
                        }

                    }
    
                };


        }

        else{
            $pwString = '<em>None of the options, has been selected please chose an option next time</em>';
        }

        return $pwString;
        
    };

?>