<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title><?php echo $title ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 20px;">
        <a style="color: #007bff" class="navbar-brand" href="index.php"><strong>18600177</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin: 0 20px">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php echo $title == 'Home' ? 'action' : ''; ?>">
                    <a class="nav-link" href="index.php">Home<?php echo $title == 'Home' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                </li>
                <li class="nav-item <?php echo $title == 'Plus two numbers' ? 'action' : ''; ?>">
                    <a class="nav-link" href="sum.php">Plus two numbers<?php echo $title == 'Plus two numbers' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                </li>
                <?php if ($curentUser) : ?> 
                    <li class="nav-item <?php echo $title == 'Logout' ? 'action' : ''; ?>">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item <?php echo $title == 'Change Password' ? 'action' : ''; ?>">
                        <a class="nav-link" href="change_password.php">Change Password</a><?php echo $title == 'Change Password' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                    </li>
                <?php else : ?>
                    <li class="nav-item <?php echo $title == 'Login' ? 'action' : ''; ?>">
                        <a class="nav-link" href="login.php">Login<?php echo $title == 'Login' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                    </li>
                    <li class="nav-item <?php echo $title == 'Register' ? 'action' : ''; ?>">
                        <a class="nav-link" href="register.php">Register<?php echo $title == 'Register' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1><?php echo $title; ?></h1>