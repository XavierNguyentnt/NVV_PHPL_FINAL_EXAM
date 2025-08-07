<!DOCTYPE html>
<html>
<head>
    <title><?= isset($row) ? 'Edit' : 'Add' ?> Item</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2><?= isset($row) ? 'Edit' : 'Add' ?> Item</h2>
    <?php if (!empty($errors)): ?>
        <ul class="errors">
            <?php foreach($errors as $e) echo "<li>$e</li>"; ?>
        </ul>
    <?php endif; ?>
    <form method="post">
        <label>Item Code:</label><br>
        <input type="text" name="item_code" value="<?= htmlspecialchars($item_code ?? '') ?>"><br><br>
        <label>Item Name:</label><br>
        <input type="text" name="item_name" value="<?= htmlspecialchars($item_name ?? '') ?>"><br><br>
        <label>Quantity:</label><br>
        <input type="number" name="quantity" value="<?= htmlspecialchars($quantity ?? 100) ?>"><br><br>
        <label>Expired Date:</label><br>
        <input type="date" name="expired_date" value="<?= htmlspecialchars($expired_date ?? '') ?>"><br><br>
        <label>Note:</label><br>
        <input type="text" name="note" value="<?= htmlspecialchars($note ?? '') ?>"><br><br>
        <button type="submit">Save</button>
        <a href="index.php" class="button">Back</a>
    </form>
</body>
</html>
