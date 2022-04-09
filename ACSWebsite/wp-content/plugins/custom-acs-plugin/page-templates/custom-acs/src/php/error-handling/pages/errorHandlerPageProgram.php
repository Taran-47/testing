<?php
function errorHandlerPageProgram($error = '')
{
  include_once programsButtons;
  $args["message"] = "Maybe try looking in one of our program lists?";
  $args["button"] = programsButtons();
  include_once errorParser;
  $args["error"] = errorParser($error);
  return render_php(generic_page_error_html, $args);
}
 ?>
