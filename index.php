<?php

// 2 esercizio

// $people=[
//     [
//         'name'=> 'Giovanni',
//     'surname' => 'Senzatasche',
//     'gender' => 'male'
//     ],

//     ['name'=> 'Giovanna','surname' => 'Senzatesta','gender' => 'female']
// ];
// foreach($people as $person){

//     if ($person['gender']== 'female') {

//         echo'Buongiorno Sig.ra'. $person['name']."\n";

//     }else{

//         echo 'Buongiorno Sig.' . $person['name']."\n";
//     };
// };

// 3 esercizio: -Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3, stampare “PHP” al posto del numero; se multiplo di 5 deve stampare “JAVASCRIPT”; se multifplo di 3 e 5 (15) deve stampare “HACKADEMY64".


for ($i=0; $i <=100; $i++) { 
    if ($i % 3 == 0) {
        echo "PHP \n";
    }elseif ($i %5 ==0) {
        echo "javascript \n";
    }elseif ($i % 3 ==0) {
        echo "php \n";
    }else{
        echo $i."\n";
    }
};