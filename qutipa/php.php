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


?>