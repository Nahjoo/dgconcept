<?php
get_header();
?>

<main id="main">

<!--==========================
  About Us Section
============================-->
<section id="about">
  <div class="container">
    <div class="row about-container">

      <div class="col-lg-6 content order-lg-1 order-2">
        <h2 class="title">A Propos</h2>
        <div class=" wow fadeInUp">
          <p>Nous proposons une gamme de Chalet, Carport, Abri de Jardin, Garde-corps, pergolas et Garage tout en
            Aluminium, avec une qualité de travail exceptionnel.
            Nous conseillons et proposon une grande variété de solutions sur-mesure, une gamme complète
            d’accessoires.
            Vous avez un projet de carport, d'un garage ou d'une autre chose ? Contactez-nous.</p>
          <a href="#contact"><button type="button" class="btn btn-outline-secondary">Contactez-nous</button></a>
        </div>

      </div>

      <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
    </div>

  </div>
</section><!-- #about -->

<!--==========================
  Portfolio Section
============================-->
<section id="portfolio">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h3 class="section-title">Portfolio</h3>
      <p class="section-description">De plus en plus, nous souhaitons profiter au maximum de notre jardin. Nos
        pièces de vie s’ouvrent vers l’extérieur. Acquérir une pergola, un Carport ou encore un abri de jardin tout
        cela en Aluminium ,vous permettra de profiter de la nature qui vous entoure à l’abri des intempéries dans
        un espace orienté vers la lumière. Vous avez une idée de projets ? Envie de profité de votre exterieur,
        mettre votre véhicule à l'abri ? Voici ce que DG.Concept vous propse avec quelque une de nos réalisation.</p>
    </div>
    <div class="row">

      <div class="col-lg-12">
        <ul id="portfolio-flters" >
          <li data-filter=".filter-carport"><img class="onglet" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/Carport/carport-abri-noir.JPG" alt="carport noir" >Carport</li>
          <li data-filter=".filter-chalet"><img class="onglet" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/chalet/Chalet.JPG" alt="image chalet">Chalet</li>
          <li data-filter=".filter-garage"><img class="onglet" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/garage/Chalet G B-2.JPG" alt="image garage">Garage</li>
          <li data-filter=".filter-abri"><img class="onglet" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/abri/Abri E-1.JPG" alt="image abri jardin">Abri de jardin</li>
          <li data-filter=".filter-pergolas">Pergolas</li>
          <li data-filter=".filter-gardecorps"><img class="onglet" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/garde-corps/IMG_1747.JPG" alt="image Garde-corps">Garde Corps</li>
          <li data-filter=".filter-cloison"><img class="onglet" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/cloison/IMG_1390.JPG" alt="image cloison">Cloison</li>
        </ul>
      </div>
    </div>
    <div class="row" id="portfolio-wrapper">
      <div class="col-lg-3 col-md-6 portfolio-item filter-carport">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/Carport/carport-abri-noir.JPG" alt="image carport noir">
        <div class="details">
          <h4>Web 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-carport">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/Carport/carport-maison.JPG" alt="image carport sur le coté maison">
        <div class="details">
          <h4>App 3</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-carport">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/Carport/carpot-abri-marron.JPG" alt="image carport marron">
        <div class="details">
          <h4>Card 1</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-chalet">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/chalet/Chalet.JPG" alt="image chalet">
        <div class="details">
          <h4>Card 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-chalet">
          <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/chalet/chalet-avancer-marron.JPG" alt="image chalet">
          <div class="details">
            <h4>Web 3</h4>
            <span>Alored dono par</span>
          </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-chalet">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/chalet/chalet-extention.JPG" alt="image chalet">
        <div class="details">
          <h4>Card 3</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-chalet">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/chalet/chalet-vitrer.JPG" alt="image chalet">
        <div class="details">
          <h4>App 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-chalet">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/chalet/chalet-vitrer-extention.JPG" alt="image chalet">
        <div class="details">
          <h4>Logo 1</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-chalet">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/chalet/IMG_0869.JPG" alt="image chalet">
        <div class="details">
          <h4>App 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-chalet">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/chalet/IMG_0870.JPG" alt="image chalet">
        <div class="details">
          <h4>App 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-chalet">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/chalet/2.jpg" alt="image chalet">
        <div class="details">
          <h4>App 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-chalet">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/chalet/9.jpg" alt="image chalet">
        <div class="details">
          <h4>App 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-garage">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/garage/Chalet G B-2.JPG" alt="image garage">
        <div class="details">
          <h4>Logo 3</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-garage">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/garage/Chalet G C-2.JPG" alt="image garage">
        <div class="details">
          <h4>Web 1</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-abri">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/abri/Abri E-1.JPG" alt="image abri jardin">
        <div class="details">
          <h4>Logo 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-abri">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/abri/Abri E-2.JPG" alt="image abri jardin">
        <div class="details">
          <h4>Logo 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-abri">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/abri/6.jpg" alt="image abri jardin">
        <div class="details">
          <h4>Logo 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-abri">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/abri/7.jpg" alt="image abri jardin">
        <div class="details">
          <h4>Logo 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-abri">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/abri/IMG_0866.JPG" alt="image abri jardin">
        <div class="details">
          <h4>Logo 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-abri">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/abri/IMG_0867.JPG" alt="image abri jardin">
        <div class="details">
          <h4>Logo 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-abri">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/abri/IMG_0868.JPG" alt="image abri jardin">
        <div class="details">
          <h4>Logo 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-abri">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/abri/IMG_1657.JPG" alt="image abri jardin">
        <div class="details">
          <h4>Logo 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-pergolas">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/" alt="image pergolas">
        <div class="details">
          <h4>Logo 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-cloison">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/cloison/IMG_1355.JPG" alt="image cloison">
        <div class="details">
          <h4>Web 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-cloison">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/cloison/IMG_1390.JPG" alt="image cloison">
        <div class="details">
          <h4>Web 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6 portfolio-item filter-cloison ">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/cloison/IMG_1391.JPG" alt="image cloison">
        <div class="details">
          <h4>Web 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-cloison">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/cloison/IMG_1817.JPG" alt="image cloison">
        <div class="details">
          <h4>Web 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-cloison">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/cloison/IMG_1818.JPG" alt="image cloison">
        <div class="details">
          <h4>Web 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-cloison">
        <a href="">
          <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/cloison/IMG_1824.JPG" alt="image cloison">
          <div class="details">
            <h4>Web 2</h4>
            <span>Alored dono par</span>
          </div>
        </a>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-cloison">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/cloison/IMG_2388.JPG" alt="image cloison">
        <div class="details">
          <h4>Web 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-cloison">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/cloison/IMG_2394.JPG" alt="image cloison">
        <div class="details">
          <h4>Web 2</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-cloison">
          <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/cloison/IMG_2501.JPG" alt="image cloison">
          <div class="details">
            <h4>Web 2</h4>
            <span>Alored dono par</span>
          </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-gardecorps">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/garde-corps/IMG_1745.JPG" alt="image Garde-corps">
        <div class="details">
          <h4>App 1</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-gardecorps">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/garde-corps/IMG_1747.JPG" alt="image Garde-corps">
        <div class="details">
          <h4>App 1</h4>
          <span>Alored dono par</span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-gardecorps">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/garde-corps/IMG_2699.JPG" alt="image Garde-corps">
        <div class="details">
          <h4>App 1</h4>
          <span>Alored dono par</span>
        </div>     
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-gardecorps">
        <img class="img-portfolio" src="<?= get_stylesheet_directory_uri(); ?>/img/portfolio/garde-corps/IMG_2934.JPG" alt="image Garde-corps">
        <div class="details">
          <h4>App 1</h4>
          <span>Alored dono par</span>
        </div>
      </div>
    </div>
  </div>
</section><!-- #portfolio -->

<!--==========================
  Team Section
============================-->
<section id="team">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h3 class="section-title">Notre équipe</h3>
      <p class="section-description"></p>
    </div>
    <div class="row equipe">
      <div class="col-lg-3 col-md-6">
        <div class="member">
          <h4>GRUSON Patrick</h4>
          <span></span>
          <div class="social">
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="member">
          <h4>DELCOURT Bruno</h4>
          <span></span>
          <div class="social">          
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- #team -->

<!--==========================
  Partenaires Section
============================-->
<section id="facts">
  <div class="container wow fadeIn">
    <div class="section-header">
      <h3 class="section-title">Nos Partenaires</h3>
    </div>
    <div class="row counters">
      <div class="text-center">
        <a href="http://facc-cloison.com/"><img class="facc" src="<?= get_stylesheet_directory_uri(); ?>/img/facc.png"></a>
      </div>
      <div class="text-center">
        <h2 class="facc">C.G.Rayonnages</h2>
      </div>
    </div>
  </div>
</section><!-- #facts -->

<!--==========================
  Contact Section
============================-->
<section id="contact">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h3 class="section-title">Contact</h3>
    </div>
  </div>

  <div class="container wow fadeInUp mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-4">
        <div class="info">
          <div>
            <i class="fa fa-envelope"></i>
            <p>info@example.com</p>
          </div>
          <div>
            <i class="fa fa-phone"></i>
            <p>03.21.26.39.40</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8">
        <div class="form">
          <div id="errormessage"></div>
          <form action="page.php" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Envoyer un message</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section><!-- #contact -->
</main>
<?php
get_footer();

