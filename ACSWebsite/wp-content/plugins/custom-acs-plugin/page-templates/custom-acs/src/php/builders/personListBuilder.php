<?php
function personListBuilder($courses)
{
  include_once personListItemBuilder;
  $args["personList"] = '';
  foreach ($people as $person)
  {
    $args["personList"] .= personListItemBuilder($person);
  }
  if (empty($args["personList"]))
  {
    return file_get_contents(person_list_html_error_nopeople);
  }
  return render_php(person_list_html, $args);
}
 ?>
