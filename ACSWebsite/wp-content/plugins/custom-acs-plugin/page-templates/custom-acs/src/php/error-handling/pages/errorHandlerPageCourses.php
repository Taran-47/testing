<?php
function errorHandlerPageCourses($error = '')
{
  include_once ;
  $args["message"] = "";
  $args["button"] = ();
  include_once errorParser;
  $args["error"] = errorParser($error);
  return render_php(generic_page_error_html, $args);
}
 ?>
