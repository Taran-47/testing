<?php
/**
 * The template for displaying undergad courses
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 * Template Name: Grad Courses
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
	include_once 'custom-acs/public/css/courses.css';
	echo "</style>";
	include_once grad_courses_page;
	/*
	$customDirectory = 'custom-acs/';
	echo '<style>';
	include_once $customDirectory.'grad-courses.css';
	echo '</style>';
	echo '<div id="grad-courses-page-content">';
	include_once getGradCourses;
	$courses = getGradCourses();
	if (!empty($courses))
	{
		$sections = [];
		include_once $customDirectory.'getGradSections.php';
		$sections = getGradSections();
		if (!empty($sections))
		{
			include_once $customDirectory.'getPeople.php';
			$people = getPeople();
		}
		include_once $customDirectory.'createGradCoursesPage.php';
	} else
	{
		echo "<h3>Uh-Oh! We don't seem to have any graduate courses listed at the moment!";
	}
	echo '</div>';
	*/
?>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
