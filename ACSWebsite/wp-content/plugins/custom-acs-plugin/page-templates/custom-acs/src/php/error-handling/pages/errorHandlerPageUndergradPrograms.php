<?php
function errorHandlerPageUndergradPrograms($error = '')
{
  include_once undergradButton;
  $args["message"] = "Would you like to know something else about our Undergraduates?";
  $args["button"] = undergradButton();
  include_once errorParser;
  $args["error"] = errorParser($error);
  return render_php(generic_page_error_html, $args);
}
 ?>
