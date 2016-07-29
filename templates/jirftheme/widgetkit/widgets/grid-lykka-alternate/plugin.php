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

    'name' => 'widget/grid-lykka-alternate',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',

    'config' => array(

        'name'  => 'grid-lykka-alternate',
        'label' => 'Grid Lykka Alternate',
        'icon'  => 'plugins/widgets/grid-lykka-alternate/widget.svg',
        'view'  => 'plugins/widgets/grid-lykka-alternate/views/widget.php',
        'item'  => array('title', 'content', 'media'),
        'settings' => array(
            'columns'           => '1',
            'columns_small'     => 0,
            'columns_medium'    => 0,
            'columns_large'     => 0,
            'columns_xlarge'    => 0,
            'panel'             => 'blank',
            'panel_link'        => false,
            'animation'         => 'none',

            'image_width'       => 'auto',
            'image_height'      => 'auto',
            'content_align'     => true,
            'media_overlay'     => true,
            'overlay_background'=> true,
            'overlay_animation' => 'fade',
            'media_animation'   => 'scale',

            'title'             => true,
            'content'           => true,
            'link'              => true,
            'link_style'        => 'button',
            'link_text'         => 'Read more',

            'class'             => ''
        )

    ),

    'events' => array(

        'init.site' => function($event, $app) {
            $app['scripts']->add('uikit-grid', 'vendor/assets/uikit/js/components/grid.min.js', array('uikit'));
        },

        'init.admin' => function($event, $app) {
            $app['angular']->addTemplate('grid-lykka-alternate.edit', 'plugins/widgets/grid-lykka-alternate/views/edit.php', true);
        }

    )

);
