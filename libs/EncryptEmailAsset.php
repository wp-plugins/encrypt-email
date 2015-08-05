<?php

/**
 * Handles loading of styles and scripts
 * 
 * @since 3.0.0
 */
class EncryptEmailAsset
{
    public $plugin_dir = '/encrypt-email/';
    public $assets_dir = 'assets/';
    public $css = array(
                'encrypt-email' => array(
                    'src'   => 'css/encrypt-email.css',
                    'deps'  => array('dashicons'),
                    'ver'   => null,
                    'media' => 'screen'
                ),
            );

    public $js = array(
                // 'encrypt-email' => array(
                //     'src'       => 'js/script.js',
                //     'deps'      => array('jquery'),
                //     'ver'       => '1.0.0',
                //     'in_footer' => true||false
                // ),
            );

    /**
     * Automatically loops through EncryptEmailAsset::$css property array and adds scripts and style dynamically
     * 
     * @since 3.0.0
     */
    public function __construct()
    {
        if (array_keys($this->css)) {
            add_action('wp_enqueue_scripts', array($this, 'css'));
        }

        if (array_keys($this->js)) {
            add_action('wp_enqueue_scritps', array($this, 'js'));
        }

    }

    /**
     * Enqueue css
     *
     * Populates the wo_enqueue_style() function from the EncryptEmailAsset::$css property array
     * 
     * @since 3.0.0
     */
    public function css()
    {
        foreach ($this->css as $id => $property) {
            wp_enqueue_style($id, plugins_url($this->plugin_dir) . $this->assets_dir . $property['src'], $property['deps'], $property['ver'], $property['media']);
        }
    }

    /**
     * Enqueue js
     *
     * Populates the wo_enqueue_script() function from the EncryptEmailAsset::$js property array
     * 
     * @since 3.0.0
     */
    public function js()
    {
        foreach ($this->js as $id => $property) {
            wp_enqueue_script($id, plugins_url($this->plugin_dir) . $this->assets_dir . $property['src'], $property['deps'], $property['ver'], $property['in_footer']);
        }
    }
}
