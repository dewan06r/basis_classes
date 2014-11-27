<?php
session_start();
    echo "<pre>";
    //print_r($_SERVER);
    if(strtolower($_SERVER['REQUEST_METHOD'])!="post") {
        echo 1;
        header('location:http://localhost/DayFirst/name.html');
    } else {
        if(array_key_exists('full_name', $_POST) && !empty($_POST['full_name'])) {
            $full_name = $_POST['full_name'];
        } else {
            $full_name = '<span style="color:red;">not available</span>';
        }

        //print_r($_SESSION);
        $_SESSION['full_name'] = $full_name;
        //print_r($_SESSION);
    }
    echo "</pre><br/>";
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        *{margin:0; outline:none;}
        fieldset{max-width:35%; margin: 0 auto !important; margin-top:5% !important; background-color:#f1f1f1; border-radius:5px; -moz-border-radius: 5px;}
        legend{font-weight: bold; border: 1px solid #f8f8f8; border-radius:5px; -moz-border-radius: 5px; }
        label {margin: 5px;}
        input {margin: 5px;}
        .submit{float: right; margin-right: 5%; }
    </style>
</head>
<body>
<form method="post" action="output.php">
    <fieldset>
        <legend>Here Your Name</legend>
        <label>Your Name </label><label><?php  echo $full_name; ?></label>
    </fieldset>
</form>
</body>
</html>