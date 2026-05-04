<?php
/**
 * TAVARDT Elite Security Functions
 * 
 * Instructions: Add these to your child theme's functions.php or, ideally,
 * create an MU-Plugin (must-use plugin) in /wp-content/mu-plugins/
 */

// 1. Hide WordPress Version (Footprinting mitigation)
add_filter( 'the_generator', '__return_empty_string' );

// 2. Remove detailed login error messages
// This makes it harder for attackers to enumerate valid usernames
add_filter( 'login_errors', function( $error ) {
    return '<strong>ERROR</strong>: Invalid login credentials.';
});

// 3. Disable XML-RPC completely via PHP
add_filter( 'xmlrpc_enabled', '__return_false' );

// 4. Remove WordPress version from scripts and styles
function tavardt_remove_wp_version_strings( $src ) {
    global $wp_version;
    parse_str( parse_url($src, PHP_URL_QUERY), $query );
    if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
add_filter( 'script_loader_src', 'tavardt_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'tavardt_remove_wp_version_strings' );

// 5. Restrict WP REST API to authenticated users only
add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
    }
    return $result;
});
