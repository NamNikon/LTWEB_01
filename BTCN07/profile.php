<?php
require_once 'init.php';
require_once 'functions.php';

$title = 'Profile';
$error = "";
$status = 0;
$image_default = "https://media.tarkett-image.com/large/TH_24567080_24594080_24596080_24601080_24563080_24565080_24588080_001.jpg";

if (isset($_FILES['avatar'])) {

    //insert image to server folder
    $fileName = $_FILES['avatar']['name'];
    $fileSize = $_FILES['avatar']['size'];
    $fileTemp = $_FILES['avatar']['tmp_name'];
    $result = move_uploaded_file($fileTemp, 'assets/images/' . $fileName);
    if ($result) {
        updateAvatar($curentUser['id'], $fileName);
        $error = "Upload succesfull!";
        $status = 1;
        header("Refresh:1");
    } else {
        $error = "File is not an image!";
        $status = 2;
    }
}
?>

<?php include 'header.php'; ?>


<?php if ($curentUser) : ?>
<!-- show error -->
<?php if ($error != "") : ?>
<div class="alert alert-<?php echo $status == 1 ? "success" : "danger"; ?> alert-dismissible fade show" role="alert">
    <?php echo $error; ?>!
    <?php echo  $curentUser['avatar']; ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<!-- content -->
<div class="d-flex flex-row bd-highlight mb-2">
    <div class="card p-2 bd-highlight" style="width: 15rem;">
        <img src="<?php echo $curentUser['avatar'] ?  'assets/images/' . $curentUser['avatar'] : $image_default; ?>"
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