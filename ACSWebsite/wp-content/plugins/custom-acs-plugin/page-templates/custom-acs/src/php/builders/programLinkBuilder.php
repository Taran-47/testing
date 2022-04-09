<?php
function programLinkBuilder($program)
{
  include_once defineProgramVariables;
  $args = defineProgramVariables($program);
  return render_php(program_link_html, $args);
}
 ?>
