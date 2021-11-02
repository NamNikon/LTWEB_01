<?php
    require_once 'init.php';
    $page = 'index';
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        if($_POST['email'] === 'ntn@gmail.com' && $_POST['password'] === '123455')
        {
            $user = [
                'email' => 'ntn@gmail.com',
                'displayName' => 'Trung Nam'
            ];
            $_SESSION['user'] = $user;
            header('location: index.php');
            exit();
        }
    }
    ?>
<?php include 'header.php'; ?>
<h1>ĐĂNG NHẬP</h1>
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="3mail1" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"> MẬT KHẨU</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">ĐĂNG NHẬP</button>
</form>