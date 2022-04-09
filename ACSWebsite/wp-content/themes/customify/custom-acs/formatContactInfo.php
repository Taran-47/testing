<?php
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
