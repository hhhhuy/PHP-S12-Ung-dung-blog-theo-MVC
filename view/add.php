<h2>Create new post</h2>
<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<form method="post" action="/module2-C0219G1/php/session12/BT-ung-dung-blog-theo-MVC/index.php?page=add">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Teaser</label>
        <textarea name="teaser" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Created</label>
        <input type="date" name="created" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">