<?php require "partials/header.view.php" ?>


  <div class="col content reset">
<?php require "views/partials/usernav.view.php" ?> 

    <h2>these are our products</h2>
    <div class="row">
        <?php foreach ($products as $product):?>
        <div class="">
            <img class="" src="<?= $product->image ?>" alt="Card image cap">
            <div class="">
                <h5 class="card-title"><?= $product->title ?></h5>
                <p class="card-text"><?= $product->description ?></p>
                <a href="/products/<?= $product->id ?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</div>
<?php require "partials/footer.view.php" ?>
