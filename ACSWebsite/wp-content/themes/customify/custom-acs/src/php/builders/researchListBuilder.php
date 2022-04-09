<?php
function researchListBuilder($research, $person)
{
  include_once researchListItemBuilder;
  foreach ($research as $researchItem)
  {
    $args["researchList"] .= researchListItemBuilder($researchItem);
  }
  if (empty($args["researchList"]))
  {
    return '';
  }
  return render_php(research_list_html, $args);
}
 ?>
