<?php
/**
 * @package  AlecadddPlugin
 */
namespace Inc\Base;

use Inc\Base\BaseController;

/**
*
*/
class TemplateController extends BaseController
{
	public $templates;

	public function register()
	{
		if ( ! $this->activated( 'templates_manager' ) ) return;

		$this->templates = array(
			'page-templates/course.php' => 'Course Page',
			'page-templates/courses.php' => 'All Courses',
			'page-templates/undergrad-courses.php' => 'Undergrad Courses',
			'page-templates/people.php' => 'People Page',
			'page-templates/person.php' => 'Person Page',
			'page-templates/grad-courses.php' => 'Grad Courses',
			'page-templates/grad-programs.php' => 'Grad Programst',
			'page-templates/program.php' => 'Program Page',
			'page-templates/programs.php' => 'All Programs',
			'page-templates/section.php' => 'Section Page',
			'page-templates/undergrad-programs.php' => 'Undergrad Pages',
			'page-templates/collapsible.php' => 'collapsible',
			'page-templates/contact-us.php' => 'contact-us',
			'page-templates/employement.php' => 'employement',
			'page-templates/events-list.php' => 'events-list',
			'page-templates/faq.php' => 'faq',
			'page-templates/post-card.php' => 'post-card',
			'page-templates/scholarship.php' => 'scholarship',
			'page-templates/searchBarForPeoplePageAndFilter.php' => 'searchBarForPeoplePageAndFilter',
			'page-templates/searchBarForPostPages.php' => 'searchBarForPostPages',
		);

		add_filter( 'theme_page_templates', array( $this, 'custom_template' ) );
		add_filter( 'template_include', array( $this, 'load_template' ) );
	}

	public function custom_template( $templates )
	{
		$templates = array_merge( $templates, $this->templates );

		return $templates;
	}

	public function load_template( $template )
	{
		global $post;

		if ( ! $post ) {
			return $template;
		}

		$template_name = get_post_meta( $post->ID, '_wp_page_template', true );

		if ( ! isset( $this->templates[$template_name] ) ) {
			return $template;
		}

		$file = $this->plugin_path . $template_name;

		if ( file_exists( $file ) ) {
			return $file;
		}

		return $template;
	}
}
