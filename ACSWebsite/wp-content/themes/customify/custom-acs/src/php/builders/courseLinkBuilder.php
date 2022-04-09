<?php
function courseLinkBuilder($course)
{
  include_once getCourseVariables;
  $args = defineCourseVariables($course);
  //if ($args["personID"] == constant("DEFAULT"))
  //{
  //  return $args["personID"];
  //}
  //$args["courseFullTitle"] = $args["courseID"]." ".$args["courseTitle"];
  return render_php(course_link_html, $args);
}
 ?>
