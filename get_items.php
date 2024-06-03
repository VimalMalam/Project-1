<?php
$database = new SQLite3('database.db');

$query = 'SELECT * FROM items';
$result = $database->query($query);

$items = array();
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $items[] = $row;
}

echo json_encode(array('items' => $items));
?>
