<?php
function errorHandlerPageGradPrograms($error = '')
{
  include_once gradButton;
  $args["message"] = "Would you like to check out what else we have to offer our Grad Students?";
  $args["button"] = gradButton();
  include_once errorParser;
  $args["error"] = errorParser($error);
  return render_php(generic_page_error_html, $args);
}
 ?>
