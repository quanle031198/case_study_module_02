<?php
require_once "App/View/admin/layouts/header.php";
require_once "App/View/admin/layouts/sidebar.php";

?>
<div class="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>User List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered">
                        <tr>
                            <th>id</th>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Birthday</th>
                            <th>Phone Number</th>
                            <th>Gmail</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Permission</th>
                            <th>Password</th>
                        </tr>
                        <?php foreach ($userDetail as $key => $user) : ?>
                       
                            <tr>
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['username'] ?></td>
                                <td><?php echo $user['fullname'] ?></td>
                                <td><?php echo $user['birthday_user'] ?></td>
                                <td><?php echo $user['phone_number'] ?></td>
                                <td><?php echo $user['gmail'] ?></td>
                                <td><?php echo $user['address'] ?></td>
                                <td><img src="http://localhost/case/<?php echo $user['img']?>" class="rounded-circle" width="80" height="80" title="<?php echo $user['username'] ?>"/> </td>
                                <td><?php echo $user['permission'] ?></td>
                                <td><?php echo $user['password'] ?></td>
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