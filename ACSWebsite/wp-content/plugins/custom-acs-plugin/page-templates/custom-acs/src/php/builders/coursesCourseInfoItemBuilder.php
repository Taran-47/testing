<?php
function coursesCourseInfoItemBuilder($info)
{
  include_once defineCourseInfoVariables;
  $args = defineCourseInfoVariables($info);
  include_once courseLinkParser;
  $args["description"] = courseLinkParser($args["description"]);
  return render_php(course_info_item_html, $args);
}
 ?>
