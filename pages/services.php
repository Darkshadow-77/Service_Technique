<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=t-service", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT* FROM services";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - T-Service</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
    require_once('./page_components/header.php');
    ?>
    <main class="pcp_spg_box">
    <?php
    foreach($result as $service):?>
        <section class="srv_pr_bcp">
            <div class="srv_des_box">
            <h2 class="tre_srv"><?php echo $service['nom']; ?></h2>
            <p class="des_srv"><?php echo $service['description']; ?></p>
            <button class="apply">Souscrire</button>
            </div>
            <img src=<?php echo"../".$service['img']; ?> alt=<?php echo$service['nom']; ?> class="img_srv">
        </section/>
    <?php
    endforeach; ?>
    </main>
    <?php require_once(__DIR__."/page_components/footer.php")?>
</body>
</html>