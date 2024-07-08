<?php



#Q_1
// for($x=1;$x<11;$x++){

// echo "$x";
// }

    
    // echo "------------------------------------------------------------------- "."<br>";



    #Q_2

    // $sum=0;

    // for($x=1; $x<=30; $x++){

    //     $sum += $x;
        
    // }
    // echo "$x";
    

    // echo "------------------------------------------------------------------- "."<br>";


        #Q_3

    // $arra = array('A', 'B', 'C', 'D', 'E');
    
    // for ($i = 0; $i < 5; $i++) {
    //     for ($j = 0; $j < 5; $j++) {
    //         if ($j < 5 - $i - 1) {
    //             echo 'A ';
    //         } else {
    //             echo $arra[$i] . ' ';
    //         }
    //     }
    //     echo "\n";
    // }
  

    // echo "------------------------------------------------------------------- "."<br>";

        #Q_4
    // $arra = array('1', '2', '3', '4', '5');
    
    // for ($i = 0; $i < 5; $i++) {
    //     for ($j = 0; $j < 5; $j++) {
    //         if ($j < 5 - $i - 1) {
    //             echo '1 ';
    //         } else {
    //             echo $arra[$i] . ' ';
    //         }
    //     }
    //     echo "\n";
    // }

    
    // echo "------------------------------------------------------------------- "."<br>";


        #Q_5

//     for ($i = 0; $i < 5; $i++) {
//         for ($j = 0; $j < 5; $j++) {

// if($i==$j){

// echo ($i+1).' ';

// }else {
//     echo '0';
// }
// echo "\n";

//         }}


    // echo "------------------------------------------------------------------- "."<br>";

    #Q_6

// $n = 5;
// $x = 1;

// // Loop to calculate the factorial of n
// for($i = 1; $i <= $n - 1; $i++)
// {
//     // Calculate factorial iteratively
//     $x *= ($i + 1); 
// }

// // Print the factorial of n
// echo "The factorial of  $n = $x"."\n";

    // echo "------------------------------------------------------------------- "."<br>";

    #Q_7

//     $n=10; 
//     $a=0;
//     $b=1;
    
//     echo "0, ";
//     echo "$b, ";

//     for($i =2; $i<$n; $i++){

// $c=$a+$b;
// echo "$c";
// if($i <$n -1){
//     echo ", ";
// }

// $a=$b;
// $b=$c;
 
//     }

//     echo "...";

    // echo "------------------------------------------------------------------- "."<br>";

    #Q_8
    // $text = "Orange coding academy";
    // $charToCount = 'c';
    // $count = 0;
    // for ($i = 0; $i < strlen($text); $i++) {
    //     if ($text[$i] === $charToCount) {
    //         $count++;
    //     }
    // }
    // echo "  '$text': $count\n";
    

    #Q_9





    #Q_10

// for ($i = 1; $i <= 10; $i++) {
//     if ($i % 3 == 0 && $i % 5 == 0) {
//         echo "FizzBuzz ";
//     } 
//     else if ($i % 3 == 0) {
//         echo "Fizz ";
//     }
//     else if ($i % 5 == 0) {
//         echo "Buzz ";
//     }
//     else {
//         echo $i . " ";
//     }
// }



#Q_ 11

// $n = 5; 

// $num = 1; 
// for ($i = 1; $i <= $n; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo $num . " ";
//         $num++;
//     }
//     echo "<br>";
// }

#Q_ 12

// $rows = 10;
// for ($i = 2; $i <= $rows; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "A ";
//     }
//     echo "<br>";
// }

#Q_ 13

// function check_prime($num)
// {
//    if ($num < 2) {
//       return 0; 
//    }
//    if ($num == 2) {
//       return 1; 
//    }
//    for ($i = 2; $i <= sqrt($num); $i++)
//    {
//       if ($num % $i == 0) {
//          return 0; 
//       }
//    }
//    return 1; 
// }

// $num = 3;
// $flag_val = check_prime($num);
// if ($flag_val == 1) {
//     echo "It is a prime number:"."$num";
// } else {
//     echo "It is a non-prime number";
// }

#Q_ 14

// function reverse_string($str) {
//     return strrev($str);
// }

// $original_string = "remove";
// $reversed_string = reverse_string($original_string);

// echo   $original_string . "\n"."<br>";
// echo   $reversed_string . "\n";


#Q_15


// function lower ($inp){

//     return ctype_lower($inp);
// }

// $input="remove";

// if(lower ($input))
// {

//     echo "your string is ok:"." $input";
// }else{

//     echo  "your string is not ok: $input";

// }

#Q_16

// $a=12;
// $b=10;

// echo "\$a=$a","\n"."\$b=$b"."<br>";
// $c=$a;
// $a=$b;
// $b=$c;
// echo "\$a=$a","\n"."\$b=$b"."<br>";

#Q_17
function swap(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}
$x = 12;
$y = 10;
echo "$x = $x, \$y = $y" . "<br>";
swap($x, $y);
echo " \$x = $x, \$y = $y" . "<br>";








?>