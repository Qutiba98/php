<?php



echo strtoupper("Hello!");
echo "<br>";
echo strtolower("Hello");
echo "<br>";
echo ucfirst("hello1 hello2 hello3 ");
echo "<br>";
echo ucwords("hello1 hello2 hello3 ");


echo "<br>";
echo "-------------------------------------------------------------------";
echo "<br>";


echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

// Y يمثل السنة بأربعة أرقام (مثل 2024).
// / هو الفاصل بين أجزاء التاريخ.
// m يمثل الشهر برقمين (مثل 07).
// d يمثل اليوم برقمين (مثل 05).

echo "<br>";
echo "-------------------------------------------------------------------";
echo "<br>";
echo "The time is " . date(" 'his' "). "<br>";

echo "The time is " . date(" h:i:sa ")."<br>";



// h: تمثل الساعة بصيغة 12 ساعة).
// i: تمثل الدقائق 
// s: تمثل الثواني 
// a: تمثل am أو pm بالحروف الصغيرة.

echo "-------------------------------------------------------------------" ."<br>";



$about="I am a full stack developer at orange coding academy";
$ora="orange";

if (strpos($about,$ora) !== false){

    echo $about ."<br>";
    echo $ora."<br>";
    echo "word  Found!" ."<br>";
}
else {
    echo "not Found!";
}

echo "-------------------------------------------------------------------" ."<br>";

$url = "https://www.orange.com/index.php";
$index="'index.php'";


if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo("$url "."<br>");
    echo($index."<br>");

} else {
    echo("$url is not a valid URL");
}
echo "-------------------------------------------------------------------" ."<br>";

$email="info@orange.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo ("$email"."<br>");
    $parts = explode('@', $email);
    echo $parts[0]."<br>";
} else {
    echo("$url is not a email");
}
echo "-------------------------------------------------------------------" ."<br>";

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo $data . "\n" ."<br>";
echo password_generate(20)."\n"."<br>";

echo "-------------------------------------------------------------------" ."<br>";



function replace_first_word($sentence, $new_word) {
    $words = explode(' ', $sentence);
    $words[1] = $new_word;
    $new_sentence = implode(' ', $words);
    return $new_sentence;
}
$sentence = "This is the original sentence.";
$new_word = "Here";
$new_sentence = replace_first_word($sentence, $new_word);
echo $new_sentence."<br>";



#Q9

$s1 = 'dragonball';
$s2 = 'dragonboll';
$position = strspn($s1 ^ $s2, "\0");

printf(
    'First difference at position %d: "%s" vs "%s"',
    $position, $s1[$position], $s2[$position]
);

echo "<br>";
echo "<br>";


#Q10
$s = 'Twinkle twinkle, little star.';
$a = explode(' ',$s);
echo var_dump($a);
echo "<br>";
echo "<br>";

#Q11

$c='M';
echo ++$c;
echo "<br>";
echo "<br>";

#Q12

$s = 'The brown fox';
$s2 ='quick';
$p = 4;
echo 'a. '. substr_replace( $s, $s2.' ', $p, 0);
echo '<br> b. '. strstr($s,' ',true);
echo "<br>";
echo "<br>";

#Q13

$num = 0000657022.24;
echo str_replace(0, '',$num);
echo "<br>";
echo "<br>";

#Q14
/*
$s= 'The quick brown fox jumps over the lazy dog';
$r ='fox';
echo str_replace($r,'',$s);
echo "<br>";
echo "<br>";*/

#Q15
/*
$s = 'The quick brown fox jumps----over the lazy dog---';
echo str_replace('-', '', $s);
echo '<br>'. trim($s,"-");
echo "<br>";
echo "<br>"*/

#Q16
/*
$num = '\"\1+2/3*2:2-3/4*3';
echo preg_replace("/[^0-9]/",' ',$num);
echo "<br>";
echo "<br>"*/

#Q17
/*
$s = 'The quick brown fox jumps over the lazy dog';
$w = str_word_count($stringFox4, 1);
$s2='';
for ($i=0;$i<5;$i++){
    $s2=$s2. " ". $w[$i];
};
echo $s2;
echo "<br>";
echo "<br>"*/

#Q18
/*
$num = '2,543.12';
echo str_replace(",", '', $num);
echo "<br>";
echo "<br>"*/

#Q19
/*
$c = 'a';
$a = 'a';
for ($i=1;$i<26;$i++){
    $a=$a." ". ++$c;
}
echo $a;*/

#--------------------------------------------------------------------------------------

#Q1
/*
function leapYear($year){
    if((0 == $year % 4) ){
        echo "$year : This year is  a leap year <br><br>";
    }else {
        echo "$year : This year is not a leap year <br><br>";
    } 
}
leapYear(2013);*/

#Q2
/*
function season($temp){
    if(($temp <20 ) ){
    echo "We are in the winter <br><br>";
    }else {
    echo "We are in the summer <br><br>"; 
    } 
}
season(27);*/

#Q3
/*
function sum($n1,$n2){
    if(($n1==$n2) ){
        echo "The sumation of $n1 & $n2 = ". ($n1+$n2)*3;
    }else {
        echo "The sumation of $n1 & $n2 = ". ($n1+$n2) ; 
    } 
}
sum(2,2);*/

#Q4
/*
function sum($n1,$n2){
    if(($n1+$n2)==30 ){
        echo "The sumation of $n1 & $n2 = ". ($n1+$n2);
    }else {
        echo "False"; 
    } 
}
sum(15,15);*/

#Q5
/*
function mult($n){
    if($n%3==0 ){
        echo "True";
    }    
    else{
        echo "False"; 
    } 
}
mult(30);*/

#Q6
/*
function cR($n){
    if($n>19 && $n<51 ){
        echo "True";
    }    
    else {
        echo "False"; 
    } 
}
cR(27);*/

#Q7
/*
function largest($n1,$n2,$n3){
    if($n1>$n2 && $n1>$n3 ){echo "The largest number is : $n1";
    }else if($n2>$n1 && $n2>$n3 ){
        echo "The largest number is : $n2";
    }       
    else {
        echo "The largest number is : $n3";
    } 
}
largest(1,5,9);*/

#Q8
/*
function elecBill($unites){
    if($unites<51 && $unites>=0){echo "The bill =  ". $unites*2.5;}
    else if($unites>51 && $unites<151 ){echo "The bill =  ". $unites*5;}
    else if($unites>150 && $unites<251 ){echo "The bill =  ". $unites*6.2;}  
    else if($unites>250 ){echo "The bill =  ". $unites*6.2;}       
    else {echo  "Unites Cant be negative value";} 
}
elecBill(50);*/

#Q9
/*
function calc($n1,$n2,$operation){
    if($operation=='+'){echo "The sum =  ". $n1+$n2;}
    else if($operation=='-'){echo "The sub =  ". $n1-$n2;}
    else if($operation=='*'){echo "The mult =  ". $n1*$n2;}
    else if($operation=='/'){echo "The division =  ". $n1/$n2;}       
    else {echo "Please enter a valid operation(+ , - , / , *)";} 
}
calc(1,2,'+');*/

#Q10
/*
function vote($Age){
    if($Age>17){echo "You can vote";} 
    else if($Age<17 && $Age>0){echo "You can't vote";} 
    else {echo "Age can't be zero or less";}    
}
vote(15);*/

#Q11
/*
function type($n){
    if($n>0){echo "( $n ) is a positive number";}    
    else if($n<0){echo "( $n ) is a nigative number";}    
    else {echo "The number you enterd is a Zero";} 
}
type(0);*/

#Q12
/*
function grade($Array){

    $ave=array_sum($Array)/count($Array);
    if($ave<60 && $ave>=0){echo  "Your grade is : ( F )" ; }
    else if($ave<70 && $ave>59){echo  "Your grade is : ( D )" ; }
    else if($ave<80 && $ave>69){echo  "Your grade is : ( C )" ; }
    else if($ave<90 && $ave>79){echo  "Your grade is : ( B )" ; }
    else if($ave<=100 && $ave>89){echo  "Your grade is : ( A )" ; }
    else {echo  "Please check that you entered the your grades correctly" ;} 

}
grade([60,86,95,63,55,74,79,62,50]);*/





?>
