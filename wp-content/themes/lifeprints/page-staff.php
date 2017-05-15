<?php
/*
Template Name: staff page
*/
?>
<?php
get_header();

if (have_posts()) : 
	while (have_posts()) : the_post(); ?>
<!-- start of container -->
<div class="container">
    <div class="row">
      <div class="allsttaf eleven columns">
      	<div class="postTitle">
      		<h2><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
      	</div>
        	<div class="staffrow animated fadeInDown">
				<div class="sttafPhoto .sepia"><img class="" src="http://lifeprints.jukh.net/wp-content/themes/lifeprints/images/sttaf.jpg"><h5>name</h5></div>
				<div class="sttafPhoto"><img class="" src="http://placehold.it/200x200"><h5>name</h5></div>
				<div class="sttafPhoto"><img class="" src="http://placehold.it/200x200"><h5>name</h5></div>
				<div class="sttafPhoto"><img class="" src="http://placehold.it/200x200"><h5>name</h5></div>	
			</div>
			<div class="staffrow animated fadeInDown">
				<div class="sttafPhoto"><img class="" src="http://placehold.it/200x200"><h5>name</h5></div>
				<div class="sttafPhoto"><img class="" src="http://placehold.it/200x200"><h5>name</h5></div>
				<div class="sttafPhoto"><img class="" src="http://placehold.it/200x200"><h5>name</h5></div>
				<div class="sttafPhoto"><img class="" src="http://placehold.it/200x200"><h5>name</h5></div>		
			</div>
			<div class="staffrow animated fadeInDown">
				<div class="sttafPhoto"><img class="" src="http://placehold.it/200x200"><h5>name</h5></div>
				<div class="sttafPhoto"><img class="" src="http://placehold.it/200x200"><h5>name</h5></div>
				<div class="sttafPhoto"><img class="" src="http://placehold.it/200x200"><h5>name</h5></div>
				<div class="sttafPhoto"><img class="" src="http://placehold.it/200x200"><h5>name</h5></div>		
			</div>
		</div>
     </div>
</div>
<!-- end of container -->
	<?php endwhile;
	else :
		echo '<p>No content found</p>'; 
	endif;
get_footer();
?>