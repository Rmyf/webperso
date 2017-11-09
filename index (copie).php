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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>FURNARI Rémy</title>
    </head>
    
    <body>
        
            <nav class="navbar navbar-default navbar-fixed-top navbar-left">

                <div class="col-lg-10">
                    <a href="https://www.simplonlyon.fr/promo3/rfurnari/"><img src="./images/monogram5.png" alt="monogram RF" class="monogram"></a>
                <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p>
                </div>

                <!-- <div class="dropdown">
                    <button class="btn btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Portfolio
    </button>
                    <button class="btn btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Contact
    </button>

                </div>
            </nav> -->


            <section class="main">
                <h2>Rémy FURNARI</h2>
                <h3>Developpeur web</h3>
                
                <h1>Work in progress</h1>
                
                <ul class="actions">
				<li><a href="#mesprojets" class="button">Découvrez mes projets</a></li>
				<li><a href="./cv.html" class="button special">Mon cv</a></li>
			</ul>
                <ul>
                    <?php foreach($projects as $p) { ?>
                    <li>
                        <a href="<?php echo 'project/'.$p; ?>">
                            <?php echo $p; ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </section>
            <footer>
            <ul class="socialLink">
            <li><i class="fa fa-github fa-3x" aria-hidden="true"></i></li>
            <li><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></li>
            <li><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></li>
            </ul>
            
            </footer>
        
    </body>
    

    </html>