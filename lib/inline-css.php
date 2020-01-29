<?php

$inline_styles_selectors = array(
   // 'body' => array(
   //    'font-family' => '_themename_font_family'
   // ),
   'a,
   .header-nav .menu > .menu-item.mega > .sub-menu > .menu-item > a:hover,
   .header-nav .menu > .menu-item.mega > .sub-menu > .menu-item > .sub-menu a:hover' => array(
      'color' => '_themename_accent_colour'
   ),
   ':focus' => array(
      'outline-color' => '_themename_accent_colour'
   ),
   '.c-post.sticky' => array(
      'border-left-color' => '_themename_accent_colour'
   ),
   'button, input[type=submit], .header-nav .menu > .menu-item:not(.mega) .sub-menu .menu-item:hover > a' => array(
      'background-color' => '_themename_accent_colour'
   )
);

$inline_styles = '';

$font = get_theme_mod( $value );

foreach ($inline_styles_selectors as $selector => $props) {
   $inline_styles .= "{$selector} {";
       foreach ($props as $prop => $value) {
           $inline_styles .= "{$prop}: " . sanitize_hex_color(get_theme_mod( $value, '#20ddae' )) . ";";
       }
   $inline_styles .= "} ";
}

// foreach ($inline_styles_selectors as $selector => $props) {

//    // if($font == '"Playfair Display", serif' ) {
//    //    $inline_styles .= '@import url("https://fonts.googleapis.com/css?family=Playfair+Display&display=swap");';
//    // }

//    $inline_styles .= '{$selector} {';

//    foreach ($props as $prop => $value) {

//       // if($prop == 'font-family') {
//       //    $inline_styles .= '{$prop}: ' . get_theme_mod( $value, '"Roboto Slab", serif') . ';';
//       // } else {
//          $inline_styles .= '{$prop}: ' . sanitize_hex_color(get_theme_mod( $value, '#20ddae')) . ';';
//       // }
      
//    }

//    $inline_styles .= '} ';
// }

?>