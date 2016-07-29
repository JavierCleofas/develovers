<?php
/**
* @package   firjtheme
* @author    F. Javier Cleofas S. <javier.cleofas@hotmail.com>
* @copyright Copyright (C) All rights reserved
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// get warp
$warp = require(__DIR__.'/warp.php');

// render offline layout
echo $warp['template']->render('offline', array('title' => JText::_('TPL_WARP_OFFLINE_PAGE_TITLE'), 'error' => 'Offline', 'message' => JText::_('TPL_WARP_OFFLINE_PAGE_MESSAGE')));