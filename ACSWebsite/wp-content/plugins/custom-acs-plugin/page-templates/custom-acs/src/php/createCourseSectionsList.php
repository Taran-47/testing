<?php
function createCourseSectionsList($sections, $course, $people, $args)
{
  $output = '';

  if (!empty($sections))
  {
    include_once sectionListBuilder;
    $output = sectionListBuilder($sections, $course, $people, $args);
  }
  if (empty($output))
  {
    return file_get_contents(sections_list_error_nosections);
  } else {
    return $output;
  }
}
 ?>
