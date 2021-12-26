<div>
    <a href="<?= HOST . 'admin/?page=services&action=create' ?>" class="btn">Create New Service</a>
</div>

<div class="table-container">
    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Text</th>
        <th>Actions</th>
    </tr>
    <?php foreach($this->data['services'] as $key => $value): ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['text'] ?></td>
            <td>
                <a class="btn-edit btn-action" href="<?= HOST . 'admin/?page=services&action=edit&id=' . $value['id']?>">Edit</a>
                <a class="btn-delete btn-action"href="<?= HOST . 'admin/?page=services&action=delete&id=' . $value['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>