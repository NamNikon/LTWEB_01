<?php 

?>


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
        <form class="mt-3" action="sum.php" method="POST">
            <div class="form-group">
                <label for="">Number A</label>
                <input type="number" class="form-control" id="Num" name="NumA" A placeholder="Enter number a">
            </div>

            <div class="form-group">
                <label for="">Number B</label>
                <input type="number" class="form-control" id="NumB" name="NumB" placeholder="Enter number b">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>