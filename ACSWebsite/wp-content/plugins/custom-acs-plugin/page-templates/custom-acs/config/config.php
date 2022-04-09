<?php
//return array(
  include_once __DIR__.'/links.php';
  function render_php($path, array $args)
  {
    ob_start();
    include($path);
    $var=ob_get_contents();
    ob_end_clean();
    return $var;
  }

  include_once cleanResults;

  define('sectionUrlParameter', [
    'course' => 'c',
    'section' => 'sc',
    'year' => 'y',
    'semester' => 'sm',
  ]);
  define('personUrlParameter', [
    'person' => 'ps',
  ]);
  define('courseUrlParameter', [
    'course' => 'c',
  ]);
  define('programUrlParameter', [
    'program' => 'program',
  ]);

  function formatContactInfo($contactInfo, $contentType = 'link', $linkContent = '')
  {
    if ($linkContent == '') $linkContent = $contactInfo;
    switch ($contentType):
      case 'link':
        $contentType = 'https://';
        break;
      case 'phone':
        $contentType = 'tel:';
        break;
      case 'email':
        $contentType = 'mailto:';
        break;
    endswitch;
    return ($contactInfo != constant("DEFAULT") ? '<a href="'.$contentType.$contactInfo.'">'.$linkContent.'</a>' : $linkContent);
  }

  function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            }
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    }
    else {
        $output = $text;
    }
    return $output;
}

//Default 'Unavailable Information' Constant
define("DEFAULT", "N/A");
//Default 'Placeholder Profile Picture' URL
define("DEFAULT_PROFILE", "../wp-content/uploads/default-profile.jpg");
?>
