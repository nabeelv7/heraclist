<main class="flex flex-col gap-7 justify-center items-center min-h-screen">
    <h1 class="text-4xl font-bold">📝 Create new todo</h1>

    <form hx-boost="true" action="/create" class="flex" method="POST">
        <input type="text" name="todo" class="py-2 px-3 border border-base-300 rounded-tl-md rounded-bl-md" placeholder="Enter task here..">

        <button class="py-2 px-4 rounded-tr-md rounded-br-md bg-primary text-primary-content shadow-xs active:scale-90 duration-250 ease-out transition-all border-2 border-primary hover:border-orange-700 hover:shadow-md mountain cursor-pointer">Add Task</button>
    </form>
</main>