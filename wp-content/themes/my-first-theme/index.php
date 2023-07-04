<?php

// You can ignore this page

get_header(); ?>

<section class="page-container">

    <main>
        
        <?php if (have_posts()): ?>

			<?php while (have_posts()) : the_post(); ?>

			    <div class="entry post-<?php the_ID(); ?>">

			   		<div class="container">
			   			
			   			<?php the_content(); ?>

			   		</div>

			    </div>

			<?php endwhile; ?>

		<?php endif; ?>

    </main>

</section>

<?php get_footer(); ?>