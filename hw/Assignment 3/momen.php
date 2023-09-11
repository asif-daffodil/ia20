<?php

function isLeapYear($year)
{
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}



if (isset($_POST['number']) && $_POST['number'] != NULL && $_POST['number'] > 0) {

    $year = (int) $_POST['number'];

    $leapYear = (isLeapYear($year)) ? "$year is a leap year." : "$year is not a leap year.";

} else {
    $leapYear = "";
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Leap Year Calculation</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .design {
            margin: auto;
            border: 2px solid #198754;
            border-radius: 10px;
            height: 45dvh;

        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }

    </style>

</head>

<body style="background: #808080;">

    <div class="container">

        <div class="row" style="height:100dvh;">

            <div class="col-md-5 design bg-dark text-white p-5">
                    <h3 class="text-center">Leap Year Calculation</h3>
                <form action="" method="POST">
                    <label for="number" class="form-label"> Give a Year:</label><br>
                    <input type="number" name="number" id="number"><br>
                    <input type="submit" value="Check" class="btn btn-success mt-2">
                </form>

                <div class="col-md-12 mt-2">
                  <h3><?= $leapYear ?></h3>  
                </div>

            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>