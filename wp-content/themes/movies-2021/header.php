<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Movie DB: <?php echo wp_get_document_title(); ?></title>
	<meta
		name="description"
		content="PHP-Pokedex"
	/>
	<meta
		name="og:description"
		content="[[]]"
	/>

	<meta property="og:title" content="[[]]" />
	<meta property="og:type" content="">
	<meta property="og:url" content="">

	<meta property="og:image" content=[[]] />
	<link rel="shortcut icon" type="image/jpg" href="[[]]" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class='site-header'>
		<inner-column>
			<h1>Header</h1>
			<?php include('templates/components/site-menu.php') ?>
		</inner-column>

	</header>

<main>
<!-- <inner-column> -->