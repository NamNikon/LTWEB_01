<?php
require_once 'init.php';
require_once 'functions.php';

$title = 'Profile';
$error = "";

if (isset($_FILES['avatar'])) {
    $ImageName = 'avr_userid-' . $curentUser['id'] . '.jpg';
    //Convert Image to binary
}


?>

<?php include 'header.php'; ?>


<?php if ($curentUser) : ?>
<!-- show error -->
<?php if ($error == "") : ?>

<?php endif; ?>

<!-- content -->
<div class="d-flex flex-row bd-highlight mb-2">
    <div class="card p-2 bd-highlight" style="width: 15rem;">
        <img src="https://media.tarkett-image.com/large/TH_24567080_24594080_24596080_24601080_24563080_24565080_24588080_001.jpg"
            class="card-img-top" alt="avr_userid-<?php echo $curentUser['id'] ?>.jpg">
        <div class="card-body">
            <h3><strong class="text text-primary"><?php echo $curentUser['name'] ?></strong></h3>
        </div>
    </div>
    <form class="p-2 bd-highlight" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="avatar" class="font-weight-bold text-primary">Upload your avatar</label>
            <input type="file" accept=".jpg, .jpeg, .png" class="form-control-file" id="avatar" name="avatar">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>




<?php else : ?>
<div class="alert alert-secondary" role="alert">
    You are not logged in!
</div>
<?php endif; ?>

<?php include 'footer.php'; ?>