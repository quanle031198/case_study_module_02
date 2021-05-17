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
                        <div>Add Post</div>
                    </h1>
                    <div class="col-12">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title" required>
                            </div>
                            <div class="form-group">
                                <label>Teaser</label>
                                <input type="text" class="form-control" name="teaser" placeholder="Teaser" required>
                            </div>
                            <div class="form-group">
                                <label>Teaser image</label>
                                <input type="file" class="form-control" name="teaser_img" placeholder="Teaser image" required>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <input type="text" class="form-control" name="content" placeholder="Content" required>
                            </div>
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" class="form-control" name="author" placeholder="Author" required>
                            </div>
                            <div class="form-group">
                                <label>Created</label>
                                <input type="date" class="form-control" name="created" placeholder="Creat" required>
                            </div>
                            <div class="form-group">
                                <label>Category name</label>
                                <br/>
                                <select style="font-size: 15px;" class="btn btn-secondary dropdown-toggle " name="category_id">
                                    <option selected>--Category name--</option>
                                    <?php foreach ($categoryList as $key => $categoryName) :  ?>
                                        <option value="<?php echo $categoryName['id']; ?>"><?php echo $categoryName['name_category']; ?></option>
                                    <?php endforeach;  ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>User name</label>
                                <br/>
                                <select style="font-size: 15px;" class="btn btn-secondary dropdown-toggle " name="user_id">
                                    <option selected>--User name--</option>
                                    <?php foreach ($userList as $key => $userName) :  ?>
                                        <option value="<?php echo $userName['id']; ?>"><?php echo $userName['username']; ?></option>
                                    <?php endforeach;  ?>
                                </select>
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