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
        <h2>Contact</h2>
        <h3>Où se retrouve-t'on et pour quoi faire?</h3>
        <form class = "formulaire" action="" method="get">
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
                    <OPTION>j'ai trop chaud !
                    <OPTION>bouche à bouche please <3
                    <OPTION>j'aimerai une oreille attentive pour raconter ma vie....
                    <OPTION>méga incendie : venez à plusieurs, prenez vos lances, la grande échelle et éteignez-moi ça
                </select>
            </div>
            <div>
                <input type="button" value="Envoyer!" class="contact">
            </div>
        </form>
        <script>
            const HotButton = document.querySelector('.contact');
            HotButton.addEventListener('mouseover',function (){
                HotButton.style.backgroundColor = "red";
            });
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

