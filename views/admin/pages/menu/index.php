<div>
    <a href="<?= HOST . 'admin/?page=menu&action=create' ?>" class="btn">Create New Menu Item</a>
</div>

<div class="table-container">
    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Path</th>
        <th>Order</th>
        <th class="table-actions">Actions</th>
    </tr>
    <?php foreach($this->data['menu'] as $key => $value): ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['path'] ?></td>
            <td><?= $value['ord'] ?></td>
            <td>
                <a class="btn-edit btn-action" href="<?= HOST . 'admin/?page=menu&action=edit&id=' . $value['id']?>">Edit</a>
                <a class="btn-delete btn-action" data-id="<?= $value['id'] ?>" data-page="menu">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>