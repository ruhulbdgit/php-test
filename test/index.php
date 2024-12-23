<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback Function & json</title>
</head>

<body>
    <?php

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







    ?>

</body>

</html>