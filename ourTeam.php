<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fireman</title>
</head>
<body>
<?php
require ('header.php')
?>
<h1>Notre équipe au complet</h1>
<!--<p>Illorum ab nostra erga sint fiat ipse amicos sunt benevolentia quanti tertiam erga ferri nostra
    nosmet nosmet amicos nos illorum termini alteram eodem termini probo modo quanti nullam video in.</p>-->

<!--<div class="allTeamMembers">
    <div class="memberCard">
        <img class="pictureMember" src="assets/pictures-team-member/Olivier-JOUBERT.JPG" alt="Olivier">
        <h2 class="nameMember">Olivier</h2>
        <p>Mind Master</p>
    </div>
    <div class="memberCard">
        <img class="pictureMember" src="assets/pictures-team-member/Jonathan-BANON.JPG" alt="Jonathan">
        <h2 class="nameMember">Jonathan</h2>
        <p>Leadership</p>
    </div>
    <div class="memberCard">
        <img class="pictureMember" src="assets/pictures-team-member/Sara-AJANA.JPG" alt="Sara">
        <h2 class="nameMember">Sara</h2>
        <p>Think well about everyone</p>
    </div>
    <div class="memberCard">
        <img class="pictureMember" src="assets/pictures-team-member/Matthieu-DEJEAN.jpg" alt="Matthieu">
        <h2 class="nameMember">Matthieu</h2>
        <p>Collabore même avec lui même</p>
    </div>
</div>-->



<?php
// Tableau multidimentionel, de quatre tableaux avec picture nom et bio en valeurs;
// Deux boutons du carousel, fleche gauche fleche droite
$ourMemberArray = [
        ['pictureMemberArray'=>'src="assets/pictures-team-member/Olivier-JOUBERT.JPG"','nameMemberArray'=>'Olivier','bioMemberArray'=>'Mind Master'],
        ['pictureMemberArray'=>'src="assets/pictures-team-member/Jonathan-BANON.JPG"','nameMemberArray'=>'Jonathan','bioMemberArray'=>'Leadership'],
        ['pictureMemberArray'=>'src="assets/pictures-team-member/Sara-AJANA.JPG" alt="Sara"','nameMemberArray'=>'Sara','bioMemberArray'=>'Think well about everyone'],
        ['pictureMemberArray'=>'src="assets/pictures-team-member/Matthieu-DEJEAN.jpg"','nameMemberArray'=>'Matthieu','bioMemberArray'=>'Collabore même avec lui même'],
];
?>
<div class="carContainer">
    <div class="arrow-left">
        <img src="assets/left-arrow-transparent.png" alt="Arrow Left" />
    </div>
    <div class="memberCard">
        <img class="pictureMember" <?php echo $ourMemberArray[3]['pictureMemberArray'] ?> alt="Matthieu">
        <h2 class="nameMember"><?php echo $ourMemberArray[3]['nameMemberArray']?></h2>
        <p><?php echo $ourMemberArray[3]['bioMemberArray']?></p>
    </div>
    <div class="arrow-right">
        <img src="assets/right-arrow-transparent.png" alt="arrow right"/>
    </div>
</div>
<?php
require ('footer.php')
?>
<script src="./script.js"></script>
</body>