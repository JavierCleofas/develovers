<?php
/**
* @package   jirftheme
* @author    Francisco Javier Cleofas Solis <javier.cleofas@hotmail.com>
* @copyright Copyright (C) All rights reserved
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// Grid Gutter
if ($settings['gutter']) {
    $grid = 'uk-grid';
} else {
    $grid = 'uk-grid uk-grid-collapse';
}

switch ($settings['gutter_vertical']) {
    case 'collapse':
        $gutter = ' uk-margin-top-remove';
        break;
    case 'large':
        $gutter = ' uk-margin-large';
        break;
    default:
        $gutter = '';
}

$grid .= $gutter;

// Grid Divider
if ($settings['gutter_vertical'] == 'collapse') {
    $gutter = ' uk-margin-remove';
}
$divider = $settings['divider'] ? '<hr class="uk-grid-divider ' . $gutter . '">' : '';

// Panel
$panel = 'uk-panel';
switch ($settings['panel']) {
    case 'box' :
        $panel .= ' uk-panel-box';
        break;
    case 'primary' :
        $panel .= ' uk-panel-box uk-panel-box-primary';
        break;
    case 'secondary' :
        $panel .= ' uk-panel-box uk-panel-box-secondary';
        break;
    case 'hover' :
        $panel .= ' uk-panel-hover';
        break;
    case 'header' :
        $panel .= ' uk-panel-header';
        break;
    case 'space' :
        $panel .= ' uk-panel-space';
        break;
}
$panel .= $settings['panel_space'] ? ' uk-panel-space' : '';

// Overlay
$overlay = ($settings['overlay_background']) ? 'uk-overlay-background' : '';
$overlay .= ' uk-overlay-'. $settings['overlay_animation'];

// Animation
$animation = ($settings['animation_media'] != 'none' || $settings['animation_content'] != 'none') ? ' data-uk-scrollspy="{target:\'> div > [data-uk-scrollspy-cls]\', delay:300}"' : '';


// Custom Class
$class = $settings['class'] ? ' class="' . $settings['class'] . '"' : '';

?>

<div<?php echo $class; ?> <?php echo $animation; ?>>

<?php foreach ($items as $i => $item) :  ?>

    <?php

        // Width
        $content_width = '1-1';
        if ($item['media']) {
            $content_width = '1-2';
        }

        // Alternate
        $alternate = $i % 2;
        if ($settings['invert']) {
            $alternate = !$alternate;
        }

        // Media
        $attrs = array();
        if ($item['media']) {
            $width = $item['media.width'];
            $height = $item['media.height'];

            if ($item->type('media') == 'image') {
                $attrs['media']['alt'] = $item['title'];
                $width = ($settings['image_width'] != 'auto') ? $settings['image_width'] : '';
                $height = ($settings['image_height'] != 'auto') ? $settings['image_height'] : '';

                if ($settings['media_animation'] != 'none') {

                    $attrs['media']['class'] = '';

                    if ($settings['media_animation'] != 'none') {
                        $attrs['media']['class']  .= ' uk-overlay-' . $settings['media_animation'];
                    }
                }
            }

            if ($item->type('media') == 'video') {
                $attrs['media']['class']    = 'uk-responsive-width';
                $attrs['media']['controls'] = '';
            }

            if ($item->type('media') == 'iframe') {
                $attrs['media']['class']    = 'uk-responsive-width';
            }

            if ($width) {
                $attrs['media']['width'] = $width;
            }

            if ($height) {
                $attrs['media']['height'] = $height;
            }

            if (($item->type('media') == 'image') && ($settings['image_width'] != 'auto' || $settings['image_height'] != 'auto')) {
                $media = $item->thumbnail('media', $width, $height, $attrs['media']);
            } else {
                $media = $item->media('media', $attrs['media']);
            }
        }

        if ($settings['media_overlay'] && $item['overlay']) {
            $media  = '<figure class="uk-overlay uk-overlay-hover uk-text-center">' . $media;
            $media .= '<div class="uk-overlay-panel '.$overlay.' uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-text-center">' . $item['overlay'] . '</div>';
            $media .= ($item['link'] && $settings['overlay_link'] == 'link') ? '<a href="'.$item->escape('link').'" class="uk-position-cover"></a>' : '';
            $media .= $settings['overlay_link'] == 'lightbox' ? '<a href="'. $item['media'] .'" class="uk-position-cover" data-uk-lightbox></a>' : '';
            $media .= '</figure>';
        }

        // Media 2
        if ($item['media2']) {
            $width = $item['media2.width'];
            $height = $item['media2.height'];

            if ($item->type('media2') == 'image') {
                $attrs['media2']['alt'] = $item['title'];
                $width = ($settings['image2_width'] != 'auto') ? $settings['image2_width'] : '';
                $height = ($settings['image2_height'] != 'auto') ? $settings['image2_height'] : '';

                if ($settings['media_animation'] != 'none') {

                    $attrs['media2']['class'] = '';

                    if ($settings['media_animation'] != 'none') {
                        $attrs['media2']['class']  .= ' uk-overlay-' . $settings['media_animation'];
                    }
                }
            }

            if ($item->type('media2') == 'video') {
                $attrs['media2']['class']    = 'uk-responsive-width';
                $attrs['media2']['controls'] = '';
            }

            if ($item->type('media2') == 'iframe') {
                $attrs['media2']['class']    = 'uk-responsive-width';
            }

            if (($item->type('media2') == 'image') && ($settings['image_width'] != 'auto' || $settings['image_height'] != 'auto')) {
                $media2 = $item->thumbnail('media2', $width, $height, $attrs['media2']);
            } else {
                $media2 = $item->media('media2', $attrs['media2']);
            }
        }

        if ($settings['media_overlay'] && $item['overlay2']) {
            $media2  = '<figure class="uk-overlay uk-overlay-hover uk-text-center">' . $media2;
            $media2 .= '<div class="uk-overlay-panel '.$overlay.' uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-text-center">' . $item['overlay2'] . '</div>';
            $media2 .= ($item['link'] && $settings['overlay_link'] == 'link') ? '<a href="'.$item->escape('link').'" class="uk-position-cover"></a>' : '';
            $media2 .= $settings['overlay_link'] == 'lightbox' ? '<a href="'. $item['media2'] .'" class="uk-position-cover" data-uk-lightbox></a>' : '';
            $media2 .= '</figure>';
        }

        // Animation Media
        $slide = '';
        if ($settings['animation_media'] == 'slide') {
            $slide = $alternate ? '-left' : '-right';
        }
        $animation_media = ($settings['animation_media'] != 'none') ? ' data-uk-scrollspy-cls="uk-animation-' . $settings['animation_media'] . $slide . ' uk-invisible"' : '';

        // Animation Content
        $slide = '';
        if ($settings['animation_content'] == 'slide') {
            $slide = $alternate ? '-right' : '-left';
        }
        $animation_content = ($settings['animation_content'] != 'none') ? ' data-uk-scrollspy-cls="uk-animation-' . $settings['animation_content'] . $slide . ' uk-invisible"' : '';

    ?>

    <div class="<?php echo $grid; ?>" data-uk-grid-match data-uk-grid-margin>

        <div class="uk-width-medium-<?php echo $content_width; ?> uk-width-1-1 uk-flex uk-flex-column <?php if ($settings['animation_content'] != 'none') echo ' uk-invisible'; ?>" <?php echo $animation_content; ?>>

            <?php if (($item['title'] && $settings['title']) || ($item['content'] && $settings['content'])) : ?>
                 <div class="<?php echo $panel; ?> uk-width-1-1 uk-flex uk-flex-middle uk-flex-center uk-text-center uk-flex-item-auto">
                    <div>

                        <?php if ($item['title'] && $settings['title']) : ?>
                        <h3 class="uk-panel-title">

                            <?php if ($item['link']) : ?>
                                <a class="uk-link-reset" href="<?php echo $item->escape('link'); ?>"><?php echo $item['title']; ?></a>
                            <?php else : ?>
                                <?php echo $item['title']; ?>
                            <?php endif; ?>
                        </h3>
                        <?php endif; ?>

                        <?php if ($item['content'] && $settings['content']) : ?>
                        <div class="uk-margin"><?php echo $item['content']; ?></div>
                        <?php endif; ?>

                    </div>
                 </div>
            <?php endif; ?>

            <?php if ($item['media2']) : ?>
                <div>
                    <?php echo $media2; ?>
                </div>
            <?php endif; ?>

        </div>

        <?php if ($item['media']) : ?>
        <div class="uk-width-medium-1-2 uk-width-1-1 uk-text-center <?php echo $alternate ? 'uk-flex-order-first-medium' : '' ?> <?php if ($settings['animation_media'] != 'none') echo ' uk-invisible'; ?>" <?php echo $animation_media; ?>>
            <?php echo $media; ?>
        </div>
        <?php endif; ?>

    </div>

    <?php if ($i+1 != count($items)) echo $divider; ?>

<?php endforeach; ?>

</div>
