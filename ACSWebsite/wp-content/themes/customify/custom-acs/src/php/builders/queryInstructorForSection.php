<?php
function queryInstructorForSection($instructorID, $people) {
  if (!empty($people))
  {
    foreach ($people as $person)
    {
      if ($instructorID == trim($person->person_id))
      {
        include_once createInstructorForSection;
        return createInstructorForSection($person);
      }
    }
  }
  return $instructorID;
}
 ?>
