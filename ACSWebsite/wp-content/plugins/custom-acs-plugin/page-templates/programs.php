<?php
/**
 * The template for displaying programs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 * Template Name: Programs
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
/*$configs = */include_once __DIR__.'/custom-acs/config/config.php';
echo "<style type='text/css'>";
include_once 'custom-acs/public/css/programs.css';
echo "</style>";
include_once programs_page;
?>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
