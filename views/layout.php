<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="assets/style.css"> 
</head>
<body>
    <?php include "views/header.php"; ?>

    <main>
        <?php include $content; ?>
    </main>

    <?php include "views/footer.php"; ?>
</body>
</html>
