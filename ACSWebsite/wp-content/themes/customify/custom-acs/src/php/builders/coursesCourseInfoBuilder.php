<?php
function coursesCourseInfoBuilder($courseInfo)
{
  include_once coursesCourseInfoItemBuilder;
  $args["courseInfo"] = '';
  foreach ($courseInfo as $info)
  {
    $args["courseInfo"] .= coursesCourseInfoItemBuilder($info);
  }
  if (empty($args["courseInfo"]))
  {
    return '';
  }
  return render_php(course_info_html, $args);
}
 ?>
