<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0b1e3c;
            color: #ffffff;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
        }

        .box {
            background-color: #3b5fa0;
            color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.25);
        }

        h1, h2 {
            margin-top: 0;
            color: #0b1e3c;
        }

        p {
            line-height: 1.6;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        strong {
            color: #aaaaaa;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        @media (max-width: 700px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }

        .scroll-section {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .scroll-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-section2 {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .scroll-section2.visible {
            opacity: 1;
            transform: translateY(0);
        }

        #top-section {
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        #second-section {
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
    </style>
</head>
<body>

<div class="container section" id="top-section">
    <div class="box profile">
        <div>
            <h1>Lucas Fromenteaux</h1>
            <p><strong>En classe de : </strong> BTS SIO 2ème année, spécialité SLAM</p>
        </div>
    </div>

    <div class="grid">
        <div class="box">
            <h2>Biographie</h2>
            <p>
                Étant plutôt tête en l'air, j'essaie malgré tout de faire de mon mieux envers ce qui m'intéresse. Je suis autonome, et très têtu.
            </p>
        </div>

        <div class="box">
            <h2>Parcours Lycée</h2>
            <p>
                J'ai commencé mes études informatiques en première, où j'avais choisi la classe de STI2D. En Terminale, j'ai ensuite suivi la filière SIN (Sciences d'Information et Numérique).
            </p>
        </div>

        <div class="box">
            <h2>Parcours BTS</h2>
            <p>
                J'ai fait la découverte du BTS SIO en Terminale. J'ai choisi la spécialité SLAM car elle allait mieux avec ce que j'imagine pour moi. En AP on a fait des sites WEB, et des applications.
            </p>
        </div>

        <div class="box">
            <h2>Stages</h2>
            <p>
                Dans mes deux années, j'ai fait mon stage à la PERL. J'ai vite appris WordPress, et comment lier des outils de développement pour aider à créer des tâches compliquées.
            </p>
        </div>
    </div>
</div>

<div class="container scroll-section" id="second-section">
    <div class="box">
        <h2>Contacts</h2>
        <p>
            <a href="https://github.com/Lucas-FRTX">GitHub</a> | <a href="mailto:lucasfromfrance1012@gmail.com">Mail</a>
        </p>
    </div>
    <div class="box">
        <h2>Autres</h2>
        <p>
            Certificat <a href="./includes/Certif PIX.pdf">PIX</a> |
        </p>
    </div>
    <div class="box">
        <h2>CV</h2>
        <p>
            Vous trouverez <a href="./includes/CV Lucas.pdf" download> ICI</a> mon CV.
        </p>
    </div>
</div>
<div class="container scroll-section2" id="third-section">
    <div class="box">
        <h2>Tableau compétence</h2>
        <p>
            <iframe src="./includes/Tableau.pdf" width="100%" height="600px"></iframe>
        </p>
    </div>
</div>

<script>
    const topSection = document.getElementById('top-section');
    const secondSection = document.getElementById('second-section');
    const thirdSection = document.getElementById('third-section');

    const handleScroll = () => {
        const triggerPoint = window.innerHeight * 0.5;
        const triggerPoint2 = window.innerHeight * 1.5;
        const scrollTop = window.scrollY;

        if (scrollTop > triggerPoint) { //Vérifie que l'écran est descendu à moitié
            topSection.style.opacity = 0;
            topSection.style.transform = 'translateY(-40px)';

            secondSection.classList.add('visible'); //Cache la partie 1, affiche la partie 2

            if (scrollTop > triggerPoint2) { //Vérifie que la partie 2 est descendu à moitié
                secondSection.classList.remove('visible');
                secondSection.style.transform = 'translateY(-40px)';

                thirdSection.classList.add('visible'); //Cache la partie 2, affiche la partie 3
            } else {
                secondSection.classList.add('visible');
                secondSection.style.transform = 'translateY(0)';

                thirdSection.classList.remove('visible');
            }
        } else {
            topSection.style.opacity = 1;
            topSection.style.transform = 'translateY(0)';

            secondSection.classList.remove('visible');
        }
    };
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('load', handleScroll);
</script>

</body>
</html>