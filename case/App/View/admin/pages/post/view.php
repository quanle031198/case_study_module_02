<?php
require_once "App/View/admin/layouts/header.php";
require_once "App/View/admin/layouts/sidebar.php";

?>
<div class="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Post List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered">
                        <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Teaser</th>
                            <th>Teaser Image</th>
                            <th>Content</th>
                            <th>Created</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>User name</th>
                        </tr>
                        <?php foreach ($postDetail as $key => $post) : ?>
                       
                            <tr>
                                <td><?php echo $post['id'] ?></td>
                                <td><?php echo $post['title'] ?></td>
                                <td><?php echo $post['teaser'] ?></td>
                                <td><img width="100px"; height="80px;" src="http://localhost/case/<?php echo $post['teaser_img']?>"/> </td>
                                <td><?php echo $post['content'] ?></td>
                                <td><?php echo $post['created'] ?></td>
                                <td><?php echo $post['author'] ?></td>
                                <td><?php echo $post['name_category'] ?></td>
                                <td><?php echo $post['username'] ?></td>
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