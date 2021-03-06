<?php

// dd($products);
?>
<?php require "views/partials/header.view.php" ?>

<div class="col content reset ">
<?php require "views/partials/usernav.view.php" ?> 

    <div class="row heading  d-flex align-items-center justify-content-between reset">
        <h4>Product List</h4>
        <a href="/admin/products/create" class="addNew  "><i class="fas fa-plus"></i>Add new product</a>
    </div>
    <table >
   <tr >
      <th>Name</th>
      <th>Description</th>
      <th>Thumbnail</th>
      <th>Actions</th>
   </tr>
   <?php foreach ($products as $product): ?>
   <tr>
      <td>
         <?= substr($product->description, 0, 50) ?>
         ...
      </td>
      <td>
        
      <td> 
      <img class="" src="<?= $product->image ?>" alt="Card image cap" width="80px">
      </td>


      <td> 
        <?= $product->type ?>
      </td>

      </td>
      <td >
          <div class" buttons d-flex justify-content-center flex-wrap">
         <a href="/admin/products/show?id=<?= $product->id ?>">Show</a> 
         |
         <form action="/admin/products/edit" method="get">
            <button class="btn">
            <input type="hidden" name="id" value="<?= $product->id ?>">Edit</button>
         </form>
         |
         <form class="deleteForm" action="/admin/products/destroy" method="post">
            <button class="btn">
            <input type="hidden" name="id" value="<?= $product->id ?>">Delete</button>
         </form>
         </div>
      </td>

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