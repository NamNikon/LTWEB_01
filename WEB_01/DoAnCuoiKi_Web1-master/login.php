<?php
	require_once 'init.php';
	$page='Đăng nhập';
        var_dump($_POST);
    if (isset($_POST['email']) && isset($_POST['password'])){
        if($_POST['email'] ===  '1760472@gmail.com' && $_POST['password'] === '123456'){
            $user= ['email' => '1760472@gmail.com', 'displayName' => 'Dinh Bao Long'];
            $_SESSION['user']=$user;
             header('Location: index.php');
            exit();
        }
       
    }
?>
<?php include 'header.php'; ?>
<h1>Đăng nhập</h1>
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password1" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Đăng nhập </button>
</form>
<?php include 'footer.php'; ?>