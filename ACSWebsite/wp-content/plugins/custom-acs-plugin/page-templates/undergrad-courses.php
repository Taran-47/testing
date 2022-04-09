<?php
/**
 * The template for displaying undergad courses
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 * Template Name: Undergrad Courses
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
	include_once __DIR__.'/custom-acs/config/config.php';
	echo "<style type='text/css'>";
	include_once 'custom-acs/public/css/courses.css';
	echo "</style>";
	include_once undergrad_courses_page;
?>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
