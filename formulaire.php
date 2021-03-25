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
            <h3 class="texte-du-formulaire">

                <?php
                if (isset($_GET['id'])) {
                    echo "Vous avez choisi de passer un moment agréable avec " ;
                    ?>
                <p id="form-name">
                    <?php echo ($_GET ['id']);?>
                </p>
                <?php
                } else {
                    echo "Pin Pon Pin Pon Pin Pon! Vite, on vous envoie quelqu'un !!! ";
                }
                ?>
            </h3>
            <div class="container-flex-row">
                <div class="flex-col-02">
                    <img src=" <?= $_GET( ['picture'] ) ?>" alt="choix_picture"/>
                </div>
                <div class="flex-col-01">
                    <div class="container-form-nom-prénom">
                        <div class="formulaire-nom-préneom">
                            <p>Indiquez nous où envoyer les secours</p>
                        </div>
                    </div>
                    <form class="formulaire-de-contact" action="" method="get">
                        <div class="form-name">
                            <label for="identity">Votre nom :</label>
                            <input type="text" id="identity" name="identity" class="champ" value="" required>
                        </div>

                        <div class="form-lastname">
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
                        <div class="send">
                            <input class="contact-button" id="submit" type="button" value="Envoyer!">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        require('footer.php')
        ?>
    </div>

<script type="text/javascript" src="src/formulaireRecu.js"></script>
</body>
</html>