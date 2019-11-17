<!-- Was inspired by https://youtu.be/FVqzKAUsM68?t=6024-->


<?php

get_header();

//the loop iterates through posts
//and displays their content
while(have_posts()){
    the_post(); ?>
     <h2><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
     <?php the_content(); ?>
     <hr>
    <?php
}

get_footer();
?>