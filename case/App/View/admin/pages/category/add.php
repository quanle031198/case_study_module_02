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
                        <div>Add Category</div>
                    </h1>
                    <div class="col-12">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Category name</label>
                                <input type="text" class="form-control" name="name_category" placeholder="User name" required>
                            </div>
                            <div class="form-group">
                                <label>Category Image</label>
                                <input type="file" class="form-control" name="img_category" required>
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