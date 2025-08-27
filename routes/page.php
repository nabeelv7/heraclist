<?php

require __DIR__ . "/../db.php";

$db = connectDB();

$stmt = $db->query("SELECT * FROM todos");
$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="flex flex-col gap-7 justify-center items-center min-h-screen">
    <h1 class="text-4xl font-bold">📝 Todo List</h1>
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li class="text-xl flex gap-2">
                <?= htmlspecialchars($todo["title"]) ?>

                <form method="POST" action="/update">
                    <input type="hidden" name="id" value="<?= $todo["id"] ?>">
                    <input class="checkbox checkbox-primary" type="checkbox" name="is_done"
                        onchange="this.form.submit()"
                        <?= $todo["is_done"] ? "checked" : "" ?>>
                </form>

            </li>
        <?php endforeach; ?>
    </ul>
</main>