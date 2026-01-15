<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nolann</title>
    <link href="interface.css" rel="stylesheet" media="all">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">Mon Site</div>
                <button class="menu-toggle" onclick="toggleMenu()">☰</button>
                <nav>
                    <ul id="menu">
                        <li><a href="file:\Home\Documents\Technologies de l'internet\Nouveau dossier\site.html">Accueil</a></li>
                        <li><a href= "file:///H:/Home/Documents/Technologies%20de%20l'internet/Nouveau%20dossier/Inscription.html#" onclick="showLogin()">Connexion</a></li>
                        <li><a href="file:\Home\Documents\Technologies de l'internet\Nouveau dossier\Inscription.html">Inscription</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main id="accueil">
        <div class="container">
            <h1>Bienvenue sur Mon Site</h1>
            <a href="#contact" class="button">Me Contacter</a>
            <div class="services" id="services">
                <div class="card">
                    <h3>1</h3>
                    <p>Premier para</p>
                </div>
                <div class="card">
                    <h3>2</h3>
                    <p>Deuxieme para</p>
                </div>
                <div class="card">
                    <h3>3</h3>
                    <p>Troisieme para</p>
                </div>
            </div>
        </div>
    </main>
    <footer id="contact">
        <div class="container">
            <p>Email: nolann.servel.etu@univ-lemans.fr | Tél: 07.69.70.70.87</p>
            <p>Mon site est soumis à des droits d'auteur</p>
        </div>
    </footer>
</body>
</html>