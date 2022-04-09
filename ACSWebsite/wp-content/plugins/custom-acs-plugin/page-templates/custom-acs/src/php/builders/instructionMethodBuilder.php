<?php
function instructionMethodBuilder($instructionMethod)
{
  if ($instructionMethod == constant("DEFAULT"))
  {
    return '';
  }
  $args["instructionMethod"] = $instructionMethod;
  return render_php(instruction_method_html, $args);
}
 ?>
