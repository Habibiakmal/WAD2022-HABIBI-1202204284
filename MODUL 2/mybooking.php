<!doctype html>
<html lang="en">

<?php
require 'db.php';
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Muhammad Habibi Akmal_1202204284</title>
</head>

<body><?php

        $book = $_POST["book"] . " " . $_POST["time"];
        $startbook = date("d-m-Y H:i:s", strtotime($book));
        $endbook = date("d-m-Y H:i:s", (strtotime($book) + 60 * 60 * 24 * $_POST["hari"]));
        $mobil = $_POST["mobil"];
        $phone = $_POST["phone"];

        $serprice = 0;
        if (isset($_POST["ser"])) {
            foreach ($_POST["ser"] as $ser) {
                if ($ser == "Health protocol") {
                    $serprice += 25000;
                }
                if ($ser == "Driver") {
                    $serprice += 100000;
                }
                if ($ser == "Fuel Filled") {
                    $serprice += 250000;
                }
            }
        } else {
            $serprice += 0;
        }

        ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">

            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php" target="_blank">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="booking.php" target="_blank">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="text-align: center;">
        <div class="m-2">
            <p class="m-0" style="font-size:30px">Thank you Habibi_1202204284 for Reserving</p>
            <p class="m-0" style="font-size:25px">Please double check your reservation detail</p>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service(s)</th>
                    <th scope="col">Total Price</th>
                </tr>

    </div>

    <footer class="fixed-bottom text-center pt-3 bg-light">
        <p style="text-align: center; color: lightslategray;">
            Habibi_1202204284
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>