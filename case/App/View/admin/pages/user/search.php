
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
              <th>Username</th>                   
              <th>Image</th>
              <th>Permission</th>
              <th>View Detail</th>
              <th colspan="2" style="text-align: center;">Tool</th>
            </tr>
            <?php foreach ($userSearch as $key => $user) : ?>
              <tr>
              <td><?php echo ++$key ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><img src="http://localhost/case/<?php echo $user['img']?>" class="rounded-circle" width="80" height="80" title="<?php echo $user['username'] ?>"/> </td>
                <td><?php echo $user['permission'] ?></td>
                <td style="text-align: center;"><a href="./view/<?php echo $user['id']; ?>" class="btn btn-outline-secondary">Detail</a></td>
                <td style="text-align: center;"><a href="./edit/<?php echo $user['id']; ?>" class="btn btn-outline-secondary" title="Edit"><i class="ion ion-edit"></i></a></td>
                <td style="text-align: center;"><a href="./delete/<?php echo $user['id']; ?>" class="btn btn-outline-secondary" title="Delete"><i class="ion ion-trash-a"></i></a></td>
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