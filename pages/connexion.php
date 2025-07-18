<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - T-Service</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/media_queries.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../script.js" defer></script>
</head>
<body>
    <?php require_once(__DIR__."/page_components/header.php") ?>
    
    <main class="ins_pcp_box">
        <form action="./traitements/traitement3.php" method="post" class="ins_form">
            <div>
                <label for="email">Email :</label><br>
                <input type="email" name="email" id="email" class="field" required placeholder="votremail@exemple.com"><br>
            </div>
            <div>
                <label for="password">Mot de passe :</label><br>
                <div class="pass">
                    <input type="password" name="password" id="password" class="field" required>
                    <i class="fa-solid fa-eye eye" onclick="togglePassword()"></i>
                </div>
            </div>

            <button type="submit" class="btn_sub">Se connecter</button>

            <?php
            if (isset($_SESSION['erreur'])) {
                echo "<p style='color: red;'>" . $_SESSION['erreur'] . "</p>";
                unset($_SESSION['erreur']);
            }
            ?>
        </form>

        <div class="log_or_sign">
            <p>Pas encore inscrit ?</p>
            <a href="inscription.php">Créer un compte</a>
        </div>
    </main>

    <?php require_once(__DIR__."/page_components/footer.php") ?>
</body>

<script>
function togglePassword() {
    const passwordField = document.getElementById("password");
    const eyeIcon = document.querySelector(".fa-solid");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}
</script>
</html>
