<?php
include 'db.php';
// Xử lý xóa
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM item_sale WHERE id=$id");
    header("Location: index.php");
    exit;
}
$result = $conn->query("SELECT * FROM item_sale ORDER BY id ASC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sale Items</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Sale Items</h2>
    <a href="add.php" class="button">Add New</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Expired date</th>
            <th>Note</th>
            <th>Action</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['item_code']) ?></td>
            <td><?= htmlspecialchars($row['item_name']) ?></td>
            <td><?= $row['quantity'] ?></td>
            <td><?= $row['expired_date'] ?></td>
            <td><?= htmlspecialchars($row['note']) ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
                <a href="index.php?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this item?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
