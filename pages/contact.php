<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Service Technique</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- Page de contact -->
    <?php require_once(__DIR__."/page_components/header.php")?>
<main class="ctn_main">
    <div class="container_contact">

        <section class="form_message">
            <h2>Laissez-nous un message</h2>
            <form action="./traitements/traitement1.php" method="post">
                <div class="form_group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form_group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form_group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="form_group">
                    <button type="submit" class="btn_send_message">Envoyer</button>
                </div>
            </form>
        </section>

        <section class="info_entreprise">
            <h2>Autres canaux de contact</h2>
            <p>Vous pouvez toujours nous joindre via nos coordonnées ci-dessous.</p>
            <p><i class="fa-solid fa-location-dot"> </i> <strong>Adresse:</strong> 123 Rue des Services, 75000 Lomé, Togo</p>
            <p><i class="fa-solid fa-envelope"> </i> <strong>Email:</strong> contact@servicetech.com</p>
            <p><i class="fa-solid fa-phone"> </i> <strong>Téléphone:</strong> +228 93 14 65 65</p>
        </section>

    </div>
</main>
    <?php require_once(__DIR__."/page_components/footer.php")?>

</body>
</html>
