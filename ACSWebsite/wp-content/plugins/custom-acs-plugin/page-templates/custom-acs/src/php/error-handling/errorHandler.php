<?php
function errorHandler($page = '', $error = '')
{
  switch($page)
  {
    case "person":
      include_once errorHandlerPagePerson;
      return errorHandlerPagePerson($error);
    case "people":
      include_once errorHandlerPagePeople;
      return errorHandlerPagePeople($error);
    case "course":
      include_once errorHandlerPageCourse;
      return errorHandlerPageCourse($error);
    case "undergrad-courses":
      include_once errorHandlerPageUndergradCourses;
      return errorHandlerPageUndergradCourses($error);
    case "grad-courses":
      include_once errorHandlerPageGradCourses;
      return errorHandlerPageGradCourses($error);
    case "courses":
      include_once errorHandlerPageCourses;
      return errorHandlerPageCourses($error);
    case "program":
      include_once errorHandlerPageProgram;
      return errorHandlerPageProgram($error);
    case "undergrad-programs":
      include_once errorHandlerPageUndergradPrograms;
      return errorHandlerPageUndergradPrograms($error);
    case "grad-programs":
      include_once errorHandlerPageGradPrograms;
      return errorHandlerPageGradPrograms($error);
    case "programs":
      include_once errorHandlerPagePrograms;
      return errorHandlerPagePrograms($error);
    case "section":
      include_once errorHandlerPageSection;
      return errorHandlerPageSection($error);
    default:
      include_once errorHandlerPageGeneral;
      return errorHandlerPageGeneral($error);
  }
}
 ?>
