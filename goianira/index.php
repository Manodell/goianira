<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.Goianira
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();
$doc  = JFactory::getDocument();
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-more.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/modal.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

$sitetitle = htmlspecialchars($this->params->get('sitetitle'), ENT_QUOTES, 'UTF-8');
$sitedescription = htmlspecialchars($this->params->get('sitedescription'), ENT_QUOTES, 'UTF-8');

// FavIcon
if ($this->params->get('favIcon'))
{
  $favicon = $this->params->get('favIcon');
}
// Template color
if ($this->params->get('templateColor'))
{
  $this->addStyleDeclaration('
  body
    border-top: 3px solid ' . $this->params->get('templateColor') . ';
    background-color: ' . $this->params->get('templateBackgroundColor') . ';
  }');
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
  $logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" itemprop="logo" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
  $logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT, 'UTF-8') . '</span>';
}
else
{
  $logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1">
<jdoc:include type="head" />
  <!-- Favicons -->
  <link href="<?php echo JUri::root().$favicon;?>" rel="icon">
  
  <!-- Bootstrap CSS File -->
  <link href="<?php echo JUri::root().'templates/'.$this->template;?>/lib/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo JUri::root().'templates/'.$this->template;?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo JUri::root().'templates/'.$this->template;?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo JUri::root().'templates/'.$this->template;?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo JUri::root().'templates/'.$this->template;?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo JUri::root().'templates/'.$this->template;?>/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="<?php echo JUri::root().'templates/'.$this->template;?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo JUri::root().'templates/'.$this->template;?>/css/style.css" rel="stylesheet">
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:prefeitura@goianira.go.gov.br">prefeitura@goianira.go.gov.br</a>
        <i class="fa fa-phone"></i><a href="#" alt="" title="Atendimento: 08h às 11h e 13h às 17h"><span>62 3516-2090</span></a>
      
      
        <?php if ($this->countModules('position-social')) : ?>
      </div>
      <div class="social-links float-right">
        <jdoc:include type="modules" name="position-social" />
      </div>
      <?php else:?>
        <div class="social-links float-right">
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          
        </div>
      <?php endif; ?>
      
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container clearfix">
              <?php if ($this->countModules('main-menu')) : ?>
                <nav id="nav-menu-container">
                  <jdoc:include type="modules" name="main-menu" style="none"/>
                </nav>
              <?php else:?>
                <nav id="nav-menu-container">
                  <ul class="nav-menu">
                    <li class="menu-active"><a href="#body">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li class="menu-has-children"><a href="">Drop Down</a>
                      <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                      </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                  </ul>
                </nav><!-- #nav-menu-container -->
              <?php endif; ?>
     
        
    
      <div id="logo" itemscope itemtype="http://schema.org/image" class="pull-left">
        <a href="<?php echo JUri::root();?>"><?php echo $logo ;?></a>
      </div>


              <?php if ($this->countModules('position-search')) : ?>
                
                  <jdoc:include type="modules" name="position-search" style="none"/>
               
              
              <?php endif; ?>


    </div>
  </header><!-- #header -->
  <div class="clearfix"></div>

  <!--==========================
    Intro Section
  ============================-->
  <?php if ($this->countModules('slider-show')) : ?>
                
                  <jdoc:include type="modules" name="slider-show" style="none"/>
                
              
              <?php endif; ?>
  

  <main id="main">
    <div itemscope itemtype="http://schema.org/GovernmentOrganization">
      <h1 itemprop="name"><?php echo $sitetitle;?></h1>
    </div>

    <jdoc:include type="component" />
    
    <?php if ($this->countModules('position-about')) : ?>
      <jdoc:include type="modules" name="position-about" style="none"/>

    <?php endif; ?>

    <!--==========================
      Seção de Serviços
    ============================-->
    <?php if ($this->countModules('position-servicos')) : ?>
      <jdoc:include type="modules" name="position-servicos" style="main"/>
    
    <?php endif; ?>
    <sections>
      <div class="container">          
          <div class="row">
            <div class="col-lg-9 col-md-6 box wow fadeInLeft">
              <?php if ($this->countModules('position-3')) : ?>
                <jdoc:include type="modules" name="position-3" style="main"/>
              <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-6 box wow fadeInLeft">
              <?php if ($this->countModules('position-7')) : ?>
                <jdoc:include type="modules" name="position-7" style="sidebar"/>
              <?php endif; ?>
              
            </div>
            
          </div>

    </sections>
    
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contatos</h2>
          
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Endereço</h3>
              <address>Av. Goiás, nº 516 Centro - Goianira - Goiás</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefone</h3>
              <p><a href="contato">(62) 3516-2090</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:prefeirura@goianira.gov.go.br">prefeirura@goianira.gov.go.br</a></p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-3 col-sm-8 footer-links">
              <?php if ($this->countModules('position-menufooter1')) : ?>
                
                  <jdoc:include type="modules" name="position-menufooter1" style="menufooter"/>
                
              <?php else:?>
                <nav id="nav-menu-container">
                  <ul>
                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                    <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                  </ul>
                </nav><!-- #nav-menu-container -->
              <?php endif; ?>
            
          </div>

          <div class="col-lg-4 col-md-3 col-sm-8 footer-links">
            
            <?php if ($this->countModules('position-menufooter2')) : ?>
              <jdoc:include type="modules" name="position-menufooter2" style="menufooter"/>
            <?php endif; ?>
      
             <?php if ($this->countModules('position-social')) : ?>
              <div class="social-links">
                <jdoc:include type="modules" name="position-social" />
              </div>
      <?php else:?>
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
      <?php endif; ?>
            
      
            

          </div>
          <div class="col-lg-4 col-md-6 col-sm-4 footer-info">
            <img src="<?php echo JUri::root();?>/images/goianira/brasao_de_goianira.png" class="img-responsive"  />
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom">
      <div class="copyright">
        &copy; <strong> <?php echo $sitetitle;?></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/lib/owlcarousel/owl.carousel.js"></script>
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/lib/sticky/sticky.js"></script>
  <!-- Uncomment below if you want to use dynamic Google Maps -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo JUri::root().'templates/'.$this->template;?>/js/main.js"></script>

</body>
</html>
