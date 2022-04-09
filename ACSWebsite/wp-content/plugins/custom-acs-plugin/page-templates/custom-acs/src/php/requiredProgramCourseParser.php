<?php
function requiredProgramCourseParser($input)
{
  $response = '';
  /*
  $credits = [
    '(0)',
    '(1)',
    '(3)',
    '(6)',
    '(lab)',
  ];
  */
  $charCues = [
    ": ",
    ") ",
  ];
  $charReplace = [
    ":<br>",
    ")<br>",
  ];
  $input = str_replace($charCues, $charReplace, $input);


  while (strpos($input, 'ACS-') !== false)
  {
    $pos = strpos($input, 'ACS-');
    $length = 8;
    /*
    if (substr($input, $pos - 1, 1) === 'G')
    {
      $pos--;
      $length++;
    }
    */
    /*
    $nameLength = $length;
    if (substr($input, $pos + $length, 1) === 'L')
    {
      $nameLength++;
    }
    */

    /*
    foreach ($credits as $credit)
    {
      $subsection = substr($input, $pos, $length + strlen($credit) + 2);;
      if (strpos($subsection, $credit) !== false)
      {
        $creditPos = strpos($subsection, $credit) + $pos;
        $nameLength = $length + ($creditPos - $pos - $length) + strlen($credit);
        break;
      }
    }
    */
    include_once getCourseFromID;
    include_once getCourseVariables;
    $first = substr($input, 0, $pos);
    $output = $output.$first;
    $course_id = substr($input, $pos, $length);
    $course = getCourseFromID($course_id);
    $args = defineCourseVariables($course);
    $course_name = $args["courseID"]." (".$args["courseCredits"].") ".$args["courseTitle"];
    $course_link = '../course/?'.courseUrlParameter['course'].'='.$course_id;
    clearstatcache();
    $output .= '<a href="'.$course_link.'">'.$course_name.'</a><br>';
    $input = substr($input, $pos + $length);
  }
  $output .= $input;
  return $output;
}
 ?>
