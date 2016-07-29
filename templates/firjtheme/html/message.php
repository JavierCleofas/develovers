<?php
/**
* @package   firjtheme
* @author    F. Javier Cleofas S. <javier.cleofas@hotmail.com>
* @copyright Copyright (C) All rights reserved
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// include config and layout
$base = dirname(__FILE__);
include($base.'/config.php');
include($warp['path']->path('layouts:'.preg_replace('/'.preg_quote($base, '/').'/', '', __FILE__, 1)));