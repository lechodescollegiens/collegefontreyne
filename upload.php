<?php
session_start();
if (!isset($_SESSION["admin"])) {
    exit("Accès refusé.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdfFile'])) {
    $targetDir = "uploads/";
    $file = $_FILES['pdfFile'];
    $fileName = basename($file["name"]);
    $targetFile = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if ($fileType !== "pdf") {
        exit("Seuls les fichiers PDF sont autorisés.");
    }
    if ($file["size"] > 5 * 1024 * 1024) {
        exit("Fichier trop volumineux (max 5 Mo).");
    }
    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        echo "Fichier uploadé avec succès.";
    } else {
        echo "Erreur lors de l'upload.";
    }
} else {
    echo "Requête invalide.";
}
?>
