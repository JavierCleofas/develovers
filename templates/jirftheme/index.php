<?php
/**
* @package   jirftheme
* @author    Francisco Javier Cleofas Solis <javier.cleofas@hotmail.com>
* @copyright Copyright (C) All rights reserved
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// get warp
$warp = require(__DIR__.'/warp.php');

// load main theme file, located in /layouts/theme.php
echo $warp['template']->render('theme');