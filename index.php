<?php

    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
    {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"PrimFX.com"<khemissianwar@gmail.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
		<html>
			<body>
				<div align="center">
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
				</div>
			</body>
		</html>
		';

        mail("khemissianwar@gmail.com", "CONTACT - Monsite.com", $message, $header);
        $msg="Votre message a bien été envoyé !";
    }
    else{
        $msg="Tous les champs doivent être complétés !";
    }

?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/styleapp.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/nivo-slider.css"/>
        <link rel="stylesheet" href="css/main.css">
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    </head>
    <body id="myPage">
      <script>
          window.sr = ScrollReveal();
      </script>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-77418495-1', 'auto');
        ga('send', 'pageview');

      </script>
        <header class="header">
      <a class="arrowUp" href="#myPage"><img id="arrow" class="arrow img-circle" src="img/arrow.png"/></a>
          <nav class="navbar navbar-perso navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">ACCUEIL</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a  class="nav-link " href="#apropos">A PROPOS</a></li>
                    <li><a  class="nav-link" href="#parcours">MON PARCOURS</a></li>
                    <li><a class="nav-link"  href="#competences">MES COMPETENCES</a></li>
                    <li><a  class="nav-link"href="#projets">MES PROJETS</a></li>
                    <li><a  class="nav-link" href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
      </nav>

                <div class="header-baseline">
                    <div class="header-baseline-1"> Developpeur informatique </div>
                </div>
                <div class="btn"><a href="https://github.com/khemissianouar"><p>Github</p></a></div>
                <div class="btn"><a href="https://www.linkedin.com/in/khemissi-anouar/"><p>linkedin</p></a></div>
                <div class="btn"><p>Github</p></div>



        </header>




              <div class="apropos" id="apropos">


                      <div class="apropos-txt">
                          <div class="apropos-title">
                        <h1>A propos de moi</h1>
                          </div>
                        <img src="img/khemissi.jpg" class="avatar">
                      <p> je m'appelle Khemissi Anouar et je suis actuellement en quartiéme année Programme Global Tech à Epitech lille
                          Je suis un grand passionné d'informatique que j'ai decouvert il y a pres de 4 ans
                          Depuis mes intention ont bien changé , je reste passionné par le web, le front-end ou back-end sont mes points forts
                          je suis à rechercher d'un contrat de professionnalisation et si possible dans le web
                          je suis néanmoins ouvert à toutes autres propositions!
                      </p></div>
              </div>


            <div class="parcours" id="parcours">
                <h1> Mon parcours </h1>
                <div id="LineTime">
                    <div class="container-fluid">

                        <div class="row timeline-centered">
                            <div class="col-md-12 timelineMAIN-title">
                                <ul class="timeline timeline-centered">
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span>Septembre 2017-Ajourd'hui</span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <a href="http://www.epitech.eu/lille/ecole-informatique-lille.aspx">  <h3 class="timeline-title"> Epitech lille</h3></a>
                                            <p>quatriéme année Programme Global Tech</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span>2016-2017</span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <a href="http://www.efficom-lille.fr/" > <h3 class="timeline-title">EFFICOM</h3></a>
                                            <p> Charger de system informatique appliquée</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span>2016</span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <a href="http://www.islaib.rnu.tn/Fr/accueil_46_4"><h3 class="timeline-title">Institut Supérieur des Langues Appliquées et Informatique de Béja</h3></a>
                                            <p>Licence Appliquée de technologie du multimédia et du web</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span>Janvier 2016 - Juin 2016</span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <a href="http://www.islaib.rnu.tn/Fr/accueil_46_4">  <h3 class="timeline-title"> Stage de fin d'etude chez Islaib</h3></a>
                                            <p>
                                                Développement d’une application pour organiser la gestion de stages en PHP

                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span>Juilet 2015 </span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <a href="https://www.tunisietelecom.tn/Fr"  <h3 class="timeline-title">Stage de fin d'année chez tunisie télécom </h3></a>
                                            <p>Développement d’une application pour organiser la gestion de congés  en PHP
                                            </p>                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span>Janvier 2016 - Juin 2016</span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <h3 class="timeline-title"> Stage de fin d'etude chez Islaib</h3>
                                            <p>Développement d’une application pour organiser la gestion de congés  en PHP</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item period">
                                        <div class="timeline-marker"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


                <div class="l-container"
                  <div id="competences" class="competences text-center">
       <div class="title-black">
           <h1>Mes compétences</h1>
       </div>
       <div class="competenceInfo">
           <div class="row">
               <div class="col-sm-16 col-xs-16 col-md-16 col-lg-16 web">
                   <h2>Web</h2>
                   <div id="html" class="progress"></div>
                   <div id="css" class="progress"></div>
                   <div id="bootstrap" class="progress"></div>
                   <div id="javascript" class="progress"></div>
                   <div id="jquerry" class="progress"></div>
                   <div id="meteor" class="progress"></div>
                   <div id="php" class="progress"></div>
               </div>
               <div class="col-sm-16 col-xs-16 col-md-16 col-lg-16 prog">
                   <h2>Programmation</h2>
                       <div id="java" class="progress"></div>
                       <div id="cp" class="progress"></div>
                       <div id="python" class="progress"></div>
                       <div id="caml" class="progress"></div>
               </div>
               <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 bd">
                   <h2>Base de données</h2>
                   <div id="sql" class="progress"></div>
                   <div id="nosql" class="progress"></div>
               </div>
               <div class="autre">
                   <h2>Autres</h2>
                   <div id="uml" class="progress"></div>
                   <div id="suiteoffice" class="progress"></div>
                   <div id="suiteadobe" class="progress"></div>
               </div>
           </div>
       </div
   </div>


            <div class="projets" id="projets">

                <h1>Mes Projets</h1>

                <div class="container">
                    <?php for ($j=1; $j <3; $j++): ?>
                    <div class="row">
                        <?php for ($i=1; $i <3 ; $i++): ?>

                        <article class="col-xs-6 work" id="realisation-<?= $i .'-'.$j ?>">
                            <img src="http://lorempicsum.com/futurama/460/250/<?= $i ?>"/><br>
                            <strong> ma réalisation<?= $j .'-'.$i ?></strong><br>
                            <em>Wordpress</em>
                            <div class="work_detail">
                                <hr>
                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="work_slideshow stagger4">
                                            <img src="http://lorempicsum.com/futurama/460/250/1">
                                            <img src="http://lorempicsum.com/futurama/460/250/2">
                                            <img src="http://lorempicsum.com/futurama/460/250/3">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <h2 class="stagger1">Mes Project <?=$i .'-'.$j ?></h2>
                                        <p class="stagger2"><em>Word Press</em></p>
                                        <p class="stagger3"> s,vpoepovjoejoivjeoijv</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </article>
                        <?php endfor; ?>
                    </div>
                    <div class="row row-detail"></div>
                    <?php endfor; ?>
                </div>
            </div>
        
          <div class="l-container">
            <div class="contact-form" id="contact">
                <div class="btn1"><h1>Contact</h1></div>
                  <form class="form" action="" method="post" >
                      <div class="input">
                      <input type="text" placeholder="Votre Nom" class="form-input" required name="nom"><br>
                    <span>Vous devez saiser Votre nom</span>
                          </div>
                      <div class="input">
                          <input type="email" placeholder="Votre Email" class="form-input" required name="mail"><br>
                          <div class="input">
                              <textarea class="form-textarea" placeholder="Votre Message" required name="message"></textarea>
                          </div>
                              <input type="submit"class="btn" name="mailform" value="Envoyer"/>
                      </div>
                  </form>
                <?php
                if(isset($msg))
                {
                    echo $msg;
                }
                ?>
          </div>

            <div class="contact-info">
              <h2> Contact Info</h2>
              <ul class="contact-list">
                <li><i class="fa fa-heart"></i>77 Rue Balzac lille59000</li>
                <li><i class="icon icon-ihone"></i>07 53 27 04 03</li>
                <li><i class="icon icon-mail"></i>khemissianwar@gmail.com</li>
              </ul>
            </div>
          </div>

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/progressbar.js"></script>
        <script src="js/scrollreveal.js"></script>
      <script src="js/scrollpsy.js"></script>
        <script src="js/main.js"></script>
        <script src="js/reveal.js"></script>
            <script src="js/app.js"></script>
            <script src="js/jquery.nivo.slider.pack.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
