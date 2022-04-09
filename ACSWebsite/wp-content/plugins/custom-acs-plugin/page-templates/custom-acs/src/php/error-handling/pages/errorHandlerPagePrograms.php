<?php
function errorHandlerPagePrograms($error = '')
{
  include_once academicsButtons;
  $args["message"] = "Maybe check out one of our academic sections instead?";
  $args["button"] = academicsButtons();
  include_once errorParser;
  $args["error"] = errorParser($error);
  return render_php(generic_page_error_html, $args);
}
 ?>
