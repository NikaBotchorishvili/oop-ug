<form class="admin-form" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="store">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" required name="title">
    </div>
    <div class="form-group">
        <label for="short_text">short_text</label>
        <textarea name="short_text"></textarea>
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text"></textarea>
    </div>
    <div class="form-group">
        <label for="text">Image</label>
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <button class="btn">Insert</button>
    </div>
</form>