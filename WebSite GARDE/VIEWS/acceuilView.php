<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<?php
require_once 'INCLUDE/head.php';
?>

<body>
    <?php
    require_once 'INCLUDE/header.php';
    ?>
    <main>
        <div class="container-main">
            <div class="text"></div>
            <div style="position: absolute; color: white; display: flex;flex-direction: column; align-items:center;">
                <h1>Garde</h1>
                <p><?php echo translate('slogan'); ?></p>
            </div>
            <div class="glass"></div>
        </div>
        <div class="container-about">
            <div class="about-left">
                <div class="box-apropo">
                    <h2><?php echo translate('APropos'); ?></h2>
                    <p>
                        <?php echo translate('garde_presentation'); ?>
                    </p>
                    <button class="btn btn-primary"><?php echo translate('lireplus'); ?></button>

                </div>
            </div>
            <div class="about-right"></div>
        </div>
        <div class="container-main bg-image container-about">
            <div class="text"></div>
            <div class="box-img">
                <div class="right"></div>
                <div class="left" style="display: flex; justify-content: center;align-items: center;">
                    <div style="background-color: wheat; opacity: 0.5;width: 100%;height: 100% "></div>
                    <div style="position: absolute; color: black">
                        <h1>Garde</h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div style="background-color: white; min-height: 100vh;">
                <div class="box-service">
                    <h2>Nos services</h2>
                    <div class="container text-center">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2">
                            <div class="col">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Enquêtes et diagnostic</h5>
                                        <p class="card-text">Etude de faisabilité étude de marché, enquêtes ménages et institutionnelles</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Evaluation de programmes et projets de développement
                                        </h5>
                                        <p class="card-text">
                                            Ligne de base, évaluation à mi-parcours, évaluation finale, évaluation d’impact 
                                            expérimentale et quasi expérimentale
                                        </p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Suivi l’itératif de programmes et projets de développement</h5>
                                        <p class="card-text">Conception, élaboration et mise en oeuvre de système de suivi-évaluation.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" >
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Renforcement de capacités</h5>
                                        <p class="card-text">Formations, encadrements et assistances (managérial, technique et opérationnel)</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Informatique-technologie</h5>
                                        <p class="card-text">
                                            Développement et commercialisation de système d'information, implémentation de 
                                            systeme informatisé (Hardware et software)
                                        </p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Coaching</h5>
                                        <p class="card-text">
                                            Conception et mise en oeuvre de modele d'affaires pour les entreprises (privées, 
                                            publiques et non gouvernementales), Etude de couts de production, de productivité et de profit 
                                            marginal.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>
    <div style="width: auto;position: fixed;left: 5px; bottom: 40px; border:none; border-radius: 10px; background-color: blue;color: white; z-index: 1;">
        <select class="form-select form-select-sm" id="langSelect">
            <?php
            if ($_SESSION['lang'] == "fr") {
            ?>
                <option selected value="fr">FR</option>
                <option value="en">EN</option>
                <option value="cr">CR</option>
            <?php
            } elseif ($_SESSION['lang'] == "en") {
            ?>
                <option value="fr">FR</option>
                <option value="en" selected>EN</option>
                <option value="cr">CR</option>
            <?php
            } else {
            ?>
                <option value="fr">FR</option>
                <option value="en">EN</option>
                <option value="cr" selected>CR</option>
            <?php } ?>
        </select>
    </div>
    <button class="shadow" onclick="retourHaut()" id="btnRetourHaut" title="Retour en haut de la page" style="width: 50px;height: 50px; position: fixed;right: 20px; bottom: 40px; border:none; border-radius: 10px; background-color: blue;color: white; z-index: 1;"><img class="icon" src="ASSET/IMAGES/chevron-up.svg"></button>
    <?php
    require_once 'INCLUDE/footer.php';
    ?>
</body>

</html>