<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil- T-Services</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/media_queries.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./script.js" defer></script>
</head>
<body>
<header class="bar_nav">
    <div class="logo_site"><img src="img/logo.jpeg" alt="T-Service" class="logo">
    <div class="titre_site"><h1 class="titre">T-Service</h1></div>
    </div>
        <nav class="contenu_nav">
        <button class="menu-toggle">☰</button>
            <ul class="liens_nav">
                <li><a href="index.php" class="lien">Accueil</a></li>
                <li><a href="./pages/apropos.php" class="lien">A propos</a></li>
                <li><a href="./pages/services.php" class="lien">Services</a></li>
                <li><a href="./pages/contact.php" class="lien">Contact</a></li>
                <li><a href="./pages/publications_liste.php" class="lien">Publications</a></li>
            </ul>
            <button class="btn_cta"><a href="./pages/inscription.php">Commencer</a></button>
        </nav>
    </header>
    <main class="sect_princ">
        <section class="accueil">
            <h1 class="titre_princ">
                Bienvenu sur <br>
             <span class="titre_acceuil">T-Service</span>
            </h1>
            <p class="txt_princ">Votre service Technique Informatique,<br> Réseaux et Automobile disponible h24</p>
            <button class="btn_dec_pls">Decouvrir plus</button>
        </section>
        <section class="description">
            <h2 class="titre_des">
            💻🔧🚗 Qui sommes-nous ?
            </h2>
            <div class="des_box">
            <p class="text_des">
            Nous sommes une entreprise spécialisée dans le support technique en informatique, réseaux et automobile. Grâce à notre expertise, nous offrons des solutions innovantes pour garantir le bon fonctionnement de vos systèmes informatiques, de vos infrastructures réseau et de vos équipements automobiles connectés.
            </p>
            </div>
            <img src="img/fond_description.jpeg" alt="Description" class="img_des">
            <button class="btn_cta">A propos de nous</button>
        </section>
        <section class="contact">
            <h2 class="titre_contact">
            Besoin d’aide ? Une question ? <br> Un avis à partager ?
            </h2>
            <div class="des_box">
                <p class="text_contact">
                Chez T-Service, votre satisfaction est notre priorité ! Que ce soit pour une assistance technique, un conseil, une demande d’intervention ou simplement pour partager votre avis, nous sommes à votre écoute.
                </p>
            </div>
            <img src="img/fond_contact.jpeg" alt="Contact" class="img_contact">
            <button class="btn_dec_pls">Contactez-nous</button>
        </section>
        <section class="services">
            <h2 class="titre_srv">
                Visitez nos différents Services
            </h2>
            <div class="srv_pcp_box">
            <div class="srv_box">
                    <img src="img/auto_service.jpeg" alt="Service Automobile" class="srv_img">
                    <p class="nom_service">Service Automobile</p>
                    <a href="#"><button class="visit">Visiter</button></a>
                </div>
                <div class="srv_box">
                    <img src="img/assistance_service.jpeg" alt="Assistance technique" class="srv_img">
                    <p class="nom_service">Assistance technique</p>
                    <a href="#"><button class="visit">Visiter</button></a>
                </div>
                <div class="srv_box">
                    <img src="img/network_service.jpeg" alt="Service Réseaux" class="srv_img">
                    <p class="nom_service">Services Réseaux</p>
                    <a href="#"><button class="visit">Visiter</button></a>
                </div>
            </div>
        </section>
    </main>
    <footer class="foot">
        <div class="reseaux_sociaux">
            <a href="#" class="lien_reseau"><i class="fa-brands fa-facebook icon"></i></a>
            <a href="#" class="lien_reseau"><i class="fa-brands fa-twitter icon"></i></a>
            <a href="#" class="lien_reseau"><i class="fa-brands fa-linkedin icon"></i></a>
            <a href="#" class="lien_reseau"><i class="fa-brands fa-github icon"></i></a>
        </div>
        <p class="txt_foot">© 2023 T-Service. Tous droits réservés.</p>
    </footer>
</body>
<script>
    const scrollable_background = document.querySelector(".accueil");

window.addEventListener("scroll", function() {
    let offset = window.pageYOffset;
    console.log(offset);
    scrollable_background.style.backgroundPositionY = offset * (-0.7) + "px";
});
</script>
</html>
