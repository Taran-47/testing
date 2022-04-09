<?php
function personSectionListBuilder($sections, $person)
{
  include_once personSectionListItemBuilder;
  foreach ($sections as $section)
  {
    $args["sectionList"] .=personSectionListItemBuilder($section);
  }
  if (empty($args["sectionList"]))
  {
    return '';
  }
  return render_php(person_section_list_html, $args);
}
 ?>
