<?php
require_once 'init.php';

$title = 'Change password';

if (isset($_POST['password'])) {
    $user = findUserByID($_SESSION['userID']);
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    if ($password != $re_password)
        $error = 'This password not invalid! Please re-enter!';
    else {
        updatePassword($user['username'], password_hash($password, PASSWORD_DEFAULT));
        header('Location: index.php');
        exit();
    }
}

?>

<?php include 'header.php'; ?>

<?php if (isset($error)) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php else : ?>
    <form action="change_password.php" method="POST">
        <div class="form-group">
            <div class="form-group">
                <label for="password">New password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password">Confirm new password</label>
                <input type="password" class="form-control" id="re_password" name="re_password">
            </div>
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
<?php endif; ?>

<?php include 'footer.php'; ?>