<?php
function errorHandlerPageUndergradCourses($error = '')
{
  include_once undergradbutton;
  $args["message"] = "Would you like to know something else about our Undergraduates?";
  $args["button"] = undergradButton();
  include_once errorParser;
  $args["error"] = errorParser($error);
  return render_php(generic_page_error_html, $args);
}
 ?>
