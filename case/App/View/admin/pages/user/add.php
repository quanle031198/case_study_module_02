<?php
require_once "App/View/admin/layouts/header.php";
require_once "App/View/admin/layouts/sidebar.php";
?>
<div class="main-content">
    <section class="section">
        <div class="content-wrapper">
            <div class="col-12 col-md-12">
                <div class="row">
                    <h1 class="section-header">
                        <div>Add User</div>
                    </h1>
                    <div class="col-12">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>User name</label>
                                <input type="text" class="form-control" name="username" placeholder="User name" required>
                            </div>
                            <div class="form-group">
                                <label>Full name</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Full name" required>
                            </div>
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" class="form-control" name="birthday_user" placeholder="Birthday" required>
                            </div>
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="number" class="form-control" name="phone_number" placeholder="Phone number" required>
                            </div>
                            <div class="form-group">
                                <label>Gmail</label>
                                <input type="gmail" class="form-control" name="gmail" placeholder="Gmail" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address" required>         
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="img" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Permission</label>
                                <input type="text" class="form-control" name="permission" placeholder="Permission" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" placeholder="Password" required>         
                            </div>
                            <button type="submit" class="btn btn-primary">ADD</button>
                            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    require_once "App/View/admin/layouts/footer.php";
    ?>