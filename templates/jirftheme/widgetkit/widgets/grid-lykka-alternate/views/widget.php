<?php
/**
* @package   jirftheme
* @author    Francisco Javier Cleofas Solis <javier.cleofas@hotmail.com>
* @copyright Copyright (C) All rights reserved
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// Id
$settings['id'] = substr(uniqid(), -3);

// Grid
$grid  = 'uk-grid-width-1-'.$settings['columns'];
$grid .= $settings['columns_small'] ? ' uk-grid-width-small-1-'.$settings['columns_small'] : '';
$grid .= $settings['columns_medium'] ? ' uk-grid-width-medium-1-'.$settings['columns_medium'] : '';
$grid .= $settings['columns_large'] ? ' uk-grid-width-large-1-'.$settings['columns_large'] : '';
$grid .= $settings['columns_xlarge'] ? ' uk-grid-width-xlarge-1-'.$settings['columns_xlarge'] : '';
$grid .= ' uk-grid-collapse';

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

// Link Style
switch ($settings['link_style']) {
    case 'button':
        $link_style = 'uk-button';
        break;
    case 'primary':
        $link_style = 'uk-button uk-button-primary';
        break;
    case 'button-large':
        $link_style = 'uk-button uk-button-large';
        break;
    case 'primary-large':
        $link_style = 'uk-button uk-button-large uk-button-primary';
        break;
    default:
        $link_style = '';
        break;
}

// Animation
$animation = ($settings['animation'] != 'none') ? ' data-uk-scrollspy="{cls:\'uk-animation-' . $settings['animation'] . ' uk-invisible\', target:\'> div\', delay:300}"' : '';

// Overlay
$overlay = $settings['overlay_background'] ? 'uk-overlay-background' : '';
$overlay .= ' uk-overlay-'. $settings['overlay_animation'];

?>

<div class="uk-grid <?php echo $grid; ?> <?php echo $settings['class']; ?>" <?php echo $animation; ?>>

<?php foreach ($items as $i => $item) :

        // Media Type
        $attrs = array();
        $width = $item['media.width'];
        $height = $item['media.height'];

        if ($item->type('media') == 'image') {
            $attrs['alt'] = $item['title'];
            $width = ($settings['image_width'] != 'auto') ? $settings['image_width'] : '';
            $height = ($settings['image_height'] != 'auto') ? $settings['image_height'] : '';

            if ($settings['media_animation'] != 'none') {
                $attrs['class'] = 'uk-overlay-' . $settings['media_animation'];
            }
        }

        if ($item->type('media') == 'video') {
            $attrs['class']    = 'uk-responsive-width';
            $attrs['controls'] = '';
        }

        if ($item->type('media') == 'iframe') {
            $attrs['class']    = 'uk-responsive-width';
        }

        if ($width) {
            $attrs['width'] = $width;
        }

        if ($height) {
            $attrs['height'] = $height;
        }

        if (($item->type('media') == 'image') && ($settings['image_width'] != 'auto' || $settings['image_height'] != 'auto')) {
            $media = $item->thumbnail('media', $width, $height, $attrs);
        } else {
            $media = $item->media('media', $attrs);
        }

        if ($settings['media_overlay']) {
            $media  = '<div class="uk-overlay uk-text-center">' . $media;
            $media .= '<div class="uk-overlay-panel '. $overlay .'"></div>';
            $media .= '</div>';
        }

    ?>

    <div class="uk-overlay-hover <?php echo $animation ? 'uk-invisible' : '' ?>">

        <div class="uk-panel" data-uk-grid-match="{row: false, ignorestacked: true, target: '> div'}">

            <?php if ($item['media']) : ?>
            <div <?php echo ($i % 2) ? 'class="uk-visible-small"' : ''; ?>>
                <?php echo $media; ?>
            </div>
            <?php endif; ?>


            <div class="<?php echo $panel ?> uk-flex uk-flex-column uk-flex-center uk-text-center">
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
                    <?php echo $item['content']; ?>
                    <?php endif; ?>

                    <?php if (($item['link'] && $settings['link']) && !$settings['panel_link']) : ?>
                    <p class="uk-margin"><a<?php if($link_style) echo ' class="' . $link_style . '"'; ?> href="<?php echo $item->escape('link'); ?>"><?php echo $app['translator']->trans($settings['link_text']); ?></a></p>
                    <?php endif; ?>
                </div>
            </div>

            <?php if ( $item['media'] && $i % 2) : ?>
            <div class="uk-hidden-small">
                <?php echo $media; ?>
            </div>
            <?php endif; ?>

            <?php if ($item['link'] && $settings['panel_link']) : ?>
            <a href="<?php echo $item['link'] ?>" class="uk-position-cover uk-position-z-index"></a>
            <?php endif; ?>

        </div>
    </div>

<?php endforeach; ?>

</div>
