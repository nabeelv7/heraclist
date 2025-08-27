<?php

$request = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($request) {
    case "/":
        $title = "Heraclist - Home Page";
        $page = __DIR__ . "/routes/page.php";
        break;

    case "/new":
        $title = "Heraclist - Create New Task";
        $page = __DIR__ . "/routes/new/page.php";
        break;

    case "/update":
        require __DIR__ . "/routes/actions/update.php";
        exit; // don't load layout

    case "/create":
        require __DIR__ . "/routes/actions/create.php";
        exit; // don't load layout

    default:
        http_response_code(404);
        $title = "Heraclist - Not Found";
        $page = __DIR__ . "/routes/404.php";
        break;
}

require __DIR__ . "/routes/layout.php";
