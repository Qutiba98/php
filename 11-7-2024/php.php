#Q_0
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>
<body>
    <form action="php.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html> -->

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     echo "Form sent by POST method.<br>";
//     echo "Email: " . htmlspecialchars($email) . "<br>";
//     echo "Password: " . htmlspecialchars($password);
// } 

?>

#Q_1
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Engine</title>
</head>
<body>
    <h1> Search Engine</h1>
    <form action="php.php" method="post">
        <label for="url">URL:</label>
        <input type="text" id="url" name="url" required>
        <button type="submit">GO</button>
    </form>
</body>
</html> -->

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['url']) && !empty($_POST['url'])) {
//         $url = $_POST['url'];

//         if (!preg_match('/^http(s)?:\/\//', $url)) {
//             $url = 'http://' . $url;
//         }

//         header("Location: $url");
//         exit();
//     } else {
//         echo "Please enter a valid URL.";
//     }
// }
?>

#Q_2
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Basic Calculator</h2>
    <form action="php.php" method="post">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="operator">Choose an operation:</label>

        <select id="operator" name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <br><br>
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <button type="submit" name="calculate">Calculate</button>
    </form> 

    <?php
    if(isset($_POST['num1'],$_POST['num2'],$_POST['operator'])){

        $num1=$_POST['num1'];
        $num2=$_POST['num2'];

    }






    ?>
</body>
</html>

#Q_3

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task3</title>
</head>
<body>
    <form method="post">
        <input type="text" name="text" placeholder="Enter your task">
        <button type="submit" name="add">add</button>
    </form>
    <?php
    session_start();
    if(!isset($_SESSION["text"])){
        $_SESSION["text"]=[];
    }
    if(isset($_POST["add"])){
        $add=$_POST["text"];
        $_SESSION["text"][]=$add;
    }
    if(isset($_POST["delete"])){
        $index=$_POST["delete"];
        unset($_SESSION["text"][$index]);
    }
    if(!empty($_SESSION["text"])){
        echo "<ul>";
        foreach($_SESSION["text"] as $index=>$add){
            echo "<li>$add
                 <form method='post' style='display:inline;' >
                 <button type='submit' name='delete' value='$index'>delete</button></form></li>";
        }
        echo "</ul>";
    }else{
        echo "No task";
    }


    ?>
</body>
</html>







<!-- #Q_4, Q_5, Q_6 ,Q_7 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4, 5, 6,7 </title>
</head>
<body>

    <h1>Q_4, Q_5, Q_6 ,Q_7 </h1>

    <?php
    $projectName = " Q_4, Q_5, Q_6 ,Q_7 ";
    $scriptName = basename(__FILE__);
    $requestTime = date('Y-m-d H:i:s');
    $counterFile = 'counter.txt';
    if (!file_exists($counterFile)) {
        file_put_contents($counterFile, '0');
    }
    $counter = (int)file_get_contents($counterFile);
    $counter++;
    file_put_contents($counterFile, $counter);
    echo "<p>Project Name: $projectName</p>";
    echo "<p>Script Name: $scriptName</p>";
    echo "<p>Page Requested Time: $requestTime</p>";
    echo "<p>Number of visitors: $counter</p>";
    ?>
</body>
</html>




#q_8
<?php
setcookie('username', 'john_doe', time() + (86400 * 30), '/');
setcookie('language', 'en_US', time() + (86400 * 30), '/');
function printAllCookies() {
    if (count($_COOKIE) > 0) {
        echo "<h2>All Cookies:</h2>";
        echo "<ul>";
        foreach ($_COOKIE as $name => $value) {
            echo "<li>$name = $value</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No cookies are set.</p>";
    }
}
printAllCookies();
?>