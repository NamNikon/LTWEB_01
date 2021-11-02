<?php
require_once 'init.php';
require_once 'functions.php';

$title = 'Home';

$uid = $curentUser['id'];
if (isset($_POST['content'])) { 
    $content = $_POST['content'];
    createPoster($uid, $content);
}


?>
<?php include 'header.php'; ?>

<?php if ($curentUser) : ?>

    <?php echo $userPoster[0] ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Hello <?php echo $curentUser['name']; ?>!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>


    <form action="" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Hello <?php echo $curentUser['name']; ?>, how are you today!" name="content" id="content">
            <button type="submit" class="btn btn-primary">POST</button>
        </div>
    </form>

    <div class="d-flex">
        <div class="flex-shrink-0">
            <img class="img-thumbnail img-poster" src="https://media.tarkett-image.com/large/TH_24567080_24594080_24596080_24601080_24563080_24565080_24588080_001.jpg" alt="">
        </div>
        <div class="flex-grow-1 ms-3">
            <div class="container ml-2">
                <div class="row">
                    <p class="h5"><?php echo $curentUser['name']; ?></p>
                </div>
                <div class="row text">12:00:00 AM</div>
                <div class="row">This is some content from a media component. You can replace this with any content and adjust it as needed.</div>
            </div>
        </div>
    </div>


<?php else : ?>
    <div class="alert alert-secondary" role="alert">
        You are not logged in!
    </div>
<?php endif; ?>

<?php include 'footer.php'; ?>