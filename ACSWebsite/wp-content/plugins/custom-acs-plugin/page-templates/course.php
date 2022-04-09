<?php
/**
 * Template Name: Course
 */

get_header();
?>

<main id="site-content">

<?php
if ( have_posts() )
{
	while ( have_posts() )
		{
			the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
<?php }
}
include_once dirname(__FILE__).'/custom-acs/config/config.php';
echo "<style type='text/css'>";
include_once 'custom-acs/public/css/course.css';
echo "</style>";
include_once course_page;
?>

</main><!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
