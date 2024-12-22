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
    function test()
    {
        echo "Testing -->" . " " . "test()";
    }
    test();
    echo "</br>";
    //argument testing
    function testWithArguments($tes)
    {
        echo  "$tes" . "Test";
    }
    testWithArguments("Ruhul");
    echo "</br>";
    testWithArguments("Amin");

    echo "<br>";
    function withMoreArguments($name, $year)
    {
        echo "$name .Born in .$year";
    }
    withMoreArguments("Ruhul", "2000");
    echo "</br>";

    //Callback Function 
    function callBakFucntion($tesp, $callback)
    {
        return $callback($tesp);
    }

    echo callBakFucntion('Dr Unus', 'testWithArguments');



    ?>

</body>

</html>