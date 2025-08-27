<?php

require __DIR__ . "/../db.php";

$db = connectDB();

$stmt = $db->query("SELECT * FROM todos");
$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="flex flex-col gap-7 justify-center items-center min-h-screen px-5">
    <div class="flex flex-col gap-2 justify-center items-center">
        <h1 class="text-4xl font-bold">📝 Heraclist</h1>
        <p class="opacity-80">The simplest and fastest todo list app</p>
    </div>

    <section id="todos" class="flex flex-col gap-3">
        <?php if (!$todos): ?>
            <div hx-boost="true" class="text-red-400">
                No todos found 😔. Create one <a class="underline text-blue-400" href="/new"> here</a>
            </div>
        <?php else: ?>
            <div class="border-b">
                <h1 class="text-xl font-medium">All todos</h1>
            </div>
            <ul>
                <?php foreach ($todos as $todo): ?>
                    <li class="text-xl flex gap-10 items-center">
                        <div class="flex gap-3 items-center sm:min-w-sm w-full">
                            <form method="POST" action="/update" class="flex items-center">
                                <input type="hidden" name="id" value="<?= $todo["id"] ?>">
                                <input class="size-5" type="checkbox" name="is_done"
                                    onchange="this.form.submit()"
                                    <?= $todo["is_done"] ? "checked" : "" ?>>
                            </form>

                            <p class="<?= $todo["is_done"] ? "line-through" : "" ?> whitespace-nowrap">
                                <?= htmlspecialchars($todo["title"]) ?>
                            </p>
                        </div>

                        <form method="POST" action="/delete">
                            <input type="hidden" name="id" value="<?= $todo["id"] ?>">
                            <button type="submit" class="text-red-500">&#x2715;</button>
                        </form>

                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>
</main>