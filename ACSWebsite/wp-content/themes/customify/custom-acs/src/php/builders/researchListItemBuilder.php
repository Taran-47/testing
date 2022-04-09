<?php
function researchListItemBuilder($researchItem)
{
  include_once defineResearchVariables;
  $args = defineResearchVariables($researchItem);
  return render_php(research_list_item_html, $args);
}
 ?>
