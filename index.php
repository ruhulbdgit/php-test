<?php include 'header.php'; ?>

<?php
$fname = "";
$lname = "";
$email = "";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $fname = kodezen_text_sanitize($_POST['fname']);
    $lname = kodezen_text_sanitize($_POST['lname']);
    $email = kodezen_emaill_sanitize($_POST['email']);
}
function kodezen_validation($form_field_value)
{
    $form_field_value = trim($form_field_value);
    $form_field_value = stripslashes($form_field_value);
    $form_field_value = htmlspecialchars($form_field_value);
}

function kodezen_text_sanitize($field_value)
{

    return  filter_var($field_value, FILTER_SANITIZE_STRING);
}
// when we make a custom function for validate email senitize & validate example below
function kodezen_emaill_sanitize($fields_value)
{

    $fields_value = filter_var($fields_value, FILTER_VALIDATE_EMAIL);
    return  filter_var($fields_value, FILTER_SANITIZE_EMAIL);
}

?>

<form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div style="margin-bottom: 15px;">
        <input type="text" name="fname" placeholder="Enter First Name">
    </div>
    <div style="margin-bottom: 15px;">
        <input type="text" name="lname" placeholder="Enter Last Name">
    </div>
    <div style="margin-bottom: 15px;">
        <input type="text" name="email" placeholder="Enter Email">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
    <div><a href="about.php">About</a>


</form>
<h6>Form Data</h6>
<ul>
    <li> Frist Name:<?php echo $fname; ?></li>
    <li>Last Name:<?php echo $lname; ?></li>
    <li>Email:<?php echo $email; ?></li>
</ul>
</div>


<div>
    <h5>Copy Write: <?php echo date("l-jS-of F Y h:i:s A"); ?></h5>

</div>
<?php include 'footer.php'; ?>
<?php
// OOP testing in PHP

echo "Hello\n"; // Fixed the newline character
echo "</br>";

class Car
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function get_test()
    {
        return "Name: " . $this->name . ", Color: " . $this->color;
    }
}

$car = new Car('Bmw', 'Red');
echo $car->get_test();

?>


</body>

</html>