<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Test</title>
</head>

<body>
    <?php
    $fname = "";
    $lname = "";
    $email = "";

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $fname = kodezen_validation($_POST['fname']);
        $lname = kodezen_validation($_POST['lname']);
        $email = kodezen_validation($_POST['email']);
    }
    function kodezen_validation($form_field_value)
    {
        $form_field_value = trim($form_field_value);
        $form_field_value = stripslashes($form_field_value);
        $form_field_value = htmlspecialchars($form_field_value);
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


    </form>
    <h6>Form Data</h6>
    <ul>
        <li> Frist Name:<?php echo $fname; ?></li>
        <li>Last Name:<?php echo $lname; ?></li>
        <li>Email:<?php echo $email; ?></li>
    </ul>
    </div>

</body>

</html>