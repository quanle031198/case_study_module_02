<?php
require_once "App/View/admin/layouts/header.php";
require_once "App/View/admin/layouts/sidebar.php";
?>

<div class="main-content">
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h1 class="section-header">
          <div>List Category</div>
        </h1>
              <!-- <form class="form-inline mr-auto" action="http://localhost/case/CategoryController/search" method="POST">
                <div class="search-element" >
                <input style="font-size: 20px;" class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
                <select style="font-size: 20px;" class="btn btn-secondary dropdown-toggle " name="choose">
                  <option selected>--option--</option>
                  <option value="title">Title</option>
                  <option value="teaser">Teaser</option>
                  <option value="author">Author</option>
                  <option value="created">Date Created</option>
      
                </select>
                <button class="btn" type="submit"><i class="ion ion-search"></i></button>
                </div>
              </form> -->
      </div>

      <div class="card-body">
        <div class="table-responsive">


          <table class="table table-bordered">
            <tr>
              <th>Stt</th>
              <th>Name category</th>   
              <th>Image category</th>          
              <th colspan="2" style="text-align: center;">Tool</th>
            </tr>
            <?php foreach ($CategoryList as $key => $category) : ?>
              <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $category['name_category'] ?></td>
                <td><img width="100px"; height="80px;" src="http://localhost/case/<?php echo $category['img_category']?>"/> </td>
                <td style="text-align: center;"><a href="./edit/<?php echo $category['id']; ?>" class="btn btn-outline-secondary" title="Edit"><i class="ion ion-edit"></i></a></td>
                <td style="text-align: center;"><a href="./delete/<?php echo $category['id']; ?>" class="btn btn-outline-secondary" title="Delete"><i class="ion ion-trash-a"></i></a></td>
              </tr>
            <?php endforeach; ?>
          </table>

        </div>
      </div>

    </div>
</div>

<?php

require_once "App/View/admin/layouts/footer.php";
?>