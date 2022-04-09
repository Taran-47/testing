<?php
function errorHandlerPageCourse($error = '')
{
  include_once coursesButtons;
  $args["message"] = "Maybe try looking in one of our course lists?";
  $args["button"] = coursesButtons();
  include_once errorParser;
  $args["error"] = errorParser($error);
  return render_php(generic_page_error_html, $args);
}
 ?>
