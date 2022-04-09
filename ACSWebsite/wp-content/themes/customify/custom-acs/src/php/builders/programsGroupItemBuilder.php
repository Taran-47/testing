<?php
function programsGroupItemBuilder($program)
{
  include_once defineProgramVariables;
  $args = defineProgramVariables($program);
  //include_once get
  return render_php(programs_group_item_html, $args);
}
 ?>
