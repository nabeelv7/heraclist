<?php

require __DIR__ . "/../../db.php";

$db = connectDB();

$id = (int) $_POST["id"];

$stmt = $db->prepare("DELETE FROM todos WHERE id = :id");
$stmt->execute([
    ":id" => $id
]);

header("Location: /");
exit;
