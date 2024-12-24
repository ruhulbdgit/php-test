<?php
// Start session
session_start();

// Set session & cookie
$_SESSION['username'] = "Rahim";
setcookie("user_id", "12345", time() + (86400 * 7), "/"); // Cookie for 7 days

echo "Session and Cookie are set.";
?>

<hr>

<?php
// cokkie & sesstion exess

if (isset($_SESSION['username'])) {
    echo "Session Username: " . $_SESSION['username'] . "<br>";
} else {
    echo "No session data found.<br>";
}

if (isset($_COOKIE['user_id'])) {
    echo "Cookie User ID: " . $_COOKIE['user_id'];
} else {
    echo "No cookie found.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback Function & json</title>
</head>

<body>

    <?php
    echo "</br>";

    //fucntion testing
    function sayhi($massage)
    {
        echo "Hi," . "$massage";
    }
    sayhi('Rohim');
    echo "</br>";
    function sayhallo($sms)
    {
        echo "Hallo," . "$sms";
    }
    sayhi('Dr.Unus');
    echo "</br>";
    function callbackfunc($name, $callback)
    {
        return $callback($name);
    }
    echo callbackfunc('Robin Khan',  'sayhallo');
    echo "</br>";

    //annonomuous
    $numbers = [2, 3, 4];
    $result = array_map(function ($single_number) {
        return $single_number * 5;
    }, $numbers);
    var_dump($result);
    //json 
    echo "</br>";
    $number = [2, 3, 4];
    echo json_encode($number);
    echo "<?br>";
    $cars = array("Volvo", "BMW", "Toyota");
    echo json_encode($cars);
    echo "</br>";
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj, true));
    echo "</br>";
    echo "<hr>";
    echo "<h2>This is oop</h2>";
    //oop 
    class Car
    {
        public $varName;
        public $varColor;
        function __construct($varName, $varColor)
        {
            $this->varName = $varName;
            $this->varColor = $varColor;
        }
        function get_name()
        {
            return $this->varName;
        }
        function get_color()
        {
            return $this->varColor;
        }
        function __destruct()
        {
            echo 'HI, I am from Destruct Fucntion';
        }
    }
    //1st instans of Car class
    $cars = new Car("BMW", "Red");
    echo $cars->get_name();
    echo "</br>";
    echo $cars->get_color();
    echo '</br>';
    //2st instans of Car class

    $cars2 = new Car("TOYOTA", "Blue");
    echo $cars2->get_name();
    echo "</br>";
    echo $cars2->get_color();
    echo '</br>';
    ?>






</body>

</html>