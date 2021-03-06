<!Doctype html>
<html lang="fr">      
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--intégration Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Jarditou</title>
</head>
<body>
    <!--Container boostrap-->
    <div class="container">
<!--header: logo et slogan-->
        <header>
            <div class="row">
                <div class="col-6">
                    <img img="fluid" src="src\img\jarditou_logo.jpg" alt="logo jarditou" title="logo jarditou" width="100%">
                </div>
                <div class="col-6 text-right">
                    <h2>Tout le jardin</h2>
                </div>
            </div>
        </header>
<!--menu: liste non ordonnée 3 liens-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">jarditou.com</a>
<!--toggler... bascule vers bouton hamburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>   
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
<!--Menu de navigation formulaire de recherche à droite-->
            <ul class= "navbar-nav mr-auto">
                <li class="nav-item active"><a  class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a  class="nav-link" href="about.php">A propos</a></li>
                <li class="nav-item"><a  class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a  class="nav-link" href="client_connex.php">Se connecter</a></li>
            </ul>
            <form class="form-inline">
                <i class="bi bi-person" src="src\img\person.svg" ></i>
                <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Votre promotion">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
        </nav>
    <!--colonne 8 à gauche pour écran + 992px, colonne 12 pour écran - 992px;
    colonne 4 à droite pour écran + 992px, colonne 12 - 992px.
    Donc, sur écran - 992 px les colonnes sont l'une sur l'autre
--> 
        <div class="row mr-auto ml-auto mb-3 shadow">
            <div class="col-12 col-lg-8">
            <!--Section: présentation de l'entreprise-->
                <section>
                    <br>
                    <article>
                        <h2>L'entreprise</h2>
                        <p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du
                        jardin et du paysagisme.</p>
                        <p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
                        <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens,
                        Péronne, Abbeville, Corbie.</p>
                    </article>
                    <article>
                        <h2>Qualité</h2>
                            <p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout
                        votre projet.</p>
                            <p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>
                    </article>
                    <article>
                        <h2>Devis gratuit</h2>
                        <p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande
                        d’intervention. Vous souhaitez un devis ? Nous vous le réalisons gratuitement. Il vous sera adressé dans les plus brefs délais, par mail ou par courrier. Notre objectif est de répondre le plus rapidement possible à vos besoins et d'offrir un service personnalisé.</p>
                    </article>
                    <br>
                </section>
            </div>
        <!--Colonne droite-->
            <div class="col-12 col-lg-4 bg-warning text-dark">
                <br><br><br><br>
            </div>
        </div>
<!--Pied de page pour second menu, liste ordonnée 3 liens-->
        <footer>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!--toggler... bascule vers bouton hamburger -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>   
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class= "navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="legal.html">Mentions légales</a></li>
                    <li class="nav-item"><a class="nav-link" href="horaires.html">Horaires</a></li>
                    <li class="nav-item"><a class="nav-link" href="plansite.html">Plan du site</a></li>
                </ul>
            </nav>
            </footer>
    </div>
<!--javascript boostrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
