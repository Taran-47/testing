<?php
function programsGroupItemBuilder($program, $group)
{
  include_once defineProgramVariables;
  $args = defineProgramVariables($program);
  $args["group"] = $group;
  include_once programLinkBuilder;
  $args['programLink'] = programLinkBuilder($program);
  //include_once get
  return render_php(programs_group_item_html, $args);
}
 ?>
