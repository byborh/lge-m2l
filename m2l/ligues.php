<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Maison des ligues</title>
</head>
<body>
    <header>
        <nav>
          <a href="index.php" id="title">Mais<span class="u-color">on des ligues</span></a>
          <ul>
            <li>
              <a href="service.php">Serv<span class="u-color">ices</span></a>
            </li>
            <li>
              <a href="#">Ligu<span class="u-color">es</span></a>
            </li>
            <li>
                <a href="locaux.php">Loca<span class="u-color">aux</span></a>
            </li>
          </ul>
        </nav>
    </header>
    
    <div class="body">

        <br><br><br>
        <div class="presentation">
            <h2>la Ligue des Sports Scolaires de la Maison des Ligues de Lorraine</h2>
            <p>Vous êtes passionné de sport et vous souhaitez représenter votre lycée dans des compétitions régionales ou même nationales ? Vous êtes au bon endroit ! La Ligue des Sports Scolaires offre aux élèves une plateforme dynamique pour s'engager dans une variété d'activités sportives et atteindre de nouveaux sommets de performance.</p>

            <h3>Conditions et règles générales :</h3>
            <p>Pour participer à nos ligues sportives, vous devez être un élève inscrit dans un lycée de la région. Les entraînements sont généralement organisés après les cours ou pendant les périodes dédiées à l'activité physique. Les compétitions peuvent avoir lieu en semaine ou le week-end, selon le calendrier établi par les différentes fédérations sportives.</p>
        </div>

        <div class="presentation">
            <h3>Nos sports :</h3>
            <p>Nous proposons une gamme variée de sports pour répondre à tous les goûts et aptitudes physiques, comme par exemple :
                <ul>
                    <li>Football</li><br>
                    <li>Basketball</li><br>
                    <li>Tennis</li><br>
                    <li>Volleyball</li><br>
                    <li>Gymnastique artistique</li><br>
                    <li>Natation</li><br>
                    <li>Athlétisme</li><br>
                    <li>Cyclisme</li><br>
                    <li>Handball</li><br>
                    <li>Boxe</li><br>
                    <li>Judo</li><br>
                    <li>Karaté</li><br>
                    <li>Danse</li><br>
                    <li>Yoga</li><br>
                    <li>Escalade</li><br>
                    <li>Ski</li><br>
                    <li>Snowboard</li><br>
                    <li>Course à pied</li><br>
                    <li>Rugby</li>
                </ul>
                
            <div class="images">
                <img src="./css/img/foot-1.jfif" alt="">
                <img src="./css/img/judo-2.jfif" alt="">
            </div>
            <div class="images">
                <img src="./css/img/echec-2.jfif" alt="">
                <img src="./css/img/rugby-2.jfif" alt="">
            </div>

            <h3>Nos champions :</h3>
            <p>Rejoignez-nous et faites partie de notre tradition de succès ! De nombreux élèves de nos ligues sont devenus des champions de la région voire de la France dans leur discipline respective. Mons<span class="u-color">ieur Daros</span>, par exemple, a décroché le titre de champion régional en tenis en 2016, démontrant la qualité de notre programme et le talent de nos athlètes.</p>

            <h3>Boxe :</h3>
            <p>Envie de relever un défi unique et de repousser vos limites ? La boxe est l'une de nos disciplines les plus passionnantes et exigeantes. Nos élèves s'entraînent avec détermination et dédication pour atteindre l'excellence sur le ring. Rejoignez-nous et découvrez votre potentiel caché !</p>
            <p>Voici une petite vidéo des entraînement durant le tournoi du Printemps :</p>
            <video playsinline autoplay muted loop poster="" style="width: 100%">
            <source
                src="./css/img/Jeu d'opposition boxe enfant _ ado.mp4"
                type="video/mp4"
            />
            Your browser does not support the video tag.
            </video>
        </div>

        <div class="presentation">
            <h3>Inscription :</h3>
            <p>L'inscription à la Ligue des Sports Scolaires peut se faire de plusieurs manières. Vous pouvez vous inscrire en ligne via notre site web en remplissant le formulaire d'inscription dédié. Vous pouvez également vous rendre au bureau de la vie scolaire de votre lycée pour obtenir plus d'informations et vous inscrire directement auprès des responsables de l'organisation.</p>
        </div>

    </div>

    <footer class="text-styles">
        <form action="#" method="post">
            <label for="email">Laissez votre e-mail pour être au courant de toutes les nouveautés.</label><br>
            <input type="email" name="email" id="email" placeholder="Saisissez votre adresse e-mail" value=" <?php if(isset($_POST['email'])){echo $_POST['email'];}?>"><br>
            <button id="inscription-btn">S'inscrire</button>
        </form>
        <br>

        <?php
            if(isset($_POST['email'])) {
                if(!empty($_POST['email'])) {
                    $email = $_POST['email'];
                    echo 'Vous êtes inscrit à notre site et recevrez des e-mail de toutes les nouveautés sur ' . $_POST['email'];
                }
            }
        ?>

        <p class="aligner-centre">
            Rejoignez-nous à la Maison des Ligues de Lorraine et découvrez un monde d'opportunités sportives excitantes. Ensemble, cultivons la passion pour le sport et le bien-être, et construisons un avenir plus fort et plus sain pour notre communauté.
        </p>

        <p class="aligner-centre">
            Made by Beibarys and Mathias
        </p>
    </footer>
</body>
</html>