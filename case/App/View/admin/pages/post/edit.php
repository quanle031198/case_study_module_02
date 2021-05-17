
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
                        <div>Edit Post</div>
                    </h1>
                    <div class="col-12">
                        <form method="POST" action="http://localhost/case/PostController/edit/<?php echo $postEdit['id']; ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $postEdit['id']; ?>" />
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="<?php echo $postEdit['title']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Teaser</label>
                                <textarea name="teaser" class="form-control"><?php echo $postEdit['teaser']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Teaser image</label>
                                <input type="file" name="teaser_img" class="form-control" value="<?php echo $postEdit['teaser_img']; ?>" required/>
                                <p><img width="100px"; height="80px;" src="http://localhost/case/<?php echo $postEdit['teaser_img']?>"/></p>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" class="form-control"><?php echo $postEdit['content']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" name="author" class="form-control" value="<?php echo $postEdit['author']; ?>" />
                            </div>
                            <div class="form-group">
                                <label>Created</label>
                                <input type="date" name="created" class="form-control" value="<?php echo $postEdit['created']; ?>" />
                            </div>
                            <div class="form-group">
                                <label>Category_id</label>
                                <input type="number" name="category_id" class="form-control" value="<?php echo $postEdit['category_id']; ?>" />
                            </div>
                            <div class="form-group">
                                <label>User_id</label>
                                <input type="number" name="user_id" class="form-control" value="<?php echo $postEdit['user_id']; ?>" />
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