<?php
get_header();

if (have_posts()) : 
	while (have_posts()) : the_post(); ?>
<!-- start of container -->
<div class="container">
    <div class="row">
      <div class="eleven columns">
      	<div class="postTitle">
      		<h2><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
      	</div>
        <div class="content animated fadeInDown">
            <div class=" "> <?php the_content(); ?></div>
            
		    </div>
      </div>
    </div>
  </div>
  <div class="baloon container animated slideInUp">
    <div class="row">
      <img src="http://lifeprints.jukh.net/wp-content/themes/lifeprints/images/baloon.png">
    </div>
  </div>
<!-- end of container -->
	<?php endwhile;
	else :
		echo '<p>No content found</p>'; 
	endif;
get_footer();
?>