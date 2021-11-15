<?php

function enqueue_register() {
    add_action('admin_enqueue_scripts','enqueue');
}
function enqueue() {
wp_enqueue_style('estilos', plugin_dir_url(dirname(__FILE__,1)) . 'assets/styles.css');
wp_enqueue_script('escript', plugin_dir_url(dirname(__FILE__,1)) . 'assets/scripts.js');
}