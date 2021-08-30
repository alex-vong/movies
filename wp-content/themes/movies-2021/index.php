
<?php get_header(); ?>

<?php 
	if ( is_page('home') ) { 
		include('templates/pages/home.php'); 
	}

	if ( is_page('movies') ) {
		include('templates/pages/movie-card.php');
	
 	} 

	if ( is_singular('movie') ) { 
		include('templates/pages/movie-detail.php');
	} 

 
	if ( is_404() ) { 
 		include('templates/pages/page-not-found.php');
 	}

?>

<?php get_footer(); ?>