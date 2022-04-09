<?php
function biographyBuilder($biography)
{
  if ($biography == '' || $biography == constant("DEFAULT"))
  {
    return '';
  }
  return render_php(person_biography_html, $args["biography"] = $biography);
}
 ?>
