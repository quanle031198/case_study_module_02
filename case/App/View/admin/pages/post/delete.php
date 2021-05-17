<?php
require_once "App/View/admin/layouts/header.php";
require_once "App/View/admin/layouts/sidebar.php";
?>
<div class="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Do you want to delete?</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Teaser</th>
                            <th>Teaser Image</th>
                            <th>Created</th>
                            <th>Author</th>
                        </tr>

                        <tr>
                            <td><?php echo $postDelete['id'] ?></td>
                            <td><?php echo $postDelete['title'] ?></td>
                            <td><?php echo $postDelete['teaser'] ?></td>
                            <td><?php echo $postDelete['teaser_img'] ?></td>
                            <td><?php echo $postDelete['created'] ?></td>
                            <td><?php echo $postDelete['author'] ?></td>

                        </tr>
                    </table>
                    <form action="http://localhost/case/PostController/delete/<?php echo $postDelete['id']; ?>" method="post">
                        <div class="form-group">
                            <input type="submit" value="Delete" class="btn btn-danger" />
                            <a class="btn btn-secondary" href="http://localhost/case/PostController/list">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<?php

require_once "App/View/admin/layouts/footer.php";
?>