<?php
function programsGroupBuilder($programGroup, $programs)
{
  include_once programsGroupItemBuilder;
  $args["programGroup"] = $programGroup;
  foreach ($programs as $program)
  {
    $args["groupList"] .= programsGroupItemBuilder($program);
  }
  if (empty($args["groupList"]))
  {
    return render_php(programs_group_html_error_noitems, $args);
  }
  return render_php(programs_group_html, $args);
}
 ?>
