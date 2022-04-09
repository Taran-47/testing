<?php
/**
 * The template for displaying course
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 * Template Name: Section
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
include_once 'custom-acs/public/css/section.css';
echo "</style>";
include_once section_page;
/*
	$customDirectory = 'custom-acs/';
	echo '<style>';
	include_once $customDirectory.'section.css';
	echo '</style>';
	echo '<div id="section-page-content">';

	if ((isset( $_GET['c'])) &&
			(isset( $_GET['n'])) &&
			(isset( $_GET['y'])) &&
			(isset( $_GET['t']))
			)
	{
		$courseID = $_GET['c'];
		$sectionID = $_GET['n'];
		$year = $_GET['y'];
		$semester = $_GET['t'];
		include_once $customDirectory.'getSection.php';
		$section = getSection(trim($courseID),
													trim($sectionID),
													trim($year),
													trim($semester));
		if (!empty($section))
		{
			include_once $customDirectory.'getCourse.php';
			$course = getCourse($courseID);
			include_once $customDirectory.'getPerson.php';
			$person = getPerson(trim($section->instructor_id));
			include_once $customDirectory.'createSectionPage.php';
		} else
		{
			echo '<h3>Uh-oh! That section does not exist!</h3>';
			include_once $customDirectory.'returnToCoursesButton.php';
		}
	} else
	{
		echo '<h3>Uh-oh! No Section has been selected!</h3>';
		include_once $customDirectory.'returnToCoursesButton.php';
	}
	echo '</div>';
	*/
?>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
