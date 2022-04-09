<?php
function peopleGroupBuilder($people, $groupName = '', $group = false)
{
  include_once peopleGroupTitleBuilder;
  $args["peopleGroup"] = ($groupName == '' ? '' : peopleGroupTitleBuilder($groupName));
  foreach ($people as $personKey => $person)
  {
    if ($group != false && trim($person->group) != $group)
    {
      unset($people[$personKey]);
    }
  }
  include_once peopleListBuilder;
  $args["peopleGroup"] .= peopleListBuilder($people);
  return render_php(people_group_html, $args);
}
 ?>
