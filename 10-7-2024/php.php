<?php



#Q_2
$colors = array('white', 'green', 'red');

// ترتيب العناصر كما هو مطلوب
sort($colors);

// بدء القائمة غير المرتبة
echo "<ul>";

// عرض كل لون كعنصر في القائمة
foreach ($colors as $color) {
    echo "<li>" . $color . "</li>";
}

// إغلاق القائمة غير المرتبة
echo "</ul>"."<br>";
echo"-----------------------------------------------------------------"."<br>"."<br>";
#Q_3

$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}
echo"-----------------------------------------------------------------"."<br>"."<br>";

#Q_4


$color = array(4 => 'white', 6 => 'green', 11 => 'red');

$first_element = reset($color);

echo $first_element."<br>";
echo"-----------------------------------------------------------------"."<br>"."<br>";

#Q_5
$array = array(1, 2, 3, 4, 5);
$location = 4;
$new_item = '$';
array_splice($array, $location - 1, 0, $new_item);
print_r($array);
echo"<br>"."-----------------------------------------------------------------"."<br>"."<br>";

#Q_6
$fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
);
ksort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key = $value\n";
}
echo"<br>"."-----------------------------------------------------------------"."<br>"."<br>";

#Q_7

$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$average = array_sum($temperatures) / count($temperatures);
echo "Average Temperature is " . number_format($average, 1) . "\n"."<br>";
sort($temperatures);
$lowest_temps = array_slice($temperatures, 0, 5);
echo "List of seven lowest temperatures: " . implode(", ", $lowest_temps) . "\n"."<br>";
$highest_temps = array_slice($temperatures, -5);
echo "List of seven highest temperatures:  " . implode(", ", $highest_temps) . "\n";

echo"<br>"."<br>"."-----------------------------------------------------------------"."<br>"."<br>";

#Q_8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
echo "Array\n(\n";
foreach ($result as $key => $value) {
    echo "[$key] => $value\n";
}
echo ")\n";

echo"<br>"."<br>"."-----------------------------------------------------------------"."<br>"."<br>";

#Q_9
function convertToUpperCase($array) {
    return array_map('strtoupper', $array);
}
$colors = array("red", "blue", "white", "yellow");
$upperColors = convertToUpperCase($colors);
echo "Array\n(\n";
foreach ($upperColors as $color) {
    echo "$color\n";
}
echo ")\n";

echo"<br>"."<br>"."-----------------------------------------------------------------"."<br>"."<br>";

#Q_10
function convertToLowerCase($array) {
    return array_map('strtolower', $array);
}
$colors = array("RED", "BLUE", "WHITE", "YELLOW");
$upperColors = convertToLowerCase($colors);
echo "Array\n(\n";
foreach ($upperColors as $color) {
    echo "$color\n";
}
echo ")\n";

echo"<br>"."<br>"."-----------------------------------------------------------------"."<br>"."<br>";

#Q_11
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i;
        if ($i < 248) {
            echo ",";
        }
    }
}
echo"<br>"."<br>"."-----------------------------------------------------------------"."<br>"."<br>";

#Q_12
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
$minLength = min(array_map('strlen', $words));
$maxLength = max(array_map('strlen', $words));
echo "The shortest array length is $minLength. The longest array length is $maxLength.";


echo"<br>"."<br>"."-----------------------------------------------------------------"."<br>"."<br>";

#Q_13
function generateUniqueRandomNumbers($min, $max, $count) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $count);
}
$min = 11;
$max = 20;
$count = 10;
$randomNumbers = generateUniqueRandomNumbers($min, $max, $count);
echo implode(" ", $randomNumbers);


echo"<br>"."<br>"."-----------------------------------------------------------------"."<br>"."<br>";






?>