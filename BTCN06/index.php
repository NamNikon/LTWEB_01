<?php
require_once 'init.php';
require_once 'functions.php';

$title = 'Home';
?>
<?php include 'header.php'; ?>

<?php if ($curentUser) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Hello I'm Trung Nam <?php echo $curentUser['name']; ?>!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php else : ?>
    <div class="alert alert-secondary" role="alert">
        You are not logged in!
    </div>
<?php endif; ?>

<?php include 'footer.php'; ?>