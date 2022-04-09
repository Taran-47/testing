<?php
/**
 * The template for displaying perosn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
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
include_once 'custom-acs/public/css/person.css';
echo "</style>";
include_once person_page;
/*
	$customDirectory = 'custom-acs/';
	echo '<style>';
	include_once $customDirectory.'person.css';
	echo '</style>';
	echo '<div id="person-page-content">';

	if (isset( $_GET['p']))
	{
		$personID = $_GET['p'];
		include_once $customDirectory.'getPerson.php';
		$person = getPerson($personID);
		if (!empty($person))
		{
			include_once $customDirectory.'getSectionsFromPerson.php';
			$sections = getSectionsFromPerson($person->person_id);
			include_once $customDirectory.'getCourses.php';
			$courses = getCourses();
			include_once $customDirectory.'getResearchFromPerson.php';
			$research = getResearchFromPerson($person->person_id);
			include_once $customDirectory.'createPersonPage.php';
		} else
		{
			echo '<h3>Uh-oh! That person does not exist!</h3>';
			include_once $customDirectory.'returnToPeopleButton.php';
		}
	} else
	{
		echo '<h3>Uh-oh! No Person has been selected!</h3>';
		include_once $customDirectory.'returnToPeopleButton.php';
	}
	echo '</div>';
	*/
?>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
