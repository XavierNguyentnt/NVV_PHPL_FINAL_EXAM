<?php
include 'db.php';
$id = intval($_GET['id']);
$result = $conn->query("SELECT * FROM item_sale WHERE id=$id");
$row = $result->fetch_assoc();

$errors = [];
$item_code = $row['item_code'];
$item_name = $row['item_name'];
$quantity = $row['quantity'];
$expired_date = $row['expired_date'];
$note = $row['note'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_code = trim($_POST['item_code']);
    $item_name = trim($_POST['item_name']);
    $quantity = $_POST['quantity'];
    $expired_date = $_POST['expired_date'];
    $note = trim($_POST['note']);

    // Validate
    if (!$item_code || !preg_match('/^[a-zA-Z0-9]+$/', $item_code)) {
        $errors[] = "Item code is required and must not contain special characters.";
    }
    if (strlen($item_code) > 10) {
        $errors[] = "Item code must not exceed 10 characters.";
    }
    if (!$item_name || !preg_match('/^[a-zA-Z0-9\s]+$/', $item_name)) {
        $errors[] = "Item name is required and must not contain special characters.";
    }
    if (strlen($item_name) > 50) {
        $errors[] = "Item name must not exceed 50 characters.";
    }
    if (!$quantity || !is_numeric($quantity)) {
        $errors[] = "Quantity is required and must be a number.";
    }
    if (!$expired_date) {
        $errors[] = "Expired date is required.";
    }
    if (strlen($note) > 60) {
        $errors[] = "Note must not exceed 60 characters.";
    }

    if (!$errors) {
        $stmt = $conn->prepare("UPDATE item_sale SET item_code=?, item_name=?, quantity=?, expired_date=?, note=? WHERE id=?");
        $stmt->bind_param("ssdssi", $item_code, $item_name, $quantity, $expired_date, $note, $id);
        $stmt->execute();
        header("Location: index.php");
        exit;
    }
}
include 'form.php';
?>
