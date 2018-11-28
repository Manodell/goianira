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
class ModSliderslickHelper
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    

    
    public static function getSlickitens($params)

    {
        $count_sfx = $params->get('count');
        $catid_sfx = $params->get('catid')[0];
               
        $db     = JFactory::getDbo();
        $query  = $db->getQuery(true);

        $query->from('`#__conimages` AS a');

        $query->select('a.id');
        $query->select('a.img_nome');
        $query->select('a.img_local');
        $query->select('a.img_texto');
        $query->select('a.catid');    
        $query->where('a.state=1');
        $query->where('a.catid='.$catid_sfx);
        
        $db->setQuery($query, 0);

        return $db->loadObjectList();

       
    }
    
}