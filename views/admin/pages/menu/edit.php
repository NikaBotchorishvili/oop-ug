<form class="admin-form" method="post">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?= $_GET['id']?>">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?= $this->data['menu']['name'] ?>">
    </div>
    <div class="form-group">
        <label for="path">Path</label>
        <textarea name="path"><?= $this->data['menu']['path'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="order">Order</label>
        <input type="text" name="order" value="<?= $this->data['menu']['ord'] ?>">
    </div>
    <div class="form-group">
        <button class="btn">Edit</button>
    </div>
</form>