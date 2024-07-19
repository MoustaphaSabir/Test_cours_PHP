<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mon blog !!</h1>
    <?php
    $articles = scandir('./bloc');
    foreach ( $articles as $article) {
        echo file_get_contents('./bloc' . $article);
        echo $article. '<br>';
    }

    ?>
</body>
</html>