<?php
    require 'Icons.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icons Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .icon-group {
            display: block;
            position: relative;
            width: 40px;
            margin: 10px auto;
        }

        .base {
            font-size: 50px;
        }

        .bottom_left {
            position: absolute;
            color:red;
            font-size: 25px;
            top: 10px;
            left: 10px;
        }
    </style>
</head>

<body>
    <?php echo (new Icons)->base("fa fa-angry")->bottom_left("fa fa-apple-alt")->get(); ?>
</body>

</html>