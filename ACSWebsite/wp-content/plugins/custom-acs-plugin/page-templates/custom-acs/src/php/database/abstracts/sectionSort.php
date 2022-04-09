<?php
return "s.course_id,
        s.year,
        (CASE
          WHEN s.semester = 'fall' OR s.semester = 'fall/winter'
            THEN 1
          WHEN s.semester = 'winter'
            THEN 2
          WHEN s.semester = 'spring'
            THEN 3
        END),
        s.section_id";
 ?>
