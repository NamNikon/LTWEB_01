<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>18600177</title>
</head>

<body>
    <div class="container">



        <p class="h2">RESULT</p>
        <div class="alert alert-primary" role="alert">
            <?php
            $a = $_POST['NumA'];
            $b = $_POST['NumB'];
            $c = $a + $b;
            echo "Kết quả ".  ($a) . " + " . ($b) . " = " . ($c);
            ?>
        </div>

    </div>

</html>