
<?php
$bioNurse = 'Bio : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet interdum risus, tempus fermentum turpis. In condimentum sapien eleifend sed. Nunc aliquam odio ac porttitor gravida. Curabitur id neque ac nibh tempor vulputate.';
$nurses = [
    ['idNurse' =>1,
        'nameNurse' => 'Sara',
        'ageNurse' => 18,
        'picture' => 'assets/nurses.jpg',
        'bioNurse' => $bioNurse,
        'specialitiesNurse' => ['Piqure','Bandage',]
    ],
    ['idNurse' =>2,
        'nameNurse' => 'Sarah',
        'ageNurse' => 18,
        'picture' => 'assets/nurses.jpg',
        'bioNurse' => $bioNurse,
        'specialitiesNurse' => ['Piqure','Prise de tension',]
    ],
    ['idNurse' =>3,
        'nameNurse' => 'Sarra',
        'ageNurse' => 18,
        'picture' => 'assets/nurses.jpg',
        'bioNurse' => $bioNurse,
        'specialitiesNurse' => ['Piqure','Ménage',]
    ],
    ['idNurse' =>4,
        'nameNurse' => 'Saara',
        'ageNurse' => 18,
        'picture' => 'assets/nurses.jpg',
        'bioNurse' => $bioNurse,
        'specialitiesNurse' => ['Piqure','Cuisine',]
    ],
    ['idNurse' =>5,
        'nameNurse' => 'Saarrah',
        'ageNurse' => 81,
        'picture' => 'assets/nurses.jpg',
        'bioNurse' => $bioNurse,
        'specialitiesNurse' => ['Piqure','Vaisselle',]
    ],
];

?>
<body>
<?php
require ('header.php')
?>

<div class ="catalogue-container">
    <div class="catalogue-topbar">
        <div></div>
        <div class="dispo">
            <label for="start">Besoin d'une infirmière pour quand ? : </label>
            <form class="dispo-form">
                <i class="fas fa-ad"></i>
                <input type="date" id="dispo-calendar" class="dispo-calendar form" name="dispo-calendar">
                <input type="button" class ="form" value="Soumettre" onclick="date()">
            </form>
        </div>
        <div><img  id="to-carou" class="catalogue-icons" src="assets/carousel.png" alt="Carousel"></div>
        <div><img  id="to-mosaic" class="catalogue-icons" src="assets/mosaic.png" alt="Mosaic"></div>
    </div>


    <div class = "cards">
        <div class="carou-left">
        </div>

        <?php foreach ($nurses as $nurse) : ?>
            <div class="card-noshow nurse" id="nurse<?= $nurse['id'] ?>">

                <div class="card-img" style="background-image: url('<?= $nurse['picture'] ?> ');">
                </div>

                <div class="card-body">
                <span class="Nurse-name"><?= $nurse['name'] . '</span>, ' . $nurse['age'] . ' ans'; ?>
                 <ul class="card-spec">
                    <?php foreach ($nurse['specialities'] as $speciality) {
                        echo '<li>' . $speciality . '</li>';}
                    ?>
                </ul>
                <span class="nurse-name">Bio : </span><?= $nurse['bio']; ?>
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

</div>

<?php
require('footer.php')
?>
</body>
