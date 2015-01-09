<?php
/**
 * @package my-simone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class =" index-box">		
	<div class="entry-content">
            <?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer continue-reading">
            <?php my_simone_posted_on(); ?>
                <?php edit_post_link( __( ' | Edit', 'my-simone' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-footer -->
    </div><!-- .index-box--> 
</article><!-- #post-## -->
