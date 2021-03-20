<?php
require 'vendor/autoload.php';

use App\Icons;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icons Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .icon-group {
            position: relative;
            font-size: 14px;
            margin: 5px;
        }

        .base {
            font-size: 2em;
        }

        .bottom_left {
            position: absolute;
            font-size: 1em;
            top: 50%;
            left: -15%;
            text-shadow: 1px -1px 0px white;
        }

        .bottom_right {
            position: absolute;
            font-size: 1em;
            top: 50%;
            left: -15%;
            text-shadow: 1px -1px 0px white;
        }

        .left {
            position: absolute;
            font-size: 1em;
            top: 10%;
            background: white;
            left: -15%;
            text-shadow: 1px -2px 0px white;
        }

        .right {
            position: absolute;
            font-size: 1em;
            background: white;
            top: 20%;
            left: 70%;
            text-shadow: -1px -1px 0px white;
        }
    </style>
</head>

<body>
    <div class="icons-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Icon Group Use Example</h1>
        <p class="lead">How to compose groups of icons.</p>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">2 Icons</h4>
                </div>
                <div class="card-body">
                    <?php
                    $icon = new Icons;
                    echo $icon
                        ->base("fas fa-address-book")
                        ->bottom_left("fas fa-plus")
                        ->get();
                    
                        echo $icon
                        ->bottom_left("fas fa-minus")
                        ->get();
                    ?>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">3 Icons</h4>
                </div>
                <div class="card-body">
                    <?php
                    echo (new Icons)
                        ->base("fas fa-archive")
                        ->left("fa fa-file-pdf")
                        ->right("fa fa-file-image")
                        ->get(); ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>