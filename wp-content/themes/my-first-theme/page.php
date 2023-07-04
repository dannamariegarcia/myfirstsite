<?php

// This is default page template

get_header(); ?>

<section class="page-container">

    <main>
        
        <?php if (have_posts()): ?>

			<?php while (have_posts()) : the_post();
            // Start your code below
            ?>

			    <div class="entry post-<?php the_ID(); ?>">

			   		<div class="container">
			   			
			   			<h1><?php the_title('xX ',' Xx', true); ?></h1>
                        <h1><?php echo get_the_title(); ?></h1>
                        <h1><?php echo get_the_title(2); ?></h1>
                        <?php echo get_the_content(); ?>

                        <div style="text-align:center"><?php the_post_thumbnail('large'); ?></div>

			   		</div>

			    </div>

			<?php endwhile; ?>

		<?php endif; ?>

    </main>

</section>

<?php get_footer(); ?>