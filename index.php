<?php

//Esercizio
//Ripetere l’esercizio del controllo password (da soli per i piu’ avanzati, rivedendo il video per chi e’ meno confident )


//Deve avere almeno una lunghezza di 8 caratteri
//Deve contenere almeno un numero
//Deve contenere almeno una maiuscola
//Deve contenere almeno un carattere speciale



//Deve avere almeno una lunghezza di 8 caratteri

// $password = readline("Inserire la password...");

// $arrPassword = str_split($password); //Trasformazione in array



// //Deve avere almeno una lunghezza di 8 caratteri

// $checkLength = false;

// if(strlen($password) > 8){
//     $checkLength = true;
// }


// var_dump($checkLength);


// //Deve contenere almeno un numero


// $checkNumber = false;

// foreach ($arrPassword as $number => $number) {
//     if(is_numeric($number)){
//         $checkNumber = true;
//     }
// }


// var_dump($checkNumber);



// //Deve contenere almeno una maiuscola


// $checkMaiuscola = false;

// foreach ($arrPassword as $upperCase) {
//     if(ctype_upper($upperCase)){
//         $checkMaiuscola = true;
//     }
// }



// var_dump($checkMaiuscola);



// //Deve contenere almeno un carattere speciale

// $specialChars = [',' , '!', '@',  '#', '$', '%',
// '^', '&', '*', '(',  ')', '_', '+',
// '-', '=', '[', ']',  '{', '}', ';',
// "'", ':', '"', '\\', '|', ',', '.',
// '<', '>', '/', '?',  '~', ']', '/'];

// $checkSpeciale = false;

// foreach ($specialChars as $specialChar) {
//     if(str_contains($password, $specialChar)){
//         $checkSpeciale = true;
//     }
// }


// var_dump($checkSpeciale);



// while(true){
//     $password = readline("Inserire la password...");
//         if(strlen($password > 8)){
//             if(preg_match('@[a-z]@', $password)){
//                 if(preg_match('@[A-Z]@', $password)){
//                     if(preg_match('@[0-9]@', $password)){
//                         if(preg_match('@[^\w]@', $password)){
//                             echo "Password accettata!";
//                             break;
//                         }else{
//                             echo "Manca un carattere speciale. Re-inserisci la password.";
//                         }
//                     }else{
//                         echo "Manca un carattere numerico. Re-inserisci la password.";
//                     }
//                 }else{
//                     echo "Manca una lettera maiuscola. Re-inserisci la password.";
//                 }
//             }else{
//                 echo "Manca una lettera minuscola. Re-inserisci la password.";
//             }
//         }
// };

// var_dump($password);
?>
