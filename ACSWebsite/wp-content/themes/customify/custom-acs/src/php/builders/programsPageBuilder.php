<?php
function programsPageBuilder()
{
  include_once getPrograms;
  $programs = getPrograms();
  if (empty($programs))
  {
    return file_get_contents(programs_groups_html_error_noprograms);
  }
  include_once getProgramsFromStream;
  include_once getProgramsFromLength;
  include_once getProgramsFromType;

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
  $gradGroups = [
    'Graduate Thesis-Based Programs' => getProgramsFromStream('thesis'),
    'Graduate Course-Based Programs' => getProgramsFromStream('course'),
  ];
  $args["undergradGroups"] = groupsBuilder($undergradGroups);
  $args["gradGroups"] = groupsBuilder($gradGroups);
  return render_php(programs_groups_html, $args);
}

function groupsBuilder($groups)
{
  include_once programsGroupBuilder;
  $response = '';
  foreach ($groups as $groupName => $groupItems)
  {
    $response .= programsGroupBuilder($groupName, $groupItems);
  }
  return $response;
}
 ?>
