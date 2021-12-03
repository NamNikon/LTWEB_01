<?php
require_once 'init.php';
$title = 'Plus two numbers';

if (isset($_POST['numberOne']) && isset($_POST['numberTwo'])) {
    $a = $_POST['numberOne'];
    $b = $_POST['numberTwo'];
    $result = $a + $b;
}
?>

<?php include 'header.php'; ?>
<?php if ($curentUser) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Hello <?php echo $curentUser['name']; ?>!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php if (isset($result)) : ?>
        <div class="alert alert-primary" role="alert">
            Result <?php echo $a ?> + <?php echo $b ?> is: <?php echo $result; ?>
        </div>
    <?php else : ?>
        <form action="sum.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter frist number: </label>
                <input type="number" class="form-control" name="numberOne">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter second number: </label>
                    <input type="number" class="form-control" name="numberTwo">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    <?php endif; ?>
<?php else : ?>
    <div class="alert alert-secondary" role="alert">
        You doesn't logged in, please login to use this program!
    </div>
<?php endif; ?>
<?php include 'footer.php'; ?>