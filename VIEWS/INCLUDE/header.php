<header class="header-class">
    <!--    nav-strat-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!--            logo-->
            <a class="navbar-brand" href="index.php?page=acceuil" style="width: 10%;"><img src="Asset/IMAGES/Garde.png" alt="LogoGarde" style="width: 100px; z-index: 1000;"></a>
            <!--            bouton mini ecran-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-around menu" id="navbarNavDropdown" style="width: 90%; ">
                <ul class="navbar-nav justify-content-around" style="width: 50%;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><?php echo translate('Acceuil'); ?></a>
                    </li>
                    <!--dropdown a propos-->
                    <li class="nav-item dropdown" id="servicesDropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo translate('APropos'); ?>
                        </a>
                        <!--                        sous menu a propos-->
                        <ul class="dropdown-menu" style="width: 250px;">
                            <!--                            menu persentation garde-->
                            <li>
                                <a class="dropdown-item" href="#">Presentation Garde</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <!--                            menu domaine d'expertise-->
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Domaine d'Expertise
                                </a>
                                <!--                                    sous menu domaine d'expertise-->
                                <ul class="dropdown-menu show">
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Sondage d'opinion</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Sondage Electoraux</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Recensement</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Etude d'Impact</a></li>
                                </ul>
                                <!--                                    end sous menu service statistiques-->
                            </li>
                            <div class="dropdown-divider"></div>
                            <!--                            menu resource humaine-->
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Etudes Economiques
                                </a>
                                <!--                                sous menu etude economiques-->
                                <ul class="dropdown-menu show">
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Etude de Marche</a></li>
                                    <li><a class="dropdown-item" href="#">Redaction de Plan d'Affaire</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Diagnostique economique</a></li>
                                    <li class="dropdown-submenu" style="word-wrap: break-word;"><a class="dropdown-item" href="#">Elaboration de plan de<br>developpement</a></li>
                                </ul>
                                <!--                                end sou menu etude economiques-->
                            </li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Structure Organisationnelle</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Status Legal</a></li>

                        </ul>
                        <!--                        end sous menu apropos-->
                    </li>
                    <!--                    end dropdown a propos-->


                    <!--                    dropdown projet-->
                    <li class="nav-item dropdown" id="servicesDropdown2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo translate('projet'); ?>
                        </a>
                        <!--                        sous menu projet-->
                        <ul class="dropdown-menu" style="width: 250px;">
                            <li><a class="dropdown-item" href="index.php?page=test">Projets Recents</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Banque de Projets</a></li>
                        </ul>
                        <!--                        end sous menu projet-->
                    </li>
                    <!--                    dropdown service-->
                    <li class="nav-item dropdown" id="servicesDropdown3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php echo translate('service'); ?>
                        </a>
                        <!--                            sous menu service-->
                        <ul class="dropdown-menu" style="width: 250px;">
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services Statistiques
                                </a>
                                <!--                                    sous menu service statistique-->
                                <ul class="dropdown-menu show">
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Sondage d'opinion</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Sondage Electoraux</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Recensement</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Etude d'Impact</a></li>
                                </ul>
                                <!--                                    end sous menu service statistiques-->
                            </li>
                            <div class="dropdown-divider"></div>
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Etudes Economiques
                                </a>
                                <!--                                sous menu etude economiques-->
                                <ul class="dropdown-menu show">
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Etude de Marche</a></li>
                                    <li><a class="dropdown-item" href="#">Redaction de Plan d'Affaire</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Diagnostique economique</a></li>
                                    <li class="dropdown-submenu" style="word-wrap: break-word;"><a class="dropdown-item" href="#">Elaboration de plan de<br>developpement</a></li>
                                </ul>
                                <!--                                end sou menu etude economiques-->
                            </li>
                            <div class="dropdown-divider"></div>
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Suivi-Evaluation
                                </a>
                                <!--                                 sous menu suivi evaluation-->
                                <ul class="dropdown-menu show">
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Mise en place de Systeme de<br>Suivi</a></li>
                                    <li><a class="dropdown-item" href="#">Elaboration de PMP</a></li>
                                    <li><a class="dropdown-item" href="#">Ligne de base</a></li>
                                    <li><a class="dropdown-item" href="#">Evaluation de projet</a></li>
                                </ul>
                                <!--                                end sous menu suivi evaluation-->
                            </li>
                            <div class="dropdown-divider"></div>
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Service Informatiques
                                </a>
                                <!--                                sous menu service informatique-->
                                <ul class="dropdown-menu show">
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Formation de logiels<br>specialises</a></li>
                                    <li><a class="dropdown-item" href="#">Creation de site Web</a></li>
                                    <li><a class="dropdown-item" href="#">Installation de reseau<br>informatique</a></li>
                                    <li><a class="dropdown-item" href="#">Developpement de progiciels</a></li>
                                    <li><a class="dropdown-item" href="#">Developpement de Base de<br>donnees</a></li>
                                </ul>
                                <!--                                end sous menu service informatique-->
                            </li>
                        </ul>
                        <!--                        end sou menu service-->
                    </li>
                    <!--                    end dropdown service-->
                </ul>
            </div>
        </div>
    </nav>
</header>