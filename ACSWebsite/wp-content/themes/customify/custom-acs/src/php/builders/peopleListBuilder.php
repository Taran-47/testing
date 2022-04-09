<?php
function peopleListBuilder($people)
{
  include_once peopleListItemBuilder;
  $args["peopleList"] = '';
  foreach ($people as $person)
  {
    $args["peopleList"] .= peopleListItemBuilder($person);
  }
  if (empty($args["peopleList"]))
  {
    return file_get_contents(people_list_html_error_nopeople);
  }
  return render_php(people_list_html, $args);
}
 ?>
