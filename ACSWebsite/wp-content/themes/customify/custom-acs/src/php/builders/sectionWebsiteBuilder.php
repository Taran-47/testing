<?php
function sectionWebsiteBuilder($websiteURL)
{
  if (($websiteURL) == constant("DEFAULT"))
  {
    return '';
  }
  $args["websiteLink"] = $websiteURL;
  return render_php(section_website_field_html, $args);
}
 ?>
