<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <head>
        <link rel="stylesheet" href="/globals.css">
        <script src="https://cdn.jsdelivr.net/npm/htmx.org@2.0.6/dist/htmx.min.js" integrity="sha384-Akqfrbj/HpNVo8k11SXBb6TlBWmXXlYQrCSqEWmyKJe+hDm3Z/B2WVG4smwBkRVm" crossorigin="anonymous"></script>
    </head>
</head>

<body class="bg-base-100">
    <header>
        <?php include __DIR__ . "/components/navbar.php"; ?>
    </header>
    <?php require $page; ?>
</body>

</html>