<?php
function errorHandlerPagePeople($error = '')
{
  include_once departmentButton;
  $args["message"] = "Why don't you chekc out what else our department has to offer?";
  $args["button"] = departmentButton();
  include_once errorParser;
  $args["error"] = errorParser($error);
  return render_php(generic_page_error_html, $args);
}
 ?>
