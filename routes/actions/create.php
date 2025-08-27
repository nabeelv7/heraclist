<?php

require __DIR__ . "/../../db.php";

$db = connectDB();

$todo = $_POST["todo"] ?? "";

if ($todo !== '') {
    $stmt = $db->prepare("INSERT INTO todos (title) VALUES (:title)");
    $stmt->execute([
        ":title" => $todo
    ]);
}

header("Location: /");
exit;
