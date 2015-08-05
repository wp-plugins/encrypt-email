<?php

/**
 * Create Quicktags for the HTML editor
 *
 * @since 3.0.0
 */
class EncryptEmailQuickTag
{
    public $qtags = array(
            'encrypt_email'  => array(
                'display'       => 'Encrypt Email',
                'opening_tag'   => '[encrypt_email text=\"\" email=\"\"]',
                'closing_tag'   => '',
                'access_key'    => '',
                'title'         => 'Insert [encrypt_email] shortcode',
                'priority'      => 201,
                'instance'      => ''
            ),
            'encrypted_email' => array(
                'display'       => 'Encrypted Email',
                'opening_tag'   => '[encrypted_email text=\"\"]',
                'closing_tag'   => '[/encrypted_email]',
                'access_key'    => '',
                'title'         => 'Wrap email in [encrypted_email] shortcode',
                'priority'      => 202,
                'instance'      => ''
            ),
        );

    public function __construct()
    {
        add_action('admin_print_footer_scripts', array($this, 'make'));
    }

    /**
     * Make a quicktag
     *
     * @param  string $id           The html id for the button.
     * @param  string $display      The html value for the button.
     * @param  string $opening_tag  Either a starting tag to be inserted like "<span>" or a callback that is executed when the button is clicked.
     * @param  string $closing_tag  Ending tag like "</span>". Leave empty if tag doesn't need to be closed (i.e. "<hr />").
     * @param  string $access_key   Shortcut access key for the button.
     * @param  string $title        The html title value for the button.
     * @param  int    $priority     A number representing the desired position of the button in the toolbar. 1 - 9 = first, 11 - 19 = second, 21 - 29 = third, etc.
     * @param  string $instance     Limit the button to a specific instance of Quicktags, add to all instances if not present.
     * @return mixed                Null or the button object that is needed for back-compat.
     */
    public function make()
    {

        if (wp_script_is('quicktags')) {
?>

<script type="text/javascript">
<?php
foreach ($this->qtags as $k => $v) {
    echo 'QTags.addButton("' . $k . '", "' . $v['display'] . '", "' . $v['opening_tag'] . '", "' . $v['closing_tag'] . '", "' . $v['access_key'] . '", "' . $v['title'] . '", ' . $v['priority'] . ', "' . $v['instance'] . '");' . PHP_EOL;
}
?>
</script>

<?php
        }
    }
}
