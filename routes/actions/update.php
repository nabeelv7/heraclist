<?php

require __DIR__ . "/../../db.php";

$db = connectDB();

$id = (int) $_POST["id"];
$is_done = isset($_POST["is_done"]) ? 1 : 0;


$stmt = $db->prepare("UPDATE todos SET is_done = :is_done WHERE id = :id");
$stmt->execute([
    ":is_done" => $is_done,
    ":id" => $id,
]);

// redirect to home
header("Location: /");
// exit immediately so nothing else is sent and user redirects
exit;
