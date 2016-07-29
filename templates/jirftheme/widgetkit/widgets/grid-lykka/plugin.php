<?php
/**
* @package   jirftheme
* @author    Francisco Javier Cleofas Solis <javier.cleofas@hotmail.com>
* @copyright Copyright (C) All rights reserved
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

/**
* @package   jirftheme
* @author    Francisco Javier Cleofas Solis <javier.cleofas@hotmail.com>
* @copyright Copyright (C) All rights reserved
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

return array(

    'name' => 'widget/grid-lykka',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',

    'config' => array(

        'name'  => 'grid-lykka',
        'label' => 'Grid Lykka',
        'icon'  => 'plugins/widgets/grid-lykka/widget.svg',
        'view'  => 'plugins/widgets/grid-lykka/views/widget.php',
        'item'  => array('title', 'content', 'media'),
        'fields'    => array(
            array(
                'name'  => 'media2',
                'type'  => 'media',
                'label' => 'Media 2'
            ),
        ),
        'settings' => array(
            'gutter'            => true,
            'gutter_vertical'   => 'default',
            'divider'           => false,
            'invert'            => false,
            'panel'             => 'blank',
            'panel_space'       => true,
            'animation_media'   => 'none',
            'animation_content' => 'none',

            'image_width'       => 'auto',
            'image_height'      => 'auto',
            'image2_width'      => 'auto',
            'image2_height'     => 'auto',
            'media_overlay'     => true,
            'overlay_background'=> false,
            'overlay_link'      => 'lightbox',
            'media_animation'   => 'none',
            'overlay_animation' => 'fade',

            'title'             => true,
            'content'           => true,
            'link'              => true,

            'class'             => ''
        )

    ),

    'events' => array(

        'init.site' => function($event, $app) {
        },

        'init.admin' => function($event, $app) {
            $app['angular']->addTemplate('grid-lykka.edit', 'plugins/widgets/grid-lykka/views/edit.php', true);
        }

    )

);
