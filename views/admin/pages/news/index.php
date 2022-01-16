<div>
    <a href="<?= HOST . 'admin/?page=news&action=create' ?>" class="btn">Create News Item</a>
</div>

<div class="table-container">
    <table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>title</th>
        <th>publish date</th>
        <th class="table-actions">Actions</th>
    </tr>
    <?php foreach($this->data['news'] as $key => $value): ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td>
                <img style="width: 100px" src="<?= HOST . "/assets/uploads/" . $value['image'] ?>">
            </td>
            <td><?= $value['title'] ?></td>
            <td><?= $value['publish_date'] ?></td>
            <td>
                <a class="btn-edit btn-action" href="<?= HOST . 'admin/?page=news&action=edit&id=' . $value['id']?>">Edit</a>
                <a class="btn-delete btn-action" data-id="<?= $value['id'] ?>" data-page="news">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>