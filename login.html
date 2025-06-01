<?php
$dir = "uploads/";
$pdfs = [];
if (is_dir($dir)) {
    $files = array_diff(scandir($dir, SCANDIR_SORT_DESCENDING), ['.', '..']);
    $pdfs = array_filter($files, function($f) use ($dir) {
        return is_file($dir . $f) && strtolower(pathinfo($f, PATHINFO_EXTENSION)) === "pdf";
    });
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>L'écho des collégiens</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>L'écho des collégiens</h1>
    <nav><a href="login.html">Espace admin</a></nav>
</header>
<main>
    <h2>Journaux disponibles</h2>
    <ul>
    <?php if (count($pdfs) > 0): ?>
        <?php foreach ($pdfs as $pdf): ?>
            <li><a class="pdf-link" href="uploads/<?= htmlspecialchars($pdf) ?>" target="_blank">📄 <?= htmlspecialchars($pdf) ?></a></li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>Aucun journal disponible.</li>
    <?php endif; ?>
    </ul>
</main>
<footer>
    <p>&copy; 2025 L'écho des collégiens</p>
</footer>
</body>
</html>
