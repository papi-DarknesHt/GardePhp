    function backerror() {
    document.getElementById('returbutton').addEventListener('click', function () {
        window.history.back();
    });
}

    // service dropdown1
    var servicesDropdown = document.getElementById('servicesDropdown');

    // Activer le menu déroulant au survol
    servicesDropdown.addEventListener('mouseenter', function() {
    $('.dropdown-toggle', this).dropdown('toggle');
});
    // desactiver
    servicesDropdown.addEventListener('mouseleave', function() {
    $('.dropdown-toggle', this).dropdown('toggle');
});
    // service dropdown2
    var servicesDropdown2 = document.getElementById('servicesDropdown2');
    // Activer le menu déroulant au survol
    servicesDropdown2.addEventListener('mouseenter', function() {
    $('.dropdown-toggle', this).dropdown('toggle');
});
    servicesDropdown2.addEventListener('mouseleave', function() {
    $('.dropdown-toggle', this).dropdown('toggle');
});
    // service dropdown3
    var servicesDropdown3 = document.getElementById('servicesDropdown3');

    // Activer le menu déroulant au survol
    servicesDropdown3.addEventListener('mouseenter', function() {
    $('.dropdown-toggle', this).dropdown('toggle');
});
    servicesDropdown3.addEventListener('mouseleave', function() {
    $('.dropdown-toggle', this).dropdown('toggle');
});
    // service dropdown4
    var servicesDropdown4 = document.getElementById('servicesDropdown4');

    // Activer le menu déroulant au survol
    servicesDropdown4.addEventListener('mouseenter', function() {
    $('.dropdown-toggle', this).dropdown('toggle');
});
    servicesDropdown4.addEventListener('mouseleave', function() {
    $('.dropdown-toggle', this).dropdown('toggle');
});
    // Fonction pour faire défiler vers le haut de la page
    function retourHaut() {
    document.body.scrollTop = 0; // Pour les navigateurs Safari
    document.documentElement.scrollTop = 0; // Pour les autres navigateurs
}

    // Afficher ou masquer le bouton en fonction de la position de défilement de la page
    window.onscroll = function() {afficherBouton()};

    function afficherBouton() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("btnRetourHaut").style.display = "block";
} else {
    document.getElementById("btnRetourHaut").style.display = "none";
}
}

 // Fonction pour faire défiler vers le haut de la page
 function retourHaut() {
    document.body.scrollTop = 0; // Pour les navigateurs Safari
    document.documentElement.scrollTop = 0; // Pour les autres navigateurs
}
