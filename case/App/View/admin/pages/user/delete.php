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
                            <th>Username</th> 
                            <th>Fullname</th>
                            <th>Gmail</th>
                            <th>Image</th>  
                            <th>Address</th>
                        </tr>

                        <tr>
                            <td><?php echo $userDelete['id'] ?></td>
                            <td><?php echo $userDelete['username'] ?></td>
                            <td><?php echo $userDelete['fullname'] ?></td>
                            <td><?php echo $userDelete['gmail'] ?></td>
                            <td><img src="http://localhost/case/<?php echo $userDelete['img']?>" class="rounded-circle" width="80" height="80" title="<?php echo $userDelete['img'] ?>"/> </td>
                            <td><?php echo $userDelete['address'] ?></td>

                        </tr>
                    </table>
                    <form action="http://localhost/case/UserController/delete/<?php echo $userDelete['id']; ?>" method="post">
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