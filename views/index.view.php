<?php require "partials/header.view.php" ?>
    <div class="col content reset ">
    <?php require "views/partials/usernav.view.php" ?> 
    <form action="">
        <a href="/admin/products" class="backtoall">Back to all</a>
    <div class="form-group">
        <p>ID</p>
        <h3><?= $product->id ?></h3>
    </div>

    <div class="form-group">
        <p>Title</p>
        <h3><?= $product->title ?></h3>
    </div>

    <div class="form-group">
        <p>Description</p>
        <h3><?= $product->description ?></h3>
    </div>

    <div class="form-group">
        <p>Image</p>
        <img src="<?= $product->image ?>" alt="">
    </div>

    </form>

    </div>
<?php require "partials/footer.view.php" ?>
