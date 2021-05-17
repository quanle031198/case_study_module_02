
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
                        <div>Edit Category</div>
                    </h1>
                    <div class="col-12">
                        <form method="POST" action="http://localhost/case/CategoryController/edit/<?php echo $categoryEdit['id']; ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $categoryEdit['id']; ?>" />
                            <div class="form-group">
                                <label>Category name</label>
                                <input type="text" name="name_category" value="<?php echo $categoryEdit['name_category']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Category image</label>
                                <input type="file" name="img_category" class="form-control" value="<?php echo $categoryEdit['img_category']; ?>" required/>
                                <p><img width="100px"; height="80px;" src="http://localhost/case/<?php echo $categoryEdit['img_category']?>"/></p>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Update" class="btn btn-secondary" />
                                <a href="http://localhost/case/CategoryController/list" class="btn btn-danger">Cancel</a>
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