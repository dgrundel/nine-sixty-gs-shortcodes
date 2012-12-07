<?php /*
    Plugin Name: 960.gs Shortcodes
    Plugin URI: http://webpresencepartners.com
    Description: Adds [grid] and [clear] shortcodes for content editing convenience.
    Version: 1
    Author: Daniel Grundel, Web Presence Partners
    Author URI: http://webpresencepartners.com
*/
    
    class NineSixtyGSShortcodes {
        
        public function __construct() {
            add_shortcode('grid', array(&$this, 'grid'));
            add_shortcode('clear', array(&$this, 'clear'));
        }
        
        public function grid($atts, $content = '') {
            $width = (array_key_exists('width', $atts)) ? $atts['width'] : 12;
            $alpha = (in_array('alpha', $atts)) ? 'alpha' : '';
            $omega = (in_array('omega', $atts)) ? 'omega' : '';
            
            return '<div class="grid_'."{$width} {$alpha} {$omega}".'">'.do_shortcode($content).'</div>';
        }
        
        
        public function clear($atts) {
            
            return '<div class="clear"></div>';
        }
    }
    
    $nine_sixty_gs_shortcodes = new NineSixtyGSShortcodes();