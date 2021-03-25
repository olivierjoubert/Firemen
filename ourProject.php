<!DOCTYPE html>
<html lang="fr">

<?php
$titlePage = 'Notre Projet';
require('head.php')
?>
<body>
<div class="whole_page">
    <?php
    require('header.php')
    ?>
    <div class="main-container">
        <h1 class="titre-caserne">Le projet</h1>
        <div class="img-projet">
            <div class="down">
                <h3 class="text-project">Le moral des français est au plus bas</h3>
                <img class="img-down" src="assets/trend-down.png">
            </div>
                <img class="caserne" src="assets/Caserne.jpg">
            <div class="down">
                <h3 class="text-project">Le besoin de proximité augmente</h3>
                <img src="assets/trend-up.png">
            </div>
        </div>
    </div>
    <?php
    require('footer.php')
    ?>
</div>
<script src="src/teamMember.js"></script>
</body>
</html>