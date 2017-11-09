<?php
$all = scandir('project');
$projects = [];
foreach($all as $f) {
    if ($f[0] === '.') {
        continue;
    }
    if (!is_dir('project/'.$f)) {
        continue;
    }
    $projects[] = $f;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://use.fontawesome.com/0df17449bf.js"></script>
        <!-- Bootstrap Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/style.css">   
        <title>FURNARI Rémy</title>
    </head>
    
    <body>

    <!-- header-navabar -->
    <header class="container-fluid red">
        <div class="container-fluid row boxheader">
            <div class="col-md-1  green">
                <a href="https://www.simplonlyon.fr/promo3/rfurnari/"><img src="./images/monogram5.png" alt="monogram RF" class="monogram"></a>
            </div>

            <div class="offset-md-8 col-md-3 yellow">
                <nav>
                    <ul class="menu">
                        <li>
                            <a href="#">Mes Projets
                                <!-- <ul>
                                    <?php foreach($projects as $p) { ?>
                                    <li>
                                        <a href="<?php echo 'project/'.$p; ?>">
                                            <?php echo $p; ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul> -->
                            </a>
                        </li>
                        <li><a href="#01">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- projet -->
    <section class="container-fluid green">
        <div class="boxtitle">
            <div class="nom">
                <h3>Rémy FURNARI</h3>
            </div>
            
            <div class="titre">
                <h1>Développeur web</h1>
            </div>
        </div>
    
        <div class="box">
            <div class="project">
                <a href="#mesprojets" class="button">Découvrez mes projets</a>
                <img class="screen"src="images/mario.png" width="130" height="90">
                <img class="screen"src="images/HelpInCode.png" width="130" height="90">
            </div>
            
            <div class="cv">
                <img class="screen"src="images/cv_frame.png" width="260" height="180">
                <a href="./cv.html" class="button">Mon CV</a> 
            </div> 
        </div>
    </section>
         
            <!-- <section class="main">
                <div class="boxtitle">
                    <div class="nom">
                        <h3>Rémy FURNARI</h3>
                    </div>

                    <div class="titre">
                        <h1>Développeur web</h1>
                    </div>
                </div>
                
                <div class="box">
                    <div class="project">
                        <a href="#mesprojets" class="button">Découvrez mes projets</a>
                        <img class="screen"src="images/mario.png" width="130" height="90">
                        <img class="screen"src="images/HelpInCode.png" width="130" height="90">
                    </div>

                    <div class="cv">
                        <img class="screen"src="images/cv_frame.png" width="260" height="180">
                        <a href="./cv.html" class="button">Mon CV</a> 
                    </div>

                </div>
            </section> -->
                
            <!-- <div clas="list">
                <section class="">
                    <img src="images/mario.png" class="" width="500" height="300" alt="game">
                    <h2 class="">Game</h2>
                    <p class=""></p>
                    <a class="" href="">lien</a>
                    <a class="" href="">GitHub</a>
                </section>
                
                <section class="">
                    <img src="images/HelpInCode.png" class="" width="500" height="300" alt="help">
                    <h2 class="">Forum</h2>
                    <p class=""></p>
                    <a class="" href="">lien</a>
                        <a class="" href="">GitHub</a>
                </section>
            </div> -->
       

        <!-- <footer>
            <ul class="socialLink" id="01">
                <li><a href="https://github.com/Rmyf" class="fa fa-github fa-3x" aria-hidden="true"></a></li>
                <li><a href="https://www.linkedin.com/in/rémy-furnari" class="fa fa-linkedin-square fa-3x" aria-hidden="true"></a></li>
                <li><a href="https://twitter.com/Remy_FURNARI" class="fa fa-twitter fa-3x" aria-hidden="true"></a></li>
                <li><a href="mailto:remy.furnari@gmail.com" class="fa fa-envelope fa-3x" aria-hidden="true"></a></li>
            </ul>
        </footer>         -->
    </body>
</html>