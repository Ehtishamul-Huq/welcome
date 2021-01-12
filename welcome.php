<?php
/**
 * Plugin Name:       Welcome
 * Description:       Displays the welcome message to your visitors.
 * Version:           1.0
 * Author:            Ehtishamul Huq
 */
add_action('wp_body_open','tb_head');
function tb_head()
{
    echo '<h3 class="tb">Welcome to ' . get_bloginfo('name') . '</h3>';
}
add_action('wp_print_styles', 'tb_css');
function tb_css()
{
    echo '
    <style>
    h3.tb {color: blue; margin: 0; padding:30px; text-align: center; background: black}
    </style>
    ';
}