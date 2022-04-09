<?php
function sectionListBuilder($sections, $course, $people, $args)
{
  $args["sections"] ='';
  foreach ($sections as $sectionKey => $section)
  {
    include_once coursesSectionListItemBuilder;
    $args["sections"] = $args["sections"].coursesSectionListItemBuilder($section, $course, $people, $args);
  }
  if (!empty($args["sections"]))
  {
    return courses-section-list-error-nosections-html;
  }
  return render_php(sectionList, $args);
}
 ?>
