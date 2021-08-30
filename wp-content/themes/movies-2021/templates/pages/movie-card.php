


<section class="page-section">
<inner-column>
	<div class="movieList">

	<?php 
		$parameters = array(  
	      'post_type' => 'movie',
	    );

	    $loop = new WP_Query( $parameters ); 
	        
	    while ( $loop->have_posts() ) : $loop->the_post(); 
	    		
	    		$portrait = get_field('portrait');

	    		if ($portrait) {
	    			$portrait = $portrait['url'];
	    		} else {
	    			$portrait = "https://peprojects.dev/images/square.jpg";

	    		}
	    			
				?>

				<movie-card class='<?=the_field('name')?>'>
				<a href="<?php the_permalink(); ?>">
					<picture class='portrait'>
						<img src="<?=$portrait?>" class='card-image' alt="">
					</picture>
				</a>
			</movie-card>

	     <?php the_excerpt(); 
	    endwhile;

	    wp_reset_postdata();  
	    ?>
	 </div>
</inner-column>
</section>

