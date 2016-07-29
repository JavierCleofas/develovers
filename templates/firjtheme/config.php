<?php
/**
* @package   firjtheme
* @author    F. Javier Cleofas S. <javier.cleofas@hotmail.com>
* @copyright Copyright (C) All rights reserved
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

return array(

    'path' => array(
        'theme'   => array(__DIR__),
        'js'      => array(__DIR__.'/js'),
        'css'     => array(__DIR__.'/css'),
        'less'    => array(__DIR__.'/less'),
        'layouts' => array(__DIR__.'/layouts'),
        'config' => array(__DIR__.'/config')
    ),

    'less' => array(

        'vars' => array(
            'less:theme.less'
        ),

        'files' => array(
            '/css/theme.css'     => 'less:theme.less',
            '/css/bootstrap.css' => 'less:bootstrap.less'
        )

    ),

    'cookie' => $cookie = md5(__DIR__),

    'customizer' => isset($_COOKIE[$cookie]),

    'branding' => '<a href="http://developers3.yidx.net/" target="_blank" title="Developers3">Developers3 Desarrollo de Sistemas.</a>'


);
