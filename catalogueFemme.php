<!DOCTYPE html>
<html lang="fr">
<?php require('head.php') ?>
<?php require('assets/nurses.php') ?>
<body>
    <div class="whole_page">

        <?php require ('header.php') ?>
        <div class ="main-container">
            <div class="catalogue-topbar">
                <div class="dispo">
                    <label for="start">Besoin de compagnie<br> pour quand ? : </label>
                    <form class="dispo-form">
                        <input type="date" id="dispo-calendar" class="dispo-calendar form" name="dispo-calendar">
                        <input type="button" class ="form" value="  Soumettre  " onclick="date()">
                    </form>
                </div>
            </div>
            <div class="catalogue-icons">
                <div><img  id="to-carou" class="catalogue-icon" src="assets/carousel.png" alt="Carousel"></div>
                <div><img  id="to-mosaic" class="catalogue-icon" src="assets/mosaic.png" alt="Mosaic"></div>
                <div><a href="catalogue.php"><img class="catalogue-icon" src="assets/icon_man2.png" alt="womanButton"></a></div>
            </div>


            <div class = "cards">
                <div class="carou-left arrow-left">
                    <img src="assets/left-arrow-transparent.png" alt="Arrow Left" />
                </div>

                <?php foreach ($peoples as $people) : ?>
                    <div class="card-noshow people" id="people<?= $people['id'] ?>">

                        <div class="card-img" style="background-image: url('<?= $people['picture'] ?> ');">
                        </div>

                        <div class="card-body">
                                <span class="people-name"><?= $people['name'] . '</span>, ' . $people['age'] . ' ans'; ?>
                                 <ul class="card-spec">
                                    <?php foreach ($people['specialities'] as $speciality) {
                                        echo '<li>' . $speciality . '</li>';}
                                    ?>
                                </ul>
                                <span class="people-name">Bio : </span><?= $people['bio']; ?>
                                    <div class="divbutton">
                                        <form method="get" action="formulaire.php">
                                       <input type="hidden" name="id" value="<?= $people['name'] ?>">
                                              <button class="fire-button">Réservez moi</button>
                                        </form>
                                    </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?die; ?>
                <div class="carou-right arrow-right">
                    <img src="assets/right-arrow-transparent.png" alt="arrow right"/>
            </div>
        </div>
        <script src="src/catalogue.js"></script>

    </div>
        <?php require('footer.php') ?>
    </div>
</body>
</html>



