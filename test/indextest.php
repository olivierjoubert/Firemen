<!DOCTYPE html>
<html lang="fr">
<?php
$titlePage = 'La caserne de Stalingrad';
require '../head.php';
?>

<body>
<div class="whole_page">
    <?php
    require('../header.php')
    ?>
    <div class="main-container-index">

        <div class="main-divs main-div-left">
            <a href="formulaire.php">
                <p class="titles">Une urgence ?</p>
                <img id="clipped-left" src="https://cdn.pixabay.com/photo/2020/03/08/22/44/fire-4913958_960_720.jpg" alt="">
            </a>
        </div>
        <div class="div-logo">
            <img id="clipped-logo" src="assets/adoptePompier.png" alt="">
        </div>
        <div class="main-divs">
            <a href="catalogue.php">
                <p class="titles">Besoin de compagnie ?</p>
                <img id="clipped-right" src="https://cdn.pixabay.com/photo/2013/11/19/20/21/fireman-213453_960_720.jpg" alt="">
            </a>
        </div>

    </div>

    <?php require('../footer.php') ?>
</div>
</body>
</html>