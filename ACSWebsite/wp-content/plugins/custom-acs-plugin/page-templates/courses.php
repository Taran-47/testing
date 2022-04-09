<?php
/**
 * The template for displaying people
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 * Template Name: Courses
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
include_once courses_page;
/*
	$customDirectory = 'custom-acs/';
	echo '<style>';
	include_once $customDirectory.'courses.css';
	echo '</style>';
	echo '<div id="courses-page-content">';
	include_once $customDirectory.'getCourses.php';
	$courses = getCourses();
	if (!empty($courses))
	{
		$sections = [];
		include_once $customDirectory.'getSections.php';
		$sections = getSections();
		if (!empty($sections))
		{
			include_once $customDirectory.'getPeople.php';
			$people = getPeople();
		}
		include_once $customDirectory.'createCoursesPage.php';
		//html formatting
	} else
	{
		echo "<h3>Uh-Oh! We don't seem to have any courses at the moment!";
	}
	echo '</div>';*/
?>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
