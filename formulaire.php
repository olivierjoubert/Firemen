<!DOCTYPE html>
<?php
$titlePage = 'Formulaire de contact';
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
                <?php
                if (isset($_GET['id'])) {
                    echo "Vous avez choisi de passer un moment agréable avec " . ($_GET ['id']);

                } else {
                    echo "Pin Pon Pin Pon Pin Pon! Vite, on vous envoie quelqu'un !!! ";
                }
                ?>
            </h3>
            <h3 class="texte-du-formulaire dernière-demande-formulaire à-mettre-en-jaune">Indiquez nous où envoyer les
                secours</h3>
            <form class="formulaire-de-contact" action="" method="get">
                <div class="form-cell">
                    <label for="identity">Votre nom :</label>
                    <input type="text" id="identity" name="identity" class="champ" value="" required>
                </div>
                <div class="form-cell">
                    <label for="address">Votre adresse:</label>

                    <input type="text" id="address" name="address" class="champ" value="" required>

                </div>
                <div class="form-cell">

                    <?php
                    if (isset($_GET['id'])) {
                    ?>
                    <div>
                        <label class="formulaire-de-contact"
                               for="action"><?php echo "Choisissez ce que vous voulez faire avec : " . ($_GET ['id']);
                            ?></label>
                        <select class="formulaire-de-contact" name="action" id="action">
                            <option value="action1">PARLER DE LA PLUIE ET DU BEAU TEMPS</option>
                            <option value="action2">BOUCHE A BOUCHE <3</option>
                            <option value="action3">JE SUIS EN FEU...</option>
                        </select>
                    </div>

                </div>
                <?php
                } else {
                    ?>
                    <div>
                        <label class="formulaire-de-contact" for="action">De quoi s'agit-il?</label>
                        <select class="formulaire-de-contact" name="action" id="action">
                            <option value="action1">INCENDIE</option>
                            <option value="action2">URGENCE VITALE</option>
                        </select>
                    </div>
                    <?php
                }
                ?>
                <div>
                    <input class="contact-button" id="submit" type="button" value="Envoyer!">
                </div>
            </form>
        </div>
        <?php
        require('footer.php')
        ?>
    </div>

<script type="text/javascript" src="src/formulaireRecu.js"></script>
</body>
</html>