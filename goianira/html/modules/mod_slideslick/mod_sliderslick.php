<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_slider
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the banners functions only once
JLoader::register('ModSliderslickHelper', __DIR__ . '/helper.php');



$slidesslick = &ModSliderslickHelper::getSlickitens($params);

require JModuleHelper::getLayoutPath('mod_sliderslick', $params->get('layout', 'default'));
