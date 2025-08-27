<main class="flex flex-col gap-7 justify-center items-center min-h-screen">
    <h1 class="text-4xl font-bold">📝 Create new todo</h1>

    <form action="/create" class="flex gap-2" method="POST">
        <input type="text" name="todo" class="input" placeholder="Enter task here..">
        <button type="submit" class="btn btn-accent">Create</button>
    </form>
</main>