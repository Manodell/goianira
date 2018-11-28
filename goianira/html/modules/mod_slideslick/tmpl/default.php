<?php 
/**
 * Con Imaages! Module Entry Point
 * 
 * @package    Joomla.Modules
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
// no direct access
defined('_JEXEC') or die();

?>
 <!--==========================
    Intro Section
  ============================-->
  <section id="intro">


    <div id="intro-carousel" class="owl-carousel owl-theme clearfix" >
    <?php
        foreach ($slidesslick as $row) : ?>
      <div class="item" style="background-image: url('<?php echo $row->img_local; ?>');">
          <div class="intro-content">
            <?php echo $row->img_texto; ?>
          </div>
      </div>
      
    <?php endforeach; ?>
    </div>
  </section><!-- #intro -->
