<div class="divcenter">
    <img src="assets/img/ancienlogo/logobarec.png" style="height:150px; margin-bottom: 40px" />
    <hr>
    <div class="container-fluid " style="padding : 10px; padding-top:25px; padding-bottom:25px; width:80%;">
        <h2> Barec Automatismes</h2>

        <p>Barec Automatisme souhaite une application web donnant accès, après authentification, à des outils afin
            de faciliter la gestion des composants en magasin et le processus de fabrication.
            L’application comportera trois outils :<br>
            • La gestion des PCB : permettant la gestion des circuits imprimés stockés en magasin.<br>
            • La gestion MSL (Moisture Sensitivity Level) : permettant la gestion des composants soumis à un
            MSL c’est-à-dire des composants sensibles à l’humidité et qui disposent d’un temps d’utilisation
            limité.<br>
            • Suivi de la température et de l’humidité (STH) : permettant le suivi de la température et de l'humidité
            d'un lieu afin de surveiller les conditions de l'atelier et des étuves, dans le cadre de la bonne
            conservation des composants.
        </p>


    </div>
    <hr>
    <div class="container-fluid" style="padding : 10px; padding-top:25px; padding-bottom:25px; width:80%;">
        <div class="row">
            <div class="col-6 text-start" style="margin-top:1%">
                <h2> Préparation et installation de la base de données </h2>
                <p> Pour stocker toutes les informations liées au site, il faut en premier lieu mettre en place la
                    future base de données qui contiendra à la fois les informations de login, mais aussi toutes les
                    données liés au site internet.</p>
            </div>
            <div class="col-6">
                <img src="assets/img/bdbarec.png">
            </div>
        </div>

    </div>
    <div class="container-fluid btssio" style="padding : 10px; padding-top:25px; padding-bottom:25px; ">
        <div class="container-fluid" style="width:80%;">
            <div class="row">
                <div class="col-5 text-start" style="margin-top:1%">
                    <h2> Réaliser le processus de login de l'application.</h2>
                    <p> Avant même de réaliser les différentes fonctions de l'application, il faut en premier mettre en
                        place le processus de connexion qui permettra l'affichage de nouvelles pages accessible à
                        l'utilisateur.</p>
                </div>
                <div class="col-7" style="margin-top:1%">
                    <figure>
                        <img src="assets/img/barec3.png">
                        <figcaption class="text-muted" style="margin-top:10px; font-size:small; ">Navbar avant login
                        </figcaption>
                    </figure>
                    <br>
                    <figure>
                        <img src="assets/img/barec4.png">
                        <figcaption class="text-muted" style="margin-top:10px; font-size:small; ">Navbar après login
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding : 10px; padding-top:25px; padding-bottom:25px; width:80%;">
        <div class="row">
            <div class="col-6 text-start" style="margin-top:10%">
                <h2> Réaliser les formulaires des compotant MSL.</h2>
                <p> La fonctionnalité que j'ai eu a réaliser se trouve être la préparation et gestion des composants MSL.
                    <br>
                    On devait en premier lieux renseigner l'identifiant d'un lot de composant, et si celui n'existait pas dans la base de données, il fallait le créer grace a un formulaire.
                    Si le lot existait, il fallait changer son statut grâce a un formulaire.
                </p>
            </div>
            <div class="col-6">
            <figure>
                        <img src="assets/img/barec5.png">
                        <figcaption class="text-muted" style="margin-top:10px; font-size:small; ">Formulaire permettant de vérifier si le lot est déjà existant
                        </figcaption>
                    </figure>
                    <br>
                    <figure>
                        <img src="assets/img/barec2.png">
                        <figcaption class="text-muted" style="margin-top:10px; font-size:small; ">Formulaire proposé si le lot n'existe pas encore
                        </figcaption>
                    </figure>
            </div>
        </div>
    </div>
</div>