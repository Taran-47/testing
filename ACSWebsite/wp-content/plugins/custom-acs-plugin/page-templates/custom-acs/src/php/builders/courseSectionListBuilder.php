<?php
function courseSectionListBuilder($course)
{
  include_once courseSectionListItemBuilder;
  include_once getSectionsFromCourse;
  $sections = getSectionsFromCourse($course);
  foreach ($sections as $section)
  {
    $args["sectionList"] .= courseSectionListItemBuilder($section, $course);
  }
  if (empty($args["sectionList"]))
  {
    return file_get_contents(courses_section_list_html_error_nosections);
  }
  return render_php(courses_section_list_html, $args);
}
 ?>
