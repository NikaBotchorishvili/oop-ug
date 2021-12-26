

<form class="admin-form" method="post">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?= $_GET['id']?>">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?= $this->data['service']['name'] ?>">
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text"><?= $this->data['service']['text'] ?></textarea>
    </div>

    <div class="form-group">
        <button class="btn">Edit</button>
    </div>
</form>