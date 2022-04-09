<?php
function coursesSectionListBuilder($sections, $course)
{
  include_once coursesSectionListItemBuilder;
  //$args["sectionList"] = '';
  foreach ($sections as $sectionKey => $section)
  {
    $args["sectionList"] .= coursesSectionListItemBuilder($section, $course);
  }
  if (empty($args["sectionList"]))
  {
    return file_get_contents(courses_section_list_html_error_nosections);
  }
  return render_php(courses_section_list_html, $args);
}
 ?>
