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
                            <th>Id</th>
                            <th>Category name</th> 
                            <th>Category image</th>
                        </tr>

                        <tr>
                            <td><?php echo $categoryDelete['id'] ?></td>
                            <td><?php echo $categoryDelete['name_category'] ?></td>
                            <td><img width="100px"; height="80px;" src="http://localhost/case/<?php echo $categoryDelete['img_category']?>"/> </td>

                        </tr>
                    </table>
                    <form action="http://localhost/case/CategoryController/delete/<?php echo $categoryDelete['id']; ?>" method="post">
                        <div class="form-group">
                            <input type="submit" value="Delete" class="btn btn-danger" />
                            <a class="btn btn-secondary" href="http://localhost/case/UserController/list">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<?php

require_once "App/View/admin/layouts/footer.php";
?>