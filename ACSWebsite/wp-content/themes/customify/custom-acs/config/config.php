<?php
//return array(
  include_once __DIR__.'/links.php';
  define("DEFAULT", "N/A");
  //Default 'Unavailable Information' Constant
define("DEFAULT", "N/A");
//Default 'Placeholder Profile Picture' URL
define("DEFAULT_PROFILE", "../wp-content/uploads/default-profile.jpg");
  function render_php($path, array $args)
  {
    ob_start();
    include($path);
    $var=ob_get_contents();
    ob_end_clean();
    return $var;
  }

  include_once cleanResults;

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
?>
