<?php

//dd(getcwd());
?>
<?php require "views/partials/header.view.php" ?>

<div class=" col-10 content reset">
<div class=" heading  ">
<ul>
    <li><a href="#">Product list</a></li>
    <li><a href="/admin/products/create" class="addNew  "><i class="fas fa-plus"></i>Add new product</a></li>
</ul>

</div>

<table class="table">
    <tr>

        <th>Name</th>
        <th>Description</th>
        <th>Thumbnail</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr class="rows">
        <td><?= $product->title ?></td>
        <td><?= substr($product->description, 0, 50) ?>...</td>
        <td><img src="<?= $product->image ?>" alt="" width="150"></td>
        <td><a href="/admin/products/show?id=<?= $product->id ?>">Show</a> | <form action="/admin/products/edit" method="get"><button class="btn">
                    <input type="hidden" name="id" value="<?= $product->id ?>">Edit</button></form> | <form class="deleteForm" action="/admin/products/destroy" method="post"><button class="btn">
                    <input type="hidden" name="id" value="<?= $product->id ?>">Delete</button></form></td>
    </tr>
    <?php endforeach; ?> 
    
</table>
</div>
<?php require "views/partials/footer.view.php" ?>

<script>
    var form = document.querySelectorAll('.deleteForm');
    for(i=0; i<form.length;i+=1){
        form[i].addEventListener('submit',(event)=>{
            var x = confirm("Are you sure you want to delete?");
            if (x) return true;
            else return event.preventDefault();
        })
    }
</script>