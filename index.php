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
            <div class="col-md-1  logo">
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
                        <li><a href="#01" class="offset-md-2">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- projet -->
    <section class="container-fluid main">
        <div class="col-md-10 row boxtitle">
            <div class="offset-md-5 nom">
                <h3>Rémy FURNARI</h3>
            </div>
            
            <div class="offset-md-1 titre">
                <h1>Développeur web</h1>
            </div>
        </div>
    
        <div class="row box">
            <div class="offset-md-1 col-md-4 row project">
                <a href="#mesprojets" class="button">Découvrez mes projets</a>
                    <div class="offset-md-1 col-md-5 screentop">
                        <img class="img-responsive screen"src="images/mario.png" width="130" height="90">
                        <img class="img-responsive screen"src="images/HelpInCode.png" width="130" height="90">
                    </div>
                    <div class="col-md-5 screenbottom">
                        <img class="img-responsive screen"src="images/elievignal.png" width="130" height="90">
                        <img class="img-responsive screen"src="images/HelpInCode.png" width="130" height="90">
                    </div>
            </div>
            
            <div class="offset-md-2 col-md-4 cv">
                <img class="offset-md-3 img-responsive cvimg"src="images/cv_frame.png" width="260" height="180">
                <a href="./cv.html" class="offset-md-4 button">Mon CV</a> 
            </div> 
            
        </div>
    </section>


    <div class="list">
        <div class="row toplist">
            <section class="offset-md-1">
                <a href="http://176.142.133.249/projet-wordpress-simplon/wordpress/">
                <img src="images/elievignal.png" class="img-responsive screenimg" width="600" height="300" alt="help"></a>
                <h2 class="">Cité Scolaire Elie Vignal</h2>
                <p class=""></p>
                <a class="" href="">GitHub</a>
            </section>
        
                
             <section class="offset-md-1">
                 <img src="images/HelpInCode.png" class="img-responsive screenimg" width="600" height="300" alt="help">
                 <h2 class="">Forum</h2>
                 <p class=""></p>
                 <a class="" href="">GitHub</a>
            </section>
    </div>
        <div class="row bottomlist">    
            <section class="offset-md-1">
                 <img src="images/mario.png" class="img-responsive screenimg" width="600" height="300" alt="game">
                 <h2 class="">Game</h2>
                 <p class="">Jeu réalisé en Javascript</p>
                 <a class="" href="">GitHub</a>
            </section>
            <section class="offset-md-1">
                 <img src="images/HelpInCode.png" class="img-responsive screenimg" width="600" height="300" alt="help">
                 <h2 class="">Forum</h2>
                 <p class=""></p>
                 <a class="" href="">GitHub</a>
            </section>
        </div>
         
           
        <footer>
            <ul class="socialLink" id="01">
                <li><a href="https://github.com/Rmyf" class="fa fa-github fa-3x" aria-hidden="true"></a></li>
                <li><a href="https://www.linkedin.com/in/rémy-furnari" class="fa fa-linkedin-square fa-3x" aria-hidden="true"></a></li>
                <li><a href="https://twitter.com/Remy_FURNARI" class="fa fa-twitter fa-3x" aria-hidden="true"></a></li>
                <li><a href="mailto:remy.furnari@gmail.com" class="fa fa-envelope fa-3x" aria-hidden="true"></a></li>
            </ul>
        </footer>        
    </body>
</html>