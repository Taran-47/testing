<?php
function errorParser($error = '')
{
  switch($error)
  {
    case "noinput":
      include_once errorNoinput;
      return errorNoinput();
    case "noperson":
      include_once errorNoperson;
      return errorNoperson();
    case "nosection":
      include_once errorNosection;
      return errorNosection();
    case "nocourse":
      include_once errorNocourse;
      return errorNocourse();
    case "nopeople":
      include_once errorNopeople;
      return errorNopeople();
    case "nocourses":
      include_once errorNocourses;
      return errorNocourses();
    case "noprograms":
      include_once errorNoprograms;
      return errorNoprograms();
    case "noprogram":
      include_once errorNoprogram;
      return errorNoprogram();
    default:
      include_once errorGeneric;
      return errorGeneric();
  }
}
 ?>
