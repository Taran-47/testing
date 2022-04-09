<?php
function courseLinkParser($input)
{
  $response = '';
  $credits = [
    '(0)',
    '(1)',
    '(3)',
    '(6)',
    '(lab)',
  ];
  while (strpos($input, 'ACS-') !== false)
  {
    $pos = strpos($input, 'ACS-');
    $length = 8;
    if (substr($input, $pos - 1, 1) === 'G')
    {
      $pos--;
      $length++;
    }
    if (substr($input, $pos + $length, 1) === 'L')
    {
      $length++;
    }

    $nameLength = $length;
    $subsection = substr($input, $pos, $length + 6);

    foreach ($credits as $credit)
    {
      if (strpos($subsection, $credit) !== false)
      {
        $creditPos = strpos($subsection, $credit) + $pos;
        $nameLength = $length + ($creditPos - $pos - $length) + strlen($credit);
        break;
      }
    }
    $first = substr($input, 0, $pos);
    $output = $output.$first;
    $course_id = substr($input, $pos, $length);
    $course_name = substr($input, $pos, $nameLength);
    $course_link = '../course/?c='.$course_id;
    clearstatcache();
    $output .= '<a href="'.$course_link.'">'.$course_name.'</a>';
    $input = substr($input, $pos + $nameLength);
  }
  $output .= $input;
  return $output;
}
 ?>
