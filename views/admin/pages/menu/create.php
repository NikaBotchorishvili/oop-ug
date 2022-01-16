<form class="admin-form" method="post">
    <input type="hidden" name="action" value="store">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" required name="name">
    </div>
    <div class="form-group">
        <label for="path">Path</label>
        <input type="text" required name="path">
    </div>
    <div class="form-group">
        <label for="order">Order</label>
        <input type="text" required name="order">
    </div>

    <div class="form-group">
        <button class="btn">Insert</button>
    </div>
</form>