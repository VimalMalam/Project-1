<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_id = $_GET['id'];
    // Here you would handle the rental logic, e.g., mark the item as rented in the database
    echo json_encode(array('message' => 'Item rented successfully!'));
}
?>
