<?php
require_once 'init.php';

$title = 'Login';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = findUserByEmail($email);
    if (!$user) {
        $error = 'User not found!';
    } else {
        if (!(password_verify($password, $user["password"]))) {
            $error = 'Password invalid!';
            
        } else {
            $_SESSION['userID'] = $user['id'];
            $_SESSION['email'] = $user['id'];
            $_SESSION['password'] = $user['id'];
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
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <a style="display: block;" href="forgot_password.php">You forgot your password?</a>
        <p>If you don't have an account, please<a> register <a href="register.php">here</a>.</p>
    </form>
<?php endif; ?>

<?php include 'footer.php'; ?>