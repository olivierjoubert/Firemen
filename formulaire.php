<!DOCTYPE html>
<?php
require('head.php')
?>
<html lang="fr">
<body>
<div class="whole_page">
    <?php
    require('header.php')
    ?>
    <div class="main-container">
        <h2 class="texte-du-formulaire">Contact</h2>
        <h3 class="texte-du-formulaire">
        <?php echo "Vous avez choisi de passer un moment agréable avec " . ($_GET ['id']) ?>
        </h3>
        <h3 class="texte-du-formulaire dernière-demande-formulaire">Indiquez lui où se retrouver et pour quoi faire?</h3>
        <form class = "formulaire-de-contact" action="" method="get">
            <div>
                <label for="identity">Votre nom :</label>
                <input type="text" id="identity" name="identity" class="champ">
            </div>
            <div>
                <label for="address">Votre adresse:</label>
                <input type="text" id="address" name="address" class="champ">
            </div>
            <div>
                <label for="action">Quel type d'intervention désirez-vous?</label>
                <select name="action" id="action">
                    <option value="action1">PARLER DE LA PLUIE ET DU BEAU TEMPS</option>
                    <option value="action2">BOUCHE A BOUCHE <3</option>
                    <option value="action3">JE SUIS EN FEU...</option>
                </select>
            </div>
            <div>
                <input type="button" value="Envoyer!" class="contact-button">
            </div>
        </form>
        <script>
            const Alerting = document.querySelector('.contact');
            Alerting.addEventListener('click',function (){
                alert("Votre rendez-vous est pris!");
            })
        </script>
    </div>
    <?php
        require('footer.php')
    ?>
</div>

</body>
</html>