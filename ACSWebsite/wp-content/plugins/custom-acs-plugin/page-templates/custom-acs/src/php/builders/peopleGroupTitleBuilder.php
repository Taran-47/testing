<?php
function peopleGroupTitleBuilder($groupName)
{
  $args["groupName"] = $groupName;
  return render_php(people_group_title_html, $args);
}
 ?>
