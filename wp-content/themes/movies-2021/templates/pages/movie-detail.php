

<?php 
	$title = get_field('title');
	$director = get_field('director');
	$portrait = get_field('portrait');
	$portrait2 = get_field('portrait_2');
	// var_dump($portrait2);
	$year = get_field('year_japan');
	$bio = get_field('description');
	$runTime = get_field('run_time');

	if ($portrait) {
		$portrait = $portrait['url'];
		} else {
		$portrait = "https://peprojects.dev/images/square.jpg";
		
	}

	if ($portrait2) {
	$portrait2 = $portrait2['url'];
	} else {
	$portrait2 = "https://peprojects.dev/images/square.jpg";
		
	}

?>

<inner-column class='wallpaper-column'>
	
		<picture class='wallpaper'>
			<img src="<?=$portrait2?>" alt="">
		</picture> 		

</inner-column>

<inner-column>
	<section class="<?=$title?>">

		<h1 class="name attention-voice"><?=$title?></h1>

		<ul>
			<li class="label number calm-voice">Directed By: <?=get_field('director')?>
			</li>

			<li span class="label calm-voice"><?=$year?>
			</li>

			<li class="label run-time calm-voice"> <?=$runTime?> min.
			</li>

			<li class="label bio calm-voice"><?=$bio?>
			</li>
	
		</ul>
	</section>
</inner-column>

