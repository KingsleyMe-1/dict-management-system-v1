<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD with JavaScript Popup</title>
    <style>
        /* Modal Styling */
        .modal-container {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Table Styling */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Add Item Form Styling */
        #addItemForm {
            margin-top: 20px;
        }

    </style>
</head>

<body>
    <h1>Items List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($_SESSION['items'] as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['description'] ?></td>
                <td><?= $item['price'] ?></td>
                <td>
                    <button onclick="openUpdateForm('<?= $item['id'] ?>')">Edit</button>
                    <form style="display: inline-block;" method="post">
                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                        <button type="submit" name="delete">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Update Form Modal -->
    <div class="modal-container" id="updateFormModal">
        <div class="modal-content">
            <span class="close" onclick="closeUpdateForm()">&times;</span>
            <h2>Edit Item</h2>
            <form method="post" id="updateForm">
                <input type="hidden" name="id" id="updateId">
                <label for="name">Name:</label>
                <input type="text" name="name" id="updateName" required><br>
                <label for="description">Description:</label>
                <input type="text" name="description" id="updateDescription" required><br>
                <label for="price">Price:</label>
                <input type="number" name="price" id="updatePrice" required><br>
                <button type="submit" name="update">Update</button>
            </form>
        </div>
    </div>

    <h2>Add New Item</h2>
    <form method="post" id="addItemForm">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="description">Description:</label>
        <input type="text" name="description" required><br>
        <label for="price">Price:</label>
        <input type="number" name="price" required><br>
        <button type="submit" name="add">Add</button>
    </form>

    <script>
        // JavaScript functions to handle the modal
        function openUpdateForm(id) {
            const item = getItemById(id);
            if (!item) return;

            document.getElementById('updateId').value = item.id;
            document.getElementById('updateName').value = item.name;
            document.getElementById('updateDescription').value = item.description;
            document.getElementById('updatePrice').value = item.price;

            const modal = document.getElementById('updateFormModal');
            modal.style.display = 'block';
        }

        function closeUpdateForm() {
            const modal = document.getElementById('updateFormModal');
            modal.style.display = 'none';
        }
    </script>
</body>

</html>
