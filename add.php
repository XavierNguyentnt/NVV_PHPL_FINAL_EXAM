<?php
include 'db.php';
$errors = [];
$item_code = $item_name = $quantity = $expired_date = $note = '';
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
    if (!$item_name || !preg_match('/^[a-zA-Z0-9\s]+$/', $item_name)) {
        $errors[] = "Item name is required and must not contain special characters.";
    }
    if (!$quantity || !is_numeric($quantity)) {
        $errors[] = "Quantity is required and must be a number.";
    }
    if (!$expired_date) {
        $errors[] = "Expired date is required.";
    }
    if (!$errors) {
        $stmt = $conn->prepare("INSERT INTO item_sale (item_code, item_name, quantity, expired_date, note) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdss", $item_code, $item_name, $quantity, $expired_date, $note);
        $stmt->execute();
        header("Location: index.php");
        exit;
    }
}
include 'form.php';
?>