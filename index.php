<?php
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Site de recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
<div class="container">
    <?php require_once(__DIR__ . '/header.php'); ?>
    <h1>Site de recettes</h1>
    <?php foreach (getRecipes($recipes) as $recipe): ?>
        <article>
            <h3><?php echo htmlspecialchars($recipe['title']); ?></h3>
            <div><?php echo htmlspecialchars($recipe['recipe']); ?></div>
            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
        </article>
    <?php endforeach; ?>
</div>
<?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>
