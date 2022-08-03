<?php
    // $fruits = array("apple","orange","banana");  
    // echo $fruits[0];  

    // $color = [
    // 1 => 'red',
    // 2 => 'blue',
    // 3 => 'green'
    // ];
    // echo $color[1];

//Array Functions
        $fruits = ['apple','banana','carrot'];

        //get length
        // echo count($fruits);

        //search array
        // var_dump('carrot',$fruits);

        //to add elements to the list
        $fruits[] = 'grape';

        //adds at the end of the array
        // array_push($fruits,'maize','potato');

        // //adds elements to the beginning of the array
        // array_unshift($fruits,'wheat');

        // //removing from a array

        // //removes the last element
        // array_pop($fruits);

        // //removes the first element 
        // array_shift($fruits);

        // // to remove a particular element
        // unset($fruits[2]);

        //split into two arrays

        // $chunk_array = array_chunk($fruits,2);

        $arr1 = [1,2,3];
        $arr2 = [4,5,6];

        $arr3 = array_merge($arr1,$arr2);


        print_r($arr3);

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