<?php
require_once 'init.php';

$title = 'Register';

$filejson = 'user.json';

if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    $user = findUserByUsername($username);

    if ($user) {
        $error = 'This username already exsts! Please login with another username!';
    } else {
        if ($password != $re_password) {
            $error = 'Invalid veritify! Please re-enter!';
        } else {
            $user =  createUser($name, $username, password_hash($password, PASSWORD_DEFAULT));
            $_SESSION['userID'] = $user['id'];
            header('Location: index.php');
            exit();
        }
    }
}
?>

<?php include 'header.php'; ?>

<?php if (isset($error)) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php else : ?>
    <form action="register.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Full name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Confirm</label>
                <input type="password" class="form-control" id="re_password" name="re_password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
<?php endif; ?>

<?php include 'footer.php'; ?>