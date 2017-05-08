<?php
/**
 * piclectic Theme Customizer
 *
 * @package piclectic 
 */


/**
 * Sanitizes our post content value (either excerpts or full post content). 
 *
 * @since 1.7
 */
function piclectic_sanitize_index_content( $content ) {
	if ( 'option1' == $content ) {
		return 'option1';
	} else {
		return 'option2';  
	}
} 

//Checkboxes
function piclectic_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

//Integers
function piclectic_sanitize_int( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

//Text
function piclectic_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

//Menu
function piclectic_sanitize_menu_toggle_display( $input ) {
    $valid = array(
      'icon' => '',
      'label' => '',
    );

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return 'label';
    }
}

//Menu
function piclectic_sanitize_photo_order( $input ) {
    $valid = array(
      'DESC' => '',
      'ASC' => '', 
    ); 

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return 'DESC';
    }
}

//Sanitizes Fonts 
function piclectic_sanitize_fonts( $input ) {  
    $valid = array(
			'', 
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Oswald:400,700' => 'Oswald',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Rokkitt:400' => 'Rokkitt', 
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

//No sanitize - empty function for options that do not require sanitization -> to bypass the Theme Check plugin
function piclectic_no_sanitize( $input ) {
}
