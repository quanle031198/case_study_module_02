
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
                        <div>Edit User</div>
                    </h1>
                    <div class="col-12">
                        <form method="POST" action="http://localhost/case/UserController/edit/<?php echo $userEdit['id']; ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $userEdit['id']; ?>" />
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="<?php echo $userEdit['username']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Fullname</label>
                                <input type="text" name="fullname" value="<?php echo $userEdit['fullname']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" name="birthday_user" value="<?php echo $userEdit['birthday_user']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="number" name="phone_number" value="<?php echo $userEdit['phone_number']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Gmail</label>
                                <input type="gmail" name="gmail" value="<?php echo $userEdit['gmail']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="<?php echo $userEdit['address']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="img" class="form-control" value="<?php echo $userEdit['img']; ?>" required/>
                                <p><img width="100px"; height="80px;" src="http://localhost/case/<?php echo $userEdit['img']?>"/></p>
                            </div>
                            <div class="form-group">
                                <label>Permission</label>
                                <input type="number" name="permission" class="form-control" value="<?php echo $userEdit['permission']; ?>" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" value="<?php echo $userEdit['password']; ?>" />
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" value="Update" class="btn btn-secondary" />
                                <a href="http://localhost/case/PostController/list" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    require_once "App/View/admin/layouts/footer.php";
    ?>