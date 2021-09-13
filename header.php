<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charSet="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="note" content="environment=development" />

    <title>Okna</title>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <div class="container">
            <?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
        echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
}
?>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

    </header>