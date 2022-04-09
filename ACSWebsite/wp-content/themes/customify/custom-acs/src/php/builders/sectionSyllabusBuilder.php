<?php
function sectionSyllabusBuilder($syllabusURL)
{
  if ($syllabusURL == constant("DEFAULT"))
  {
    return '';
  }
  $args["syllabusURL"] = $syllabusURL;
  return render_php(section_syllabus_field_html, $args);
}
 ?>
