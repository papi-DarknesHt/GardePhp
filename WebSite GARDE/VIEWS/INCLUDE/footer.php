<footer class="bg-body-secondary;">
    <div style="height: 18vh;display: flex;">
        <div class="left">
            <ul>
                <li><a class="link-light" href="">A Propos</a></li>
                <li><a class="link-light" href="">Contacter-nous</a></li>
                <li><a class="link-light"href="">Terms et Conditions</a></li>
                <li><a class="link-light"href="">Licence</a></li>
            </ul>
        </div>
        <div class="right">
            <ul>
                <li> <a><img class="icon size-icon"src="ASSET/IMAGES/mail.svg" alt="instagram" ></a></li>
                <li> <a><img class="icon size-icon"src="ASSET/IMAGES/facebook.svg" alt="instagram"></a></li>
                <li> <a><img class="icon size-icon"src="ASSET/IMAGES/instagram.svg" alt="instagram"></a></li>
                <li> <a><img class="icon size-icon"src="ASSET/IMAGES/twitter.svg" alt="instagram"></a></li>
            </ul>

        </div>
    </div>
    <div style="width: 100%; display: flex; justify-content: center;">
        <p style="font-weight: bold">Tous droits réservés.&copy;2024 Garde.</p>
        <i class="fa-brands fa-facebook"></i>
    </div>
</footer>
<style>
   
</style>


<!--    JS-->
<script src="ASSET/JS/script.js"></script>
<script src="ASSET/JS/jquery-3.1.17.min.js"></script>
<script src="ASSET/JS/popper.js"></script>
<script src="ASSET/BOOTSTRAPS/JS/bootstrap.min.js"></script>
<?php
    require_once "script.php";
?>
<script>
   
// Afficher ou masquer le bouton en fonction de la position de défilement de la page
window.onscroll = function() {afficherBouton()};

function afficherBouton() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("btnRetourHaut").style.display = "block";
    } else {
        document.getElementById("btnRetourHaut").style.display = "none";
    }
}

// Sélectionnez l'élément de menu déroulant
var langSelect = document.getElementById("langSelect");

// Ajoutez un écouteur d'événements pour détecter le changement de sélection
langSelect.addEventListener("change", function() {
    // Récupérez la valeur sélectionnée
    var selectedLanguage = langSelect.value;

    // Envoie de la valeur sélectionnée au script PHP via une requête AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", ".function/language.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText); // Afficher la réponse du serveur (facultatif)
            window.location.reload();
        }
    };
    xhr.send("language=" + selectedLanguage);

});
</script>