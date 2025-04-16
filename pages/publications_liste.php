<?php
if (isset($_SESSION['success'])) {
    echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
    unset($_SESSION['success']); // Clear the success message
}

if (isset($_SESSION['error'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
    unset($_SESSION['error']); // Clear the error message
}
?>

<?php
// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=t-service;charset=utf8", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

// Récupération des publications
$stmt = $pdo->query("SELECT * FROM publications ORDER BY date_publication DESC");
$publications = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publications - T-Service</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php require_once(__DIR__."/page_components/header.php"); ?>

    <main>
        <h1>📰 Nos Publications</h1>
        <p>Découvrez nos dernières publications sur les services que nous proposons.</p>
        <section class="invit_a_publi">
            <div class="invit">
                <h2>Vous pouvz publier vous meme puplier ici 👉<a href="./publication.php">Publier</a></h2>
            </div>
        </section>
        <section>
            <h2>📋 Dernières publications</h2>
            <?php foreach ($publications as $pub): ?>
                <div style="margin-bottom: 30px; border-bottom: 1px solid #ccc; padding-bottom: 20px;">
                    <h3><?= htmlspecialchars($pub['nom']) ?></h3>
                    <img src="<?= '../uploads/' . htmlspecialchars($pub['img']) ?>" alt="Image" style="width: 300px;"><br>
                    <p><?= nl2br(htmlspecialchars($pub['description'])) ?></p>
                    <p><em>Publié le : <?= date('d M Y, H:i', strtotime($pub['date_publication'])) ?></em></p>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <?php require_once(__DIR__."/page_components/footer.php")?>
</body>
</html>
