<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - T-Service</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/media_queries.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../script.js" defer></script>
</head>
<body>
<?php require_once(__DIR__."/page_components/header.php")?>


<main class="a_propos_page">

    <!-- Présentation générale -->
    <section class="intro_apropos">
        <h1>À propos de T-Service</h1>
        <p>
            T-Service est une entreprise spécialisée dans le support technique informatique, les services réseaux et la mécanique automobile intelligente.
            Notre mission est de garantir un fonctionnement optimal de vos équipements numériques et véhicules à travers une assistance rapide, fiable et professionnelle.
        </p>
    </section>

    <!-- Nos Services détaillés -->
    <section class="services_detail_apropos">
        <h2>Nos Services</h2>
        <ul>
            <li>
                <h3>🛠️ Assistance technique</h3>
                <p>
                    Dépannage informatique, installation de logiciels, suppression de virus, optimisation de performances... Notre équipe intervient à distance ou sur site.
                </p>
            </li>
            <li>
                <h3>🌐 Services Réseaux</h3>
                <p>
                    Conception, installation et sécurisation de réseaux pour particuliers et entreprises. Expertise en câblage, Wi-Fi, serveurs et cybersécurité.
                </p>
            </li>
            <li>
                <h3>🚗 Service Automobile</h3>
                <p>
                    Diagnostic électronique, entretien et réparation de véhicules modernes. Nous combinons expertise mécanique et technologies embarquées.
                </p>
            </li>
        </ul>
    </section>

    <!-- Nos valeurs -->
    <section class="valeurs_apropos">
        <h2>Nos valeurs</h2>
        <ul>
            <li><strong>Professionnalisme :</strong> Des experts certifiés et à l’écoute.</li>
            <li><strong>Disponibilité :</strong> Assistance 24h/24 et 7j/7.</li>
            <li><strong>Transparence :</strong> Des services clairs, des tarifs justes.</li>
            <li><strong>Innovation :</strong> Des solutions modernes et efficaces.</li>
        </ul>
    </section>

    <!-- L'équipe -->
    <section class="equipe_apropos">
        <h2>Notre équipe</h2>
        <p>Chez T-Service, nous croyons que la force d’une entreprise repose sur ses talents. Notre équipe est composée de :</p>
        <ul>
            <li><strong>Joseph Edola WODOME</strong> – Ingénieur Réseaux & Fondateur</li>
            <li><strong>Aminata K.</strong> – Technicienne Support</li>
            <li><strong>David M.</strong> – Mécanicien spécialisé en électronique embarquée</li>
            <li><strong>Sylvain B.</strong> – Expert Sécurité Réseaux</li>
        </ul>
    </section>

</main>

<?php require_once(__DIR__."/page_components/footer.php")?>

</body>
</html>
