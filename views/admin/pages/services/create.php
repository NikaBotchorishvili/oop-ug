<form class="admin-form" method="post">
    <input type="hidden" name="action" value="store">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" required name="name">
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text" required></textarea>
    </div>

    <div class="form-group">
        <button class="btn" required>Insert</button>
    </div>
</form>