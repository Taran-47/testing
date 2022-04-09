<?php
function programsPageBuilder($filter = '')
{
  include_once getPrograms;
  $programs = getPrograms();
  if (empty($programs))
  {
    include_once errorHandler;
    return errorHandler('programs', 'noprograms');
  }
  include_once getProgramsFromStream;
  include_once getProgramsFromLength;
  include_once getProgramsFromType;
  if (empty($filter) || $filter == 'undergrad')
  {
    $undergradGroups = [
      'Undergraduate General Applied Computer Science Programs' => getProgramsFromStream('acs'),
      'Undergraduate Information Systems Stream Programs' => getProgramsFromStream('information systems'),
      'Undergraduate Health Informatics Stream Programs' => getProgramsFromStream('health informatics'),
      'Undergraduate Scientific Computing Stream Programs' => getProgramsFromStream('scientific computing'),
      'Undergraduate Bachelor of Arts Programs' => getProgramsFromType('BA'),
      'Undergraduate Bachelor of Science Programs' => getProgramsFromType('BSc'),
      'Undergraduate 3-Year Programs' => getProgramsFromLength('3'),
      'Undergraduate 4-Year Programs' => getProgramsFromLength('4'),
      'Undergraduate Minor Programs' => getProgramsFromStream('minor'),
    ];
    $args["undergradGroups"] = groupsBuilder($undergradGroups, 'Undergraduate Programs');
  }
  if (empty($filter) || $filter == 'grad')
  {
    $gradGroups = [
      'Graduate Thesis-Based Programs' => getProgramsFromStream('thesis'),
      'Graduate Course-Based Programs' => getProgramsFromStream('course'),
    ];

    $args["gradGroups"] = groupsBuilder($gradGroups, 'Graduate Programs');
  }

  return render_php(programs_groups_html, $args);
}

function groupsBuilder($groups, $groupsTitle)
{
  include_once programsGroupBuilder;
  $args["groupsTitle"] = $groupsTitle;
  foreach ($groups as $groupName => $groupItems)
  {
    $args["content"] .= programsGroupBuilder($groupName, $groupItems);
  }
  return render_php(programs_groups_item_html, $args);
}
 ?>
