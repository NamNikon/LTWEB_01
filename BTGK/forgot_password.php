<?php
require_once 'init.php';

$title = 'Forgot password';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    $user = findUserByEmail($email);
    if (!$user) {
        $error = 'User not found!';
    } else {
        if ($password != $re_password)
            $error = 'This password not invalid! Please re-enter!';
        else {
            $user = updatePassword($email, password_hash($password, PASSWORD_DEFAULT));
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
    <form action="forgot_password.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputEmail1">New password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Confirm new password</label>
                <input type="password" class="form-control" id="re_password" name="re_password">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
<?php endif; ?>

<?php include 'footer.php'; ?>