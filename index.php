<?php
//     // $fruits = array("apple","orange","banana");  
//     // echo $fruits[0];  

//     // $color = [
//     // 1 => 'red',
//     // 2 => 'blue',
//     // 3 => 'green'
//     // ];
//     // echo $color[1];

// //Array Functions
//         $fruits = ['apple','banana','carrot'];

//         //get length
//         // echo count($fruits);

//         //search array
//         // var_dump('carrot',$fruits);

//         //to add elements to the list
//         $fruits[] = 'grape';

//         //adds at the end of the array
//         // array_push($fruits,'maize','potato');

//         // //adds elements to the beginning of the array
//         // array_unshift($fruits,'wheat');

//         // //removing from a array

//         // //removes the last element
//         // array_pop($fruits);

//         // //removes the first element 
//         // array_shift($fruits);

//         // // to remove a particular element
//         // unset($fruits[2]);

//         //split into two arrays

//         // $chunk_array = array_chunk($fruits,2);

//         // $arr1 = [1,2,3];
//         // $arr2 = [4,5,6];

//         // $arr3 = array_merge($arr1,$arr2);
//         // $arr4 = [...$arr1,...$arr2];

//         // print_r($arr3);
//         // print_r($arr4);

//         // $a = ['green','red','yellow'];
//         // $b = ['apple','chilly','banana'];

//         // $c = array_combine($a,$b);

//         // $keys = array_keys($c);

//         // $flipped = array_flip($c);

//         // print_r($keys);
//         // print_r($c);
//         // print_r($flipped);

//         $numbers = range(1,20);

//         // print_r($numbers);

//         $newNumbers = array_map(function($number){
//             return "Number ${number}";
//         },$numbers);

//         // print_r($numbers);

//         $less_than_10 = array_filter($numbers,fn($number)=>$number <= 10);

//         // print_r($less_than_10);

//         $sum = array_reduce($numbers, fn($carry, $number)=>$carry + $number);

//         print_r($sum);


////////String////////Functions/////////////

// $string2 = '<h1>Nameste Nepal</h1>';

// echo htmlspecialchars($string2);


//%s for strings
// printf('%s likes to %s','Brad','code');

// //%d for int
// printf('1+1= %d',1+1);

// //%f for float
// printf('1+1= %f',1+1);
 

//$_GET and $_POST -contains information about a variable passed through url or form

//$_COOKIE - contains information about variables passed through cookie

//$_SESSION - contains information about variables passed through a session

//$_SERVER - contains information about the server environment

//$_ENV - contains information about the environment variables

//$_FILES -contains information about the files uploaded to the script

//$_REQUEST - contains information about variables passed through the form or url

// var_dump($_SERVER);


//SETTING up a COOKIE

// setcookie('name','prabin',time() + 86400);
// setcookie('age','18',time()+86400);

// if(isset($_COOKIE['name']) && isset($_COOKIE['age'])){
//     echo $_COOKIE['name'];
//     echo $_COOKIE['age'];
// }

//SESSION 




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
</body>
</html>