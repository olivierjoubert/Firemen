<?php
$bio = 'Bio : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet interdum risus, tempus fermentum turpis. Suspendisse potenti. Fusce vestibulum feugiat dui, in condimentum sapien eleifend sed. Nunc aliquam odio ac porttitor gravida. Curabitur id neque ac nibh tempor vulputate. Donec egestas arcu nec semper convallis.';

$ourFireFighters = [
    ['id' =>1, 'name' => 'Jean Castex', 'age' => 31, 'picture' => 'https://images.lanouvellerepublique.fr/image/upload/t_1020w/5d1229021f1a90fe7f8b4580.jpg', 'bio' => $bio, 'specialities' => ['Bon cuisinier','Capitaine','Présentation soignée',]],
    ['id' =>2, 'name' => 'Teddy Riner', 'age' => 29, 'picture' => 'https://images.lanouvellerepublique.fr/image/upload/t_1020w/5d1229021f1a90fe7f8b4580.jpg', 'bio' => $bio, 'specialities' => ['Maitre des arts martiaux','Junior','Tolérance approfondie',]],
    ['id' =>3, 'name' => 'Mikel Arteta', 'age' => 36, 'picture' => 'https://images.lanouvellerepublique.fr/image/upload/t_1020w/5d1229021f1a90fe7f8b4580.jpg', 'bio' => $bio, 'specialities' => ['Agilité acrue','Monté de corde top niveau','Egaux surdimensionné',]],
    ['id' =>4, 'name' => 'Mike Horn', 'age' => 45, 'picture' => 'https://images.lanouvellerepublique.fr/image/upload/t_1020w/5d1229021f1a90fe7f8b4580.jpg', 'bio' => $bio, 'specialities' => ['Sens du devoir','Adaptation en milieu hostile développée','Généreux',]],
    ['id' =>5, 'name' => 'Jim Carrey', 'age' => 52, 'picture' => 'https://images.lanouvellerepublique.fr/image/upload/t_1020w/5d1229021f1a90fe7f8b4580.jpg', 'bio' => $bio, 'specialities' => ['Autodérision','Serviable','Jeux de rôle',]],
];

?>


<body>
<?php
require ('header.php')
?>

<div class ="main-container">
    <div class="catalogue-topbar">
        <div></div>
        <div class="dispo">
            <label for="start">Besoin d'un pompier pour quand ? : </label>
            <form class="dispo-form">
                <i class="fas fa-ad"></i>
                <input type="date" id="dispo-calendar" class="dispo-calendar form" name="dispo-calendar">
                <input type="button" class ="form" value="Soumettre" onclick="date()">
            </form>
        </div>
        <div><img  id="to-carou" class="catalogue-icons" src="assets/carousel.png" alt="Carousel"></div>
        <div><img  id="to-mosaic" class="catalogue-icons" src="assets/mosaic.png" alt="Mosaic"></div>
        <div><a href="catalogueFemme.php"></a><img src="assets/women.png" alt="womanButton"></div></div>
    </div>


    <div class = "cards">
        <div class="carou-left">
        </div>

        <?php foreach ($ourFireFighters as $fireFighter) : ?>
            <div class="card-noshow firefighter" id="firefighter<?= $fireFighter['id'] ?>">

                <div class="card-img" style="background-image: url('<?= $fireFighter['picture'] ?> ');">
                </div>

                <div class="card-body">
                <span class="Fireman-name"><?= $fireFighter['name'] . '</span>, ' . $fireFighter['age'] . ' ans'; ?>
                 <ul class="card-spec">
                    <?php foreach ($fireFighter['specialities'] as $speciality) {
                        echo '<li>' . $speciality . '</li>';}
                    ?>
                </ul>
                <span class="Fireman-name">Bio : </span><?= $fireFighter['bio']; ?>
                    <div class="divbutton">
                        <input class="fire-button"
                               type="button"
                               value="Réservez-moi">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="carou-right">
        </div>
    </div>
    <?php require('footer.php') ?>
</div>



<script src="src/catalogue.js"></script>
</body>



