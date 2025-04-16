<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - T-Service</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php require_once(__DIR__."/page_components/header.php")?>
    <main class="ins_pcp_box">
        <form action="./traitements/traitement.php" method="post" class="ins_form">
            <div>
            <label for="prenom">Nom :</label><br>
            <input type="text" name="surname" id="nom" class="field" oninput="this.value = this.value.toUpperCase();" required placeholder="DUPONT"><br>  
            </div>
            <div>
            <label for="prenom">Prenom :</label><br>
            <input type="text" name="firstname" id="prenom" class="field" oninput="capitalizeFirstLetter(this)" required placeholder="Albert"><br>
            </div>
            <div>
            <label for="email">Email :</label><br>
            <input type="email" name="email" id="email" class="field" required placeholder="Albertdupont90@gmail.com"><br>
            </div>
            <div>
            <label for="password">Mot de passe :</label><br>
            <div class="pass"><input type="password" name="password" id="password" class="field" required><i class="fa-solid fa-eye eye" onclick="togglePassword()"></i></div>
            </div>
            <div>
            <label for="domain">Domaine :</label><br>
            <select name="domain" id="domain" class="field" required placeholder="none">
                <option value="Assistance Technique">Assistance Technique/Informatique</option>
                <option value="Service Réseau">Services Réseaux</option>
                <option value="Service Automobile">Service Automobile</option>
                <option value="Particulier">Particulier</option>
            </select>
            </div>

            <button type="submit" class="btn_sub">S'inscrire</button>
            <?php
            if (isset($_SESSION['erreur'])) {
                echo "<p style='color: red;'>" . $_SESSION['erreur'] . "</p>";
                unset($_SESSION['erreur']);
            }
            ?>
        </form>
        <div class="log_or_sign">
            <p>Déjà inscrit ?</p>
            <a href="connexion.php" >Se connecter</a>
        </div>
    </main>
    <?php require_once(__DIR__."/page_components/footer.php")?>
</body>
<script>
function capitalizeFirstLetter(input) {
    const value = input.value;
    input.value = value.charAt(0).toUpperCase() + value.slice(1).toLowerCase();
}
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