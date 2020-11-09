<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400;1,600&family=Press+Start+2P&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="container">
	<header>
        <h1 id="logo"><?php echo strtoupper(get_bloginfo( 'name' )); ?></h1>
	</header>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			echo '<div class="hero" style="background: url('. $url.')">'; ?>
			<h1 class="hero-text"><?php strtoupper(the_field('hero_text')); ?></h1>
		</div>
