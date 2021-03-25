<!DOCTYPE html>
<html lang="fr">
<?php
require('head.php')
?>
<body>
<div class="whole_page">
    <?php
    require('header.php')
    ?>
    <div class="main-container">
        <h1 class="equipe">Découvrez notre équipe à travers ce carroussel</h1>
        <!--<p>Illorum ab nostra erga sint fiat ipse amicos sunt benevolentia quanti tertiam erga ferri nostra
            nosmet nosmet amicos nos illorum termini alteram eodem termini probo modo quanti nullam video in.</p>-->
        <?php
        $ourMemberArray = [
            ['id' =>1,'pictureMemberArray'=>'src="assets/pictures-team-member/Olivier-JOUBERT.JPG"','nameMemberArray'=>'Olivier','bioMemberArray'=>'Mind Master'],
            ['id' =>2,'pictureMemberArray'=>'src="assets/pictures-team-member/Jonathan-BANON.JPG"','nameMemberArray'=>'Jonathan','bioMemberArray'=>'Leadership'],
            ['id' =>3,'pictureMemberArray'=>'src="assets/pictures-team-member/Sara-AJANA.JPG" alt="Sara"','nameMemberArray'=>'Sara','bioMemberArray'=>'Think well about everyone'],
            ['id' =>4,'pictureMemberArray'=>'src="assets/pictures-team-member/Matthieu-DEJEAN.jpg"','nameMemberArray'=>'Matthieu','bioMemberArray'=>'Collabore même avec lui même'],
        ];
        ?>
        <div class="card-container">
            <div class="arrow arrow-left">
                <img src="assets/left-arrow-transparent.png" alt="Arrow Left" />
            </div>
                <?php foreach ($ourMemberArray as $member) : ?>
                    <div class="card-noshow membeR" id="membeR<?= $member['id'] ?>">
                        <div class="memberCard">
                            <img class="pictureMember" <?= $member['pictureMemberArray'] ?> alt="<?= $member['id'] ?>">
                            <h2 class="nameMember"><?= $member['nameMemberArray']?></h2>
                            <p><?= $member['bioMemberArray']?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <div class="arrow arrow-right">
                <img src="assets/right-arrow-transparent.png" alt="arrow right"/>
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