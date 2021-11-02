<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page ?></title>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">TRANG CHỦ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link<?php echo $page === 'index' ? 'active' : ''?>" href="/">TRANG CHỦ <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $page === 'Đăng nhập' ? 'active' : ''?>" href="login.php">ĐĂNG NHẬP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registrer.php">ĐĂNG KÝ</a>
      </li>
    </ul>
  </div>
</nav>
    </div>

</body>
</html>