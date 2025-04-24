<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publications - T-Service</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/media_queries.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../script.js" defer></script>
</head>
<body>
    <?php require_once(__DIR__."/page_components/header.php"); ?>

    <main class="ins_pcp_box">
    <h1>Publier un nouveau service</h1>
      <!-- Formulaire de publication -->
        <section>
            <form action="./traitements/traitement2.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="nom" placeholder="Titre du service/article" required><br><br>
                <textarea name="description" placeholder="Description..." rows="5" required></textarea><br><br>
                <label for="img">Sélectionner une image :</label><br>
                <input type="file" name="img" accept="image/*" id="img" required><br><br>
            <!-- Preview Box -->
            <div class="preview-box" id="preview-box">
                <p>Prévisualisation de l'image :</p>
                <img id="preview-img" src="" alt="Aucune image sélectionnée">
                <span id="file-name"></span>
            </div>
                <button type="submit" class="btn_cta">Publier</button>
                <?php
if (isset($_SESSION['error'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
    unset($_SESSION['error']); // Clear the error message
}
?>
            </form>
        </section>
    </main>

    <?php require_once(__DIR__."/page_components/footer.php")?>

    <script>
       document.querySelector('input[type="file"]').addEventListener('change', function(event) {
    const previewBox = document.querySelector('.preview-box');
    const file = event.target.files[0];
    const reader = new FileReader();
    
    reader.onload = function(e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        previewBox.innerHTML = ''; // Clear the preview box
        previewBox.appendChild(img);
        previewBox.style.display = 'block'; // Show the preview box
    };

    if (file) {
        reader.readAsDataURL(file);
    }
});

    </script>
</body>
</html>
