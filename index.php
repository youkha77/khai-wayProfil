
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicone -->
    <link rel="icon" href="ressources/favicon.ico" type="image/x-icon">
    
    
    <!-- Polices de caracteres -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/baseMedias.css">
    <link rel="stylesheet" media="only screen and (width: 320px) and (height: 480px)" href="css/iphone4.css">
    <link rel="stylesheet" media="only screen and (width: 768px) and (height: 1024px)" href="css/iPad_Mini.css">
    <link rel="stylesheet" media="only screen and (width: 360px) and (height: 640px)" href="css/galaxy_S5.css">
    <link rel="stylesheet" media="only screen and (width: 411px) and (height: 731px)" href="css/pixel2.css">
    <link rel="stylesheet" media="only screen and (width: 320px) and (height: 568px)" href="css/iPhone5_SE.css">
    <link rel="stylesheet" media="only screen and (width: 375px) and (height: 667px)" href="css/iPhone6_7_8.css">
    <link rel="stylesheet" media="only screen and (width: 414px) and (height: 736px)" href="css/iPhone6_7_8PLUS.css">
    <link rel="stylesheet" media="only screen and (width: 1024px) and (height: 1366px)" href="css/iPadPro.css">
    <link rel="stylesheet" media="only screen and (width: 375px) and (height: 812px)" href="css/iPhoneX.css">



    <!-- icone -->
    <script src="https://kit.fontawesome.com/81463bf663.js" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

    <!-- GreenSock -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    
    <title>Khai-way LA</title>
</head>
<body>


    
    <!-- Accueil -->
    <header id="accueil">
        <nav id="navigation">
            <img src="ressources/LogoSitePro.png" alt="monlogo" class="logoSite" onclick="toggleNav()">
            <a href="#accueil" class="liensNav" onclick="toggleNav()">Accueil</a>
            <a href="#quiSuisJe" class="liensNav" onclick="toggleNav()">Qui suis-je?</a>
            <a href="#projets" class="liensNav" onclick="toggleNav()">Projets</a>
            <a href="#capable" class="liensNav" onclick="toggleNav()">Services</a>
            <a href="#contact" class="liensNav" onclick="toggleNav()">Contact</a>
            <a class="icon" id="icon" onclick="toggleNav()"><i class="fas fa-bars"></i></a>
        </nav>

        <h1>Khai-way LA</h1>
        <h2>Webdesigner/Développeur Web Junior</h2>

        <a href="#section-about" id="arrow"><i class="fas fa-angle-double-down"></i></a>
    </header>

    <!-- Section qui suis-je? -->
    <section id="section-about" class="section-about">

        <div class="centerH">
            <h2 class="titreAbout">
                Qui suis-je?
            </h2>
            <hr>
        </div>

        <div class="row">
            <div class="col-1-of-2">
                <h3 class="sousTitreAbout"><i class="fas fa-user"></i>
                    A propos de moi
                </h3>
                <p class="paragraphe">
                    Je m'appelle Khai-way, je suis webdesigner et développeur web depuis peu suite à une reconversion profesionnelle.
                    Passionné par le développement web, j'aime expérimenter, découvrir et apprendre des nouvelles technologies.
                    Je me suis auto-formé sur les techniques de création web pour ensuite compléter par une formation dans une école multimédia.
                    Actuellement je suis à la recherche d'un poste afin de pouvoir vous apporter un atout supplémentaire au sein de votre équipe.
                </p>
                <h3 class="sousTitreAbout"><i class="fas fa-code"></i>
                    Compétences techniques
                </h3>
                <p class="paragraphe">
                    <div class="techniques">HTML 5</div>
                    <div class="techniques">CSS 3</div>
                    <div class="techniques">PHP</div>
                    <div class="techniques">Symfony 4</div>
                    <div class="techniques">MySQL</div>
                    <div class="techniques">JavaScript</div>
                    <div class="techniques">Jquery</div>
                    <div class="techniques">Wordpress</div>
                    <div class="techniques">Boostrap</div>
                    <div class="techniques">GIT</div>
                    <div class="techniques">Sass</div>
                    <div class="techniques">Responsive design</div>
                </p>
                <h3 class="sousTitreAbout"><i class="fas fa-desktop"></i>
                    Logiciels
                </h3>
                <p class="paragraphe">
                    <div class="graphisme">Illustrator</div> 
                    <div class="graphisme">Photoshop</div>  
                    <div class="graphisme">Adobe XD</div>
                    <div class="graphisme">PhpStorm</div>
                    <div class="graphisme">Jira</div>
                    <div class="graphisme">GitKraken</div>
                    <div class="graphisme">Docker</div>
                    <div class="graphisme">PhpMyAdmin</div>           
                </p>
                
            </div>
            <div class="col-1-of-2">
                <div class="composition">
                    <img src="ressources/3imgs1.jpg" alt="photo moi 1" class="composition_photo composition_photo--1">
                    <img src="ressources/3imgs2.jpg" alt="photo moi 2" class="composition_photo composition_photo--2">
                    <img src="ressources/3imgs3.jpg" alt="photo moi 3" class="composition_photo composition_photo--3">
                </div>
                <a href="ressources/CV New CDI.pdf" class="cv" target="blank">Mon curriculum vitae</a>
            </div>
        </div>

    </section>

     <!-- Mes projets -->
     <section id="projets">
        
        <h2>Mes projets</h2>
        <hr>

        <div class="Carrousel">
            <div class="Arrows">
              <div class="Arrow" onclick="MakeCenter('Left');"><i class="fas fa-chevron-left"></i></div>
               <div class="Arrow" onclick="MakeCenter('Right');"><i class="fas fa-chevron-right"></i></div>
           </div>
            <div class="New" onclick="MakeCenter(this.id)" id="Left">
              <img src="ressources/linkgoals.jpg" alt="linkgoals">
              <div class="Info">
                <div class="Header">
                 <p>LinkGoals</p>
                 <hr>
               </div>
                <div class="Body">
                 <p>Réalisation d'un menu animé en css et javascript pour une agence web</p>
                 <a href="ressources/LinkGoals/index.html" class="savoirPlus" target="blank">Accèder</a>
               </div>
              </div>
            </div>
            <div class="New" onclick="MakeCenter(this.id)" id="Center">
             
              <img src="ressources/travelbnb.png" alt="travelbnb">
              <div class="Info">
                <div class="Header">
                 <p>TravelBnb</p>
                 <hr>
               </div>
                <div class="Body">
                 <p>J'ai réalisé ce site de location de bien immobiliere en PHP avec le framework symfony 4 en générant des fixtures(des faux profils) afin de montrer les fonctionnabilités, ce site vous permet de vous inscrire, publier une annonce, réserver un bien, noter et commenter un bien.
                   il y a également un coté administrateur qui permet de gerer , modifier, supprimer des annonces. </p>
                   <a href="https://www.TravelBnb.fr" class="savoirPlus" target="blank">Accèder</a>
               </div>
              </div>
            </div>
            <div class="New" onclick="MakeCenter(this.id)" id="Right">
              <img src="ressources/ad.jpg" alt="ad">
              <div class="Info">
                <div class="Header">
                 <p>Agence Ad Hoc</p>
                 <hr class="ligne">
               </div>
                <div class="Body">
                 <p>Réalisation d'un menu en JavaScript pour une Agence</p>
                 <a href="ressources/sphere/index.html" class="savoirPlus" target="blank">Accèder</a>
               </div>
              </div>
            </div>
         </div>
    </section>

    <!-- recommandations -->
    <section id="phrasesSlide">

        <div class="cadre">
            <div class="centre">
                <div class="carousel">
                    <div class="changeHidden">
                        <div class="contenant">
                            <div class="element">Gestion de projet</div>
                            <div class="element">Graphisme</div>
                            <div class="element">Webdesign</div>
                            <div class="element">Développement</div>
                            <div class="element">Gestion de projet</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="capable">
        <h3>Services</h3>
        <hr>
        <p>Je souhaite faire parti de votre aventure de part mes nombreuses capacités de :</p>
        
        <div class="containerFlexTeam">
           <section>
                <div class="grilleCSS projet projet-left">
                  <div class="box">
                    <img src="ressources/UX.jpg" alt="developpeur" class="imgServices">
                    <div class="overlay"></div>
                  </div>
          
                  <div class="projet-info">
                    <h4>UX UI Designer</h4>
                  </div>
                </div>
            </section>
          
              <section>
                <div class="grilleCSS projet projet-right">
                  <div class="box">
                    <img src="ressources/webdesigner.jpg" alt="UX UI" class="imgServices">
                    <div class="overlay"></div>
                  </div>
          
                  <div class="projet-info">
                    <h4>Webdesigner</h4>
                  </div>
                </div>
            </section>
          
              <section>
                <div class="grilleCSS projet projet-left">
                  <div class="box">
                    <img src="ressources/dev1.jpg" alt="webdesigner" class="imgServices">
                    <div class="overlay"></div>
                  </div>
          
                  <div class="projet-info">
                    <h4>Développeur Web</h4>
                  </div>
                </div>
            </section>
        </div>
        

        
    </section>
    
    <!-- Contact -->
    <section id="contact">
        <h2>Contact</h2>
        <hr>
        <h3>Telephone : +33 623384189</h3>
        <h3>Email : khaiway.la@gmail.com</h3>
        
        <div id="form-div">
            <form id="contact-form" method="post" action="" role="form">
              <div class="contactSection">
              <p class="name">
                <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" value="" />
              </p>
                <p class="messageError" style="font-size: 15px; font-family: 'Rajdhani';"></p>
                </div>
            <div class="contactSection">
              <p class="email">
                <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" value="" />
              </p>
                <p class="messageError" style="font-size: 15px; font-family: 'Rajdhani';"></p>
            </div>
            <div class="contactSection">
              <p class="text">
                <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
              </p>
                <p class="messageError" style="font-size: 15px; font-family: 'Rajdhani';"></p>
            </div>

              <div class="submit">
                <input type="submit" value="Envoyer" id="button-blue"/>
                <div class="ease"></div>
              </div>


            </form>
          </div>


    </section>

    <!-- footer -->
    <footer id="flexMedias">
        <div class="reseaux">
            <div class="medias">
                <a href="https://www.linkedin.com/in/khai-way-la/" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
            <div class="medias">
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="medias">
                <a href="https://www.facebook.com/khaiwayla" target="_blank"><i class="fab fa-facebook-square"></i></a>
            </div>
        </div>
            <h3>@copyright Khai-way LA</h3>
       
    </footer>

<script src="js/app.js"></script>
<script src="js/greenSock.js"></script>
<script src="js/script.js"></script>

</body>
</html>