<?php
include_once courseBuilder;
$args["content"] = courseBuilder();
echo render_php(course_html, $args);
 ?>
