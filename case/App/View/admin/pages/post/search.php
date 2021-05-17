
<?php
require_once "App/View/admin/layouts/header.php";
require_once "App/View/admin/layouts/sidebar.php";
?>

<div class="main-content">
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h1 class="section-header">
          <div>Search Results</div>
        </h1>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <th>Stt</th>
              <th>Title</th>
              <th>Created At</th>
              <th>Teaser</th>
              <th>View Detail</th>
              <th colspan="2" style="text-align: center;">Tool</th>
            </tr>
            <?php foreach ($postSearch as $key => $post) : ?>
              <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $post['title'] ?></td>
                <td><?php echo $post['teaser'] ?></td>
                <td><?php echo $post['created'] ?></td>
                <td><a href="./view/<?php echo $post['id']; ?>" class="btn btn-action btn-secondary">Detail</a></td>
                <td><a href="./edit/<?php echo $post['id']; ?>" class="btn btn-action btn-secondary">Edit</a></td>
                <td><a href="./delete/<?php echo $post['id']; ?>" class="btn btn-action btn-secondary">Delete</a></td>
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