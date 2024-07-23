<?php
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Start Level
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class=\"hidden group-hover:flex flex-col absolute left-0 top-full bg-white shadow-md py-3 transition duration-300 z-50 divide-y divide-gray-300\" aria-labelledby=\"navbarDropdown\">\n";
    }

    // End Level
    function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</div>\n";
    }

    // Start Element
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'px-6 py-3 flex items-center hover:bg-gray-100 transition';

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= $indent . '<a' . $class_names .' href="' . esc_attr($item->url) . '">';

        $output .= apply_filters('the_title', $item->title, $item->ID) . '</a>';
    }

    // End Element
    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "\n";
    }
}