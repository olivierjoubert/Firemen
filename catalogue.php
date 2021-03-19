<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>


<?php $ourFireFighters = [
    ['id' => 1, 'name' => 'Jean Castex', 'age' => 31, 'picture' => 'https://images.lanouvellerepublique.fr/image/upload/t_1020w/5d1229021f1a90fe7f8b4580.jpg', 'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet interdum risus, tempus fermentum turpis. Suspendisse potenti. Fusce vestibulum feugiat dui, in condimentum sapien eleifend sed. Nunc aliquam odio ac porttitor gravida. Curabitur id neque ac nibh tempor vulputate. Donec egestas arcu nec semper convallis. ', 'specialities' => ['Bon cuisinier','Capitaine','Présentation soignée',]],
    ['id' => 2, 'name' => 'Teddy Riner', 'age' => 29, 'picture' => 'https://images.lanouvellerepublique.fr/image/upload/t_1020w/5d1229021f1a90fe7f8b4580.jpg', 'bio' => 'lorum...', 'specialities' => ['Maitre des arts martiaux','Junior','Tolérance approfondie',]],
    ['id' => 3, 'name' => 'Mikel Arteta', 'age' => 36, 'picture' => 'https://images.lanouvellerepublique.fr/image/upload/t_1020w/5d1229021f1a90fe7f8b4580.jpg', 'bio' => 'lorum...', 'specialities' => ['Agilité acrue','Monté de corde top niveau','Egaux surdimensionné',]],
    ['id' => 4, 'name' => 'Mike Horn', 'age' => 45, 'picture' => 'https://images.lanouvellerepublique.fr/image/upload/t_1020w/5d1229021f1a90fe7f8b4580.jpg', 'bio' => 'lorum...', 'specialities' => ['Sens du devoir','Adaptation en milieu hostile développée','Généreux',]],
    ['id' => 5, 'name' => 'Jim Carrey', 'age' => 52, 'picture' => 'https://images.lanouvellerepublique.fr/image/upload/t_1020w/5d1229021f1a90fe7f8b4580.jpg', 'bio' => 'lorum...', 'specialities' => ['Autodérision','Serviable','Jeux de rôle',]],
];

?>


<body>
<div class ="catalogue-container">
<div class="dispo">
    <label for="start">Besoin d'un pompier pour quand ? : </label>
    <form class="dispo-form">
        <input type="date" id="dispo-calendar" class="dispo-calendar form" name="dispo-calendar">
        <input type="button" class ="form" value="Soumettre" onclick="date()">
    </form>
</div>

<div class = "cards">
    <?php foreach ($ourFireFighters as $fireFighter) : ?>
    <div class="card" id="<?= $fireFighter['id'] ?>">

        <div class="card-img" style="background-image: url('<?= $fireFighter['picture'] ?> ');">
        </div>
        <div class="card-title">
            <span class="Fireman-name"><?= $fireFighter['name'] . '</span>, ' . $fireFighter['age'] . ' ans'; ?>
        </div>
        <div class="card-spec">
            <ul>
            <?php foreach ($fireFighter['specialities'] as $speciality) {
                echo '<li>' . $speciality . '</li>';}
            ?>
            </ul>
        </div>
        <div class="card-desc">
            <span class="Fireman-name">Bio </span><?= $fireFighter['bio']; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>


</div>
<script src="catalogue.js"></script>
</body>
