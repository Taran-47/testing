<?php
function peoplePageBuilder()
{
  include_once getPeople;
  $people = getPeople();
  if (empty($people))
  {
    return render_php(people_html_error_nopeople);
  }
  include_once peopleGroupBuilder;
  $groups = [
    'faculty' => 'Faculty',
    'contract' => 'Contract Faculty',
    'staff' => 'Staff',
  ];
  $args["content"] = '';
  foreach ($groups as $group => $groupName)
  {
    $args["content"] .= peopleGroupBuilder($people, $groupName, $group);
    $people = removeGroup($people, $group);
  }
  if (!empty($people))
  {
    $args["content"] .= peopleGroupBuilder($people, "Other Staff");
  }
  return render_php(people_groups_html, $args);
}

function removeGroup($people, $group)
{
  foreach ($people as $personKey => $person)
  {
    if (trim($person->group) == $group)
    {
      unset($people[$personKey]);
    }
  }
  return $people;
}
 ?>
