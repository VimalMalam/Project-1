<?php
$database = new SQLite3('database.db');

$query = 'CREATE TABLE IF NOT EXISTS items (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    description TEXT NOT NULL,
    price REAL NOT NULL
)';

$database->exec($query);

$query = 'INSERT INTO items (name, description, price) VALUES
    ("Tuxedo", "Black tuxedo, size M", 50.0),
    ("Evening Gown", "Red evening gown, size S", 75.0)';

$database->exec($query);

echo "Database initialized!";
?>
