<?php
function errorHandlerPagePerson($error = '')
{
  include_once peopleButton;
  $args["message"] = "Why not take a look at all of the people in the department instead?";
  $args["button"] = peopleButton();
  include_once errorParser;
  $args["error"] = errorParser($error);
  return render_php(generic_page_error_html, $args);
}
 ?>
